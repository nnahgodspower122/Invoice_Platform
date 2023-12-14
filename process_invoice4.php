<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username']; // Get the logged-in user's username

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['save_and_download'])) {
            // Connect to your database
            $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
            
            // Check if records already exist for the user and invoice id
            $checkExistingSql = "SELECT image_path, logo_image_path FROM invoice_data WHERE username = ? AND invoice_number = ?";
            $checkExistingStmt = $conn->prepare($checkExistingSql);
            
            if ($checkExistingStmt) {
                $checkExistingStmt->bind_param("ss", $username, $invoice_number);
            
                if ($checkExistingStmt->execute()) {
                    $result = $checkExistingStmt->get_result();
            
                    if ($result->num_rows > 0) {
                        // Records already exist, retrieve existing paths and assign them to new variables
                        list($existingImagePath, $existingLogoImagePath) = $result->fetch_row();
            
                        // Now you can use $existingImagePath and $existingLogoImagePath as needed
                        echo "";
                    } else {
                        echo "does not exist";
                    }
                } else {
                    // Handle the error
                    echo "Error: " . $checkExistingStmt->error;
                }
            
                $checkExistingStmt->close();
            } else {
                // Handle the error in preparing the statement
                echo "Error in preparing the statement: " . $conn->error;
            }

            // Get the logo_image data and move it to the 'upload' folder
            $logoImageData = $existingLogoImagePath;
            $logoImagePath = $existingLogoImagePath;
            move_uploaded_file($logoImageData, $logoImagePath);

            // Get the image data and move it to the 'upload' folder
            $imageData = $existingImagePath;
            $imagePath = $existingImagePath;
            move_uploaded_file($imageData, $imagePath);

            // Retrieve form data
            $from = $_POST['from'];
            $bill_to = $_POST['bill_to'];
            $ship_to = $_POST['ship_to'];
            $po_number = $_POST['po_number'];
            $due_date = $_POST['due_date'];
            $invoice_number = $_POST['invoice_number'];
            $invoice_date = $_POST['invoice_date'];
            $terms = $_POST['terms'];
            $invoice_currency_format = mysqli_real_escape_string($conn, $_POST['invoice_currency_format']);

            // Check if the invoice number already exists
            $check_sql = "SELECT * FROM invoice_data WHERE username = ? AND invoice_number = ?";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("ss", $username, $invoice_number);
            $check_stmt->execute();
            $result = $check_stmt->get_result();

            if ($result->num_rows > 0) {
                // Update existing record
                $update_sql = "UPDATE invoice_data SET from_field = ?, bill_to = ?, ship_to = ?, po_number = ?, due_date = ?, invoice_date = ?, terms = ?, invoice_currency_format = ? WHERE username = ? AND invoice_number = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("ssssssssss", $from, $bill_to, $ship_to, $po_number, $due_date, $invoice_date, $terms, $invoice_currency_format, $username, $invoice_number);

                if ($update_stmt->execute()) {
                    // Invoice data updated successfully
                    $invoice_id = $result->fetch_assoc()['id'];
                    $update_stmt->close();

                    // Accessing items
                    $items = $_POST['invoice']['items_attributes'];
                    foreach ($items as $item) {
                        $quantity = mysqli_real_escape_string($conn, $item['quantity']);
                        $description = mysqli_real_escape_string($conn, $item['description']);
                        $price = mysqli_real_escape_string($conn, $item['price']);
                        $amount = mysqli_real_escape_string($conn, $item['amount']);
                        $discount = mysqli_real_escape_string($conn, $item['discount']);
                        $tax = mysqli_real_escape_string($conn, $item['tax']);
                        $tax_name = mysqli_real_escape_string($conn, $item['tax_name']);

                        // Insert or update item details into the 'invoice_items' table, associating them with the invoice
                        $item_sql = "INSERT INTO invoice_data_items (invoice_id, quantity, description, price, amount, discount, tax, tax_name) 
                                     VALUES (?, ?, ?, ?, ?, ?, ?, ?) 
                                     ON DUPLICATE KEY UPDATE quantity = VALUES(quantity), description = VALUES(description), price = VALUES(price), amount = VALUES(amount), discount = VALUES(discount), tax = VALUES(tax), tax_name = VALUES(tax_name)";
                        $item_stmt = $conn->prepare($item_sql);

                        if ($item_stmt) {
                            $item_stmt->bind_param("dsssssss", $invoice_id, $quantity, $description, $price, $amount, $discount, $tax, $tax_name);

                            if ($item_stmt->execute()) {
                                // Item data inserted or updated successfully
                            } else {
                                // Handle the error
                                echo "Error: " . $item_stmt->error;
                            }

                            $item_stmt->close();
                        } else {
                            // Handle the error in preparing the statement
                            echo "Error in preparing the statement: " . $conn->error;
                        }
                    }
                } else {
                    // Handle the error
                    echo "Error updating record: " . $update_stmt->error;
                }
            } else {
                // Handle the error in preparing the statement
                echo "Record not found";
            }

            // Close the database connection
            $conn->close();
        }
    } elseif (isset($_POST['email_button'])) {
        echo "<script>window.location.href = 'mailer.php';</script>";
    } else {
        echo "User is not logged in.";
    }
}



require('includes/fpdf/fpdf.php');


class PDF extends FPDF {
    
    function Header($logoImageData, $fileTypeNew, $formData) {
        // Add your logo
        if (!empty($logoImageData)) {
            $imgLogo = 'logo.' . $fileTypeNew; // Use the provided file type
            file_put_contents($imgLogo, $logoImageData); // Save the image data to a file
    
            // Add the image to the PDF
            $this->Image($imgLogo, 176, 16, 25);
    
            unlink($imgLogo); // Delete the image file after it's been used
        } else {

        }
    
        // Add your invoice title
        $this->SetFont('Arial', 'B', 18);
        $this->SetTextColor(0, 0, 128);
        $this->Cell(0, 5, 'Invoice', 0, 0, 'R');
        $this->Ln(1);
        $from = isset($formData['from']) ? $formData['from'] : '';
        $this->addFromDetails($from);
    }
    
    function addFromDetails($formData) {
        $maxWidth = 100;
        $this->SetX(15); // Align the 'From Details' to the left column
        $this->SetY(10); // Adjust the Y position for 'From Details'
        $from = isset($formData['from']) ? $formData['from'] : '';
        $lines = explode("\n", $from);

        // Extract the first line
        $firstLine = isset($lines[0]) ? $lines[0] : '';

        // Use the first line in the MultiCell
        $this->SetFont('Arial', 'B', 18); // Set the font for the remaining lines
        $this->SetTextColor(0, 0, 128);
        $this->MultiCell($maxWidth, 5, $firstLine);
        $this->SetTextColor(0);

        $this->Ln(5);

        // Display the remaining lines
        $this->SetFont('Arial', '', 12); // Set font size for the remaining lines
        for ($i = 1; $i < count($lines); $i++) {
            $this->SetTextColor(0);
            $this->MultiCell($maxWidth, 5, $lines[$i]);
            $this->SetTextColor(0);
        }

        $this->Ln(18); // Adjust the space after 'From Details' if necessary
    }


    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'B', 11);
        $this->SetTextColor(0);
        $this->Cell(0, 10, 'Thank you for your patronage', 0, 0, 'C');
    }

    function generateInvoiceFromForm($formData) {
        $this->AddPage();

        

        // Check if the user is logged in
        if (isset($_SESSION['login_username'])) {
            $username = $_SESSION['login_username']; // Get the logged-in user's username
        
            // Connect to your database
            $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
            // Check if 'invoice_number' is set in the URL
            if (isset($_POST['invoice_number'])) {
                $invoice_number = $_POST['invoice_number'];
        
                // Retrieve invoice details from the database based on username and invoice_number
        $sql = "SELECT * FROM invoice_data WHERE username = ? AND invoice_number = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ss", $username, $invoice_number);
        
            if ($stmt->execute()) {
                $result = $stmt->get_result();
        
                if ($result->num_rows > 0) {
                    // Fetch the data
                    $row = $result->fetch_assoc();
        
        
                    // Retrieve image paths
                    $imagePath = $row['image_path'];
                    $logoImagePath = $row['logo_image_path'];
        
                    // Debugging: Display the image paths
                    // echo "Image Path: $imagePath<br>";
                    // echo "Logo Image Path: $logoImagePath<br>";
        
                    // Display the images
        
                } else {
                    echo "Invoice not found.";
                }
            } else {
                // Handle the error
                echo "Error executing the query: " . $stmt->error;
            }
        
            $stmt->close();
        } else {
            // Handle the error in preparing the statement
            echo "Error preparing the statement: " . $conn->error;
        }
        
        
                // Close the database connection
                $conn->close();
            } else {
                echo "Invoice number not set in the URL.";
            }
        } else {
            echo "User is not logged in.";
        }
        
        $logoImageData = file_get_contents($logoImagePath); 
        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        $fileTypeNew = pathinfo($logoImagePath, PATHINFO_EXTENSION);           	// Page header
        $this->InHeader = true;
        $this->Header($logoImageData, $fileTypeNew, $formData);
        $this->InHeader = false;

        // Get data from the form
        $invoice_number = isset($formData['invoice_number']) ? $formData['invoice_number'] : '';
            $due_date = isset($formData['due_date']) ? $formData['due_date'] : '';
            $invoice_date = isset($formData['invoice_date']) ? $formData['invoice_date'] : '';
            $bill_to = isset($formData['bill_to']) ? $formData['bill_to'] : '';
            $ship_to = isset($formData['ship_to']) ? $formData['ship_to'] : '';
            $po_number = isset($formData['po_number']) ? $formData['po_number'] : '';
            $terms = isset($formData['terms']) ? $formData['terms'] : '';
            $invoice_currency_format = isset($formData['invoice_currency_format']) ? $formData['invoice_currency_format'] : '';
            $items = isset($formData['invoice']['items_attributes']) ? $formData['invoice']['items_attributes']: [];
        // $this->SetFont('Arial', 'B', 12);
        // $this->Cell(60, 10, 'Invoice Number: ' . $invoice_number);
        // $this->Ln();

        // $this->SetFont('Arial', '');
        // $this->Cell(60, 10, 'Bill To: ' . $bill_to);
        // $this->Ln();

        // $this->Cell(60, 10, 'Ship To: ' . $ship_to);
        // $this->Ln(15);

        $this->addFromDetails($formData);
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(0, 0, 128);
        $this->Cell(63, 6, 'Bill To:');
        if ($ship_to !== '') {
        $this->Cell(65, 6, 'Ship To:');
        } else {
            $this->Cell(65, 6, ' ');
        }
        $this->Cell(22, 6, 'Invoice Number: ');
        $this->SetTextColor(0);
        $this->Cell(40, 6, $invoice_number, 0, 0, 'R');
        $this->Ln();

        // Example data for each column
        $column1Text = $bill_to;

        $column2Text = $ship_to;

        $column3Text = "Invoice Date";

        $column4Text = $invoice_date;

        // Set the height for each row
        $rowHeight = 10;

        // Set the width for each column
        $columnWidth = 55;

        $column2Margin = 63; // Margin for the 2nd column
        $column3Margin = 100;
        $column4Margin = 135; // Margin for the 3rd column

        // Set the font and any other styling if needed
        $this->SetFont('Arial', '');



        // Save the current X and Y positions
        $startX = $this->GetX();
        $startY = $this->GetY();

        // Column 1
        $this->MultiCell($columnWidth, 6, $column1Text, 0, 'L');

        // Column 2 - Move to the start position for the next cell with more left margin
        $this->SetXY($startX + $column2Margin, $startY);
        
        $this->SetFont('Arial', '');
        $this->MultiCell($columnWidth, 6, $column2Text, 0, 'L');
        

        // Column 3 - Move to the start position for the next cell with less left margin
        $this->SetXY($startX + $column3Margin, $startY);
        $this->SetTextColor(0, 0, 128);
        $this->SetFont('Arial', 'B');
        $this->MultiCell($columnWidth, $rowHeight, $column3Text, 0, 'R');
        $this->SetTextColor(0);

        $this->SetXY($startX + $column4Margin, $startY);
        $this->MultiCell($columnWidth, $rowHeight, $column4Text, 0, 'R');


        // Example data for each column
        $column9Text = "";

        $column10Text = "";
        if ($due_date !== '') {
        $column11Text = "Due_Date";
        } else {
        $column11Text = "";
        }
        $column12Text = $due_date;

        // Set the height for each row
        $rowHeight3 = 10;

        // Set the width for each column
        $columnWidth3 = 70;

        $column9Margin = 63; // Margin for the 2nd column
        $column10Margin = 80;
        $column11Margin = 120; // Margin for the 3rd column

        // Set the font and any other styling if needed
        $this->SetFont('Arial', '');



        // Save the current X and Y positions
        $startX = $this->GetX();
        $startY = $this->GetY();

        // Column 1
        $this->MultiCell($columnWidth3, 6, $column9Text, 0, 'L');

        // Column 2 - Move to the start position for the next cell with more left margin
        $this->SetXY($startX + $column9Margin, $startY);
        
        $this->SetFont('Arial', 'B');
        $this->MultiCell($columnWidth3, 6, $column10Text, 0, 'L');
        

        // Column 3 - Move to the start position for the next cell with less left margin
        $this->SetXY($startX + $column10Margin, $startY);
        $this->SetTextColor(0, 0, 128);
        $this->MultiCell($columnWidth3, 6, $column11Text, 0, 'R');
        $this->SetTextColor(0);

        $this->SetXY($startX + $column11Margin, $startY);
        $this->MultiCell($columnWidth3, 6, $column12Text, 0, 'R');


         // Example data for each column
         $column5Text = "";

         $column6Text = "";
         if ($po_number !== '') {
         $column7Text = "PO#";
        } else {
        $column7Text = "";
        }
         $column8Text = $po_number;
        
         // Set the height for each row
         $rowHeight2 = 10;
 
         // Set the width for each column
         $columnWidth2 = 70;
 
         $column6Margin = 63; // Margin for the 2nd column
         $column7Margin = 69;
         $column8Margin = 120; // Margin for the 3rd column
 
         // Set the font and any other styling if needed
         $this->SetFont('Arial', '');
 
 
 
         // Save the current X and Y positions
         $startX = $this->GetX();
         $startY = $this->GetY();
 
         // Column 1
         $this->MultiCell($columnWidth2, 6, $column5Text, 0, 'L');
 
         // Column 2 - Move to the start position for the next cell with more left margin
         $this->SetXY($startX + $column6Margin, $startY);
         
         $this->SetFont('Arial', 'B');
         $this->MultiCell($columnWidth2, 7, $column6Text, 0, 'L');
         
 
         // Column 3 - Move to the start position for the next cell with less left margin
         $this->SetXY($startX + $column7Margin, $startY);
         $this->SetTextColor(0, 0, 128);
         $this->MultiCell($columnWidth2, 8, $column7Text, 0, 'R');
         $this->SetTextColor(0);
 
         $this->SetXY($startX + $column8Margin, $startY);
         $this->MultiCell($columnWidth2, 8, $column8Text, 0, 'R');


          

        // Move to the next line
        $this->Ln(12);

        $this->SetFillColor(240, 240, 240);
        
        // Table for Quantity, Description, Unit Price, Subtotal
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(18, 10, 'Quantity', 1, 0, 'C', true);
        $this->Cell(75, 10, 'Description', 1, 0, 'C', true);
        $this->Cell(21, 10, 'Unit Price', 1, 0, 'R', true);
        $this->Cell(21, 10, 'Discount', 1, 0, 'R', true);
        $this->Cell(21, 10, 'Tax', 1, 0, 'R', true);
        $this->Cell(34, 10, 'Amount', 1, 0, 'R', true);

        
        $this->Ln();
        $startX = $this->GetX();
        $startY = $this->GetY();
        
        // Set the line color (if needed)
        $this->SetDrawColor(0); // Set the line color to black
        
        // Calculate the page width based on the current settings (PDF width - margins)
        $pageWidth = $this->w - $this->lMargin - $this->rMargin;
        
        // Draw a line after the first row at the current Y position
        $this->Line($startX, $startY, $startX + $pageWidth, $startY);

        $this->SetTextColor(0); 
        $this->SetFont('Arial', '');
        $subtotal = 0;
        foreach ($items as $item) {

            $quantity = isset($item['quantity']) ? $item['quantity'] : '';
            $description = isset($item['description']) ? $item['description'] : '';
            $price = isset($item['price']) ? $item['price'] : '';
            $discount = isset($item['discount']) ? $item['discount'] : '';
            $amount = isset($item['amount']) ? $item['amount'] : '';
            $tax = isset($item['tax']) ? $item['tax'] : '';
            $tax_name = isset($item['tax_name']) ? $item['tax_name'] : '';


            $formattedTax = $tax . '%';
            $formattedDiscount = $discount . '%';

            $discountAmount = ($price * $quantity) * ($discount / 100); // Calculating the discount amount
            $newAmount = ($price * $quantity) - $discountAmount;

            $formattedNewAmount = number_format($newAmount, 2, '.', '');

            $this->Cell(18, 10, $quantity, 1, 0);
            $this->Cell(75, 10, $description, 1, 0);
            $this->Cell(21, 10, $price, 1, 0, 'R');
            $this->Cell(21, 10, $formattedDiscount, 1, 0, 'R');
            $this->Cell(21, 10, $tax_name . ' ' . $formattedTax, 1, 0, 'R');
            $this->Cell(34, 10, $amount, 1, 0, 'R');
            $this->Ln();
            

            $subtotal += $amount;
        }

        // // Display Subtotal and Total
        // $this->SetFont('Arial', 'B', 10);
        // $this->Cell(156, 10, 'Subtotal:', 0, 0, 'R');
        // $this->Cell(34, 10, $invoice_currency_format . $subtotal, 1, 1, 'R');
        
        // $formattedTax = $tax . '%';
        // $this->Cell(156, 10, $tax_name . ' ' . $formattedTax, 0, 0, 'R');
        // $tax = 0.15 * $subtotal; // Example Tax Calculation (15%)
        // $total = $subtotal + $tax;
        // $this->Cell(34, 10, $invoice_currency_format . $tax, 1, 1, 'R');
        
        $total = $subtotal;
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(156, 10, 'Total:', 0, 0, 'R');
        $this->SetFillColor(240, 240, 240);

        $formattedTotal = number_format($total, 2, '.', '');
        $this->Cell(34, 10, $invoice_currency_format . $formattedTotal, 1, 1, 'R', true);

        $imageData = file_get_contents($imagePath); 
        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        $fileType = pathinfo($imagePath, PATHINFO_EXTENSION); // Get file extension

        // Call function to display signature
        $this->addSignature($imageData, $fileType);

        // Call function to display terms and conditions
        $this->addTermsAndConditions($formData);

        // Call function to display bank details
        $this->addBankDetails();
    }

    function addSignature($imageData, $fileType) {
        $this->SetY(50); // Adjust the Y position according to your layout
    
        if (!empty($imageData)) {
            $img = 'signature.' . $fileType; // Use the provided file type
            file_put_contents($img, $imageData); // Save the image data to a file
    
            // Add the image to the PDF
            $this->Image($img, 156, 182, 45);
    
            unlink($img); // Delete the image file after it's been used
        } else {
            // Handle the case where image data is empty or not received
            echo "No image data received for signature.";
        }
    }
    function addTermsAndConditions($formData) {
        $terms = isset($formData['terms']) ? $formData['terms'] : '';
        $this->SetY(210); // Set Y position at the bottom of the page
        $this->SetFont('Arial','B', 11);
        $this->Cell(0, 10, 'Terms and Conditions:', 0, 1, 'L');
        $this->SetFont('Arial', '', 11); // Reset font to regular
        $this->MultiCell(0, 10, $terms, 0, 'L');
    }

    function addBankDetails() {
        $this->SetY(230); // Adjust the Y position for the bank details
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(0, 7, 'Bank Details:', 0, 1, 'L');
        $this->SetFont('Arial', '', 11);
        $this->Cell(0, 7, 'Name of Bank: ABC Bank', 0, 1, 'L');
        $this->Cell(0, 7, 'Account Number: XXXXXXXX', 0, 1, 'L');
        $this->Cell(0, 7, 'Routing: XXXXXXXX', 0, 1, 'L');
    }
    

}


$pdf = new PDF();
    $pdf->generateInvoiceFromForm($_POST);
    $pdf->Output('invoice.pdf', 'D'); // 'D' parameter forces download, change to 'I' for inline display

?>
?>
<style>
    /* Style for the main form */
    .edit_invoice {
        font-family: Arial, sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
    }

    /* Style for the main form buttons */
    .edit_invoice button {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    /* Style for the email input form */
    #emailForm {
        display: none;
        background-color: #F8F8FF;
        border: 1px solid #F8F8FF;
        padding: 20px;
        margin-top: 20px;
        text-align: center;

    }

    #emailForm h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    #emailForm label {
        display: block;
        margin-bottom: 10px;
    }

    #recipientEmail {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    #emailForm button {
        background-color: #FFD700;
        color: black;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    #openEmailModal {
    display: block;
    margin: 0 auto;
    }

    form {
    padding: 20px; /* Adjust the value as needed */
    }

    #invoice-form {
    padding: 50px;
    text-align: center;
    margin-top: 15%;
}

#invoice-form .modal-title {
    text-align: center;
}

#emailForm {
    padding: 20px;
}


</style>
<body style="background: linear-gradient(to bottom, rgba(95, 158, 160, 0), rgba(95, 158, 160, 1));">
    <form class="edit_invoice" id="invoice-form" action="process_invoice.php" accept-charset="UTF-8" data-remote="true" method="post">
        <!-- Main form fields -->
        <div class="modal-header text-center justify-content-center" style="color: black;">
            <h4 class="modal-title fs-6 mx-auto" style="text-align: center;" id="signup-modal-label">
                To print, download or send your invoice, <br/>you have to add a recipient email first.
            </h4>
        </div>

        <hr>

        <!-- Add the "Add Recipient Email" button -->
        <button type="button" id="openEmailModal">Add Recipient Email</button>

        <!-- Existing main form fields and HTML content -->

        <!-- ... -->

        <!-- Email Input Form (displayed within the same page) -->
        <div id="emailForm" style="display: none;">
            <h2 style="text-align: center;">Add Recipient Email</h2>
            <form method="post">
                <input type="email" id="recipientEmail" placeholder="your@gmail.com" name="recipientEmail" style="width: 50%;" required>
                <button type="submit" name="submit" style="margin-top: 20px; width: 50%; text-align: center;">Send Invoice</button>
            </form>
        </div>
    </form>

    <script>
    document.getElementById("openEmailModal").addEventListener("click", function () {
        var emailForm = document.getElementById("emailForm");
        var openEmailButton = document.getElementById("openEmailModal");
        emailForm.style.display = "block";
        openEmailButton.style.display = "none";
    });
    </script>
</body>
