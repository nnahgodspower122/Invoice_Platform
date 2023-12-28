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
                echo $invoice_number;
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

            // Retrieve and validate form data
            $from = mysqli_real_escape_string($conn, $_POST['from']);
            $bill_to = mysqli_real_escape_string($conn, $_POST['bill_to']);
            $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
            $invoice_date = mysqli_real_escape_string($conn, $_POST['invoice_date']);
            $terms = mysqli_real_escape_string($conn, $_POST['terms']);
            $invoice_currency_format = mysqli_real_escape_string($conn, $_POST['invoice_currency_format']);

            // Check if the invoice number already exists
            $check_sql = "SELECT * FROM invoice_data WHERE username = ? AND invoice_number = ?";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("ss", $username, $invoice_number);
            $check_stmt->execute();
            $result = $check_stmt->get_result();

            if ($result->num_rows > 0) {
                // Update existing record
                $update_sql = "UPDATE invoice_data SET from_field = ?, bill_to = ?, invoice_date = ?, terms = ?, invoice_currency_format = ? WHERE username = ? AND invoice_number = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("sssssss", $from, $bill_to, $invoice_date, $terms, $invoice_currency_format, $username, $invoice_number);

                if ($update_stmt->execute()) {
                    // Existing record updated successfully
                    $invoice_id = $result->fetch_assoc()['id'];
                    $update_stmt->close();
                    // Proceed with updating or inserting items...

                    // Accessing items
                    $items = $_POST['invoice']['items_attributes'];
                    foreach ($items as $item) {
                        $description = mysqli_real_escape_string($conn, $item['description']);
                        $amount = mysqli_real_escape_string($conn, $item['amount']);
                        $discount = mysqli_real_escape_string($conn, $item['discount']);
                        $tax = mysqli_real_escape_string($conn, $item['tax']);
                        $tax_name = mysqli_real_escape_string($conn, $item['tax_name']);
                        $total = mysqli_real_escape_string($conn, $item['total']);
                    
                        // Check if the combination of invoice_id and description already exists in invoice_data_items
                        $check_combination_sql = "SELECT id FROM invoice_data_items WHERE invoice_id = ? AND description = ?";
                        $check_combination_stmt = $conn->prepare($check_combination_sql);
                        $check_combination_stmt->bind_param("is", $invoice_id, $description);
                        $check_combination_stmt->execute();
                        $check_combination_stmt->store_result();

                        if ($check_combination_stmt->num_rows > 0) {
                            // The combination already exists, perform an UPDATE
                            $item_sql = "UPDATE invoice_data_items 
                                        SET amount = ?, discount = ?, tax = ?, tax_name = ?, total = ? 
                                        WHERE invoice_id = ? AND description = ?";
                            $item_stmt = $conn->prepare($item_sql);
                            $item_stmt->bind_param("sssssis", $amount, $discount, $tax, $tax_name, $total, $invoice_id, $description);
                        } else {
                            // The combination doesn't exist, perform an INSERT
                            $item_sql = "INSERT INTO invoice_data_items (invoice_id, description, amount, discount, tax, tax_name, total) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?)";
                            $item_stmt = $conn->prepare($item_sql);
                            $item_stmt->bind_param("issssss", $invoice_id, $description, $amount, $discount, $tax, $tax_name, $total);
                        }

                    // Execute the statement
                    $item_stmt->execute();

                    // Close the statement
                    $item_stmt->close();
            
                    }
                } else {
                    // Handle the error
                    echo "Error updating record: " . $update_stmt->error;
                }
            } else {
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

        $this->Ln(25); // Adjust the space after 'From Details' if necessary
    }
    
    

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'B', 11);
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
        // echo "Logo Image Path: $logoImagePath<br>";
        $logoImageData = file_get_contents($logoImagePath); 
        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        $fileTypeNew = pathinfo($logoImagePath, PATHINFO_EXTENSION); // Get file extension
            	// Page header
        $this->InHeader = true;
        $this->Header($logoImageData, $fileTypeNew, $formData);
        $this->InHeader = false;
        // Get data from the form
        $invoice_number = isset($formData['invoice_number']) ? $formData['invoice_number'] : '';
            $due_date = isset($formData['due_date']) ? $formData['due_date'] : '';
            $invoice_date = isset($formData['invoice_date']) ? $formData['invoice_date'] : '';
            $bill_to = isset($formData['bill_to']) ? $formData['bill_to'] : '';
            $ship_to = isset($formData['ship_to']) ? $formData['ship_to'] : '';
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

        // $this->addFromDetails();
        // // Columns for Bill To, Ship To, Invoice IDs
        
        $this->addFromDetails($formData);
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(0, 0, 128);
        $this->Cell(115, 6, 'Bill To:');
        $this->Cell(35, 6, 'Invoice Number: ');
        $this->SetTextColor(0);
        $this->Cell(40, 6, $invoice_number, 0, 0, 'R');
        $this->Ln();

        // Example data for each column
        $column1Text = $bill_to;

        $column2Text = "Invoice Date";

        $column3Text = $invoice_date;

        // Set the height for each row
        $rowHeight = 10;

        // Set the width for each column
        $columnWidth = 90;

        $column2Margin = 115; // Margin for the 2nd column
        $column3Margin = 100; // Margin for the 3rd column

        // Set the font and any other styling if needed
        $this->SetFont('Arial', '');



        // Save the current X and Y positions
        $startX = $this->GetX();
        $startY = $this->GetY();

        // Column 1
        $this->MultiCell($columnWidth, 6, $column1Text, 0, 'L');

        // Column 2 - Move to the start position for the next cell with more left margin
        $this->SetXY($startX + $column2Margin, $startY);
        $this->SetTextColor(0, 0, 128);
        $this->SetFont('Arial', 'B');
        $this->MultiCell($columnWidth, $rowHeight, $column2Text, 0, 'L');
        $this->SetTextColor(0);

        // Column 3 - Move to the start position for the next cell with less left margin
        $this->SetXY($startX + $column3Margin, $startY);
        $this->MultiCell($columnWidth, $rowHeight, $column3Text, 0, 'R');



        // Move to the next line
        $this->Ln(14);

        $this->SetFillColor(240, 240, 240);
        // Table for Quantity, Description, Unit Price, Subtotal
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(95, 10, 'Description', 1, 0, 'C', true);
        $this->Cell(29, 10, 'Tax', 1, 0, 'C', true);
        $this->Cell(29, 10, 'Discount', 1, 0, 'C', true);
        $this->Cell(37, 10, 'Amount', 1, 0, 'C', true);

        $this->Ln();

        $this->SetTextColor(0);
        $this->SetFont('Arial', '');
        $subtotal = 0;
        foreach ($items as $item) {
            // echo '<pre>';
            // print_r($items);
            // echo '</pre>';
            $description = isset($item['description']) ? $item['description'] : '';
            $amount = isset($item['amount']) ? $item['amount'] : '';
            $discount = isset($item['discount']) ? $item['discount'] : '';
            $tax = isset($item['tax']) ? $item['tax'] : '';
            $tax_name = isset($item['tax_name']) ? $item['tax_name'] : '';

            $formattedTax = $tax . '%';
            $formattedDiscount = $discount . '%';

            $discountAmount = ($amount * $discount) / 100;
            $amountAfterDiscount = $amount - $discountAmount;
            $taxAmount = ($amountAfterDiscount * $tax) / 100;

            $amountNew = $amountAfterDiscount + $taxAmount;

            $formattedNewAmount = number_format($amountNew, 2, '.', '');

            $this->Cell(95, 10, $description, 1);
            $this->Cell(29, 10, $tax_name . ' ' . $formattedTax, 1, 0, 'C');
            $this->Cell(29, 10, $formattedDiscount, 1, 0, 'C');
            $this->Cell(37, 10, $formattedNewAmount, 1, 0, 'R');
            $this->Ln();
            
            $subtotal += $amountAfterDiscount + $taxAmount;

            // Calculate subtotal for each items
            // $subtotal += $amount - $discount% + $tax%;
        }
            // echo '<pre>';
            // print_r($invoice_currency_format);
            // echo '</pre>';
        //Display Subtotal and Total
        // $this->SetFont('Arial', 'B', 10);
        // $this->Cell(153, 10, 'Subtotal:', 0, 0, 'R');
        // $this->Cell(37, 10, $invoice_currency_format . $subtotal, 1, 1, 'R');
        
        // $formattedTax = $tax . '%';
        // $this->Cell(153, 10, $tax_name . ' ' . $formattedTax, 0, 0, 'R');
        // $tax = 0.15 * $subtotal; // Example Tax Calculation (15%)
        // $total = $subtotal + $tax;
        // $this->Cell(37, 10, $invoice_currency_format . $tax, 1, 1, 'R');
        
        $total = $subtotal;
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(153, 10, 'Total:', 0, 0, 'R');
        $this->SetFillColor(240, 240, 240); // Light gray color
        $formattedTotal = number_format($total, 2, '.', '');
        $this->Cell(37, 10, $invoice_currency_format . $formattedTotal, 1, 1, 'R', true);

        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        // $fileTypeNew = pathinfo( PATHINFO_EXTENSION); // Get file extension
        $imageData = file_get_contents($imagePath); 
        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        $fileType = pathinfo($imagePath, PATHINFO_EXTENSION); // Get file extension

        // $imageData = isset($_FILES['image']['tmp_name']) ? file_get_contents($_FILES['image']['tmp_name']) : null;
        // $fileType = pathinfo( PATHINFO_EXTENSION); // Get file extension

        
        // Call addSignature and pass the $imageData variable
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
            $this->Image($img, 156, 162, 45);
    
            unlink($img); // Delete the image file after it's been used
        } else {

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
