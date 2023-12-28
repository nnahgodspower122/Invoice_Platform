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

                // Get the logo_image data and move it to the 'upload' folder
                $logoImageData = file_get_contents($_FILES['logo_image']['tmp_name']);
                $logoImagePath = "upload/" . $_FILES['logo_image']['name'];
                move_uploaded_file($_FILES['logo_image']['tmp_name'], $logoImagePath);
                // move_uploaded_file($logoImageData, $logoImagePath);

                // Get the image data and move it to the 'upload' folder
                $imageData = file_get_contents($_FILES['image']['tmp_name']);
                $imagePath = "upload/" . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
                // move_uploaded_file($imageData, $imagePath);
                
                // Get the logo_image data and escape special characters
                // $logoImageData = file_get_contents($_FILES['logo_image']['tmp_name']);
                // $escapedLogoImageData = mysqli_real_escape_string($conn, $logoImageData);

                // // // Get the image data and escape special characters
                // // $imageData = file_get_contents($_FILES['image']['tmp_name']);
                // $escapedImageData = mysqli_real_escape_string($conn, $imageData);


                // Retrieve and validate form data
                $from = mysqli_real_escape_string($conn, $_POST['from']);
                $bill_to = mysqli_real_escape_string($conn, $_POST['bill_to']);
                $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
                $invoice_date = mysqli_real_escape_string($conn, $_POST['invoice_date']);
                $terms = mysqli_real_escape_string($conn, $_POST['terms']);
                $invoice_currency_format = mysqli_real_escape_string($conn, $_POST['invoice_currency_format']);

                // Insert invoice details into the 'invoice_data' table, associating them with the logged-in user
                $sql = "INSERT INTO invoice_data (username, from_field, bill_to, invoice_number, invoice_date, terms, invoice_currency_format, image_path, logo_image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("sssssssss", $username, $from, $bill_to, $invoice_number, $invoice_date, $terms, $invoice_currency_format, $imagePath, $logoImagePath);

                    if ($stmt->execute()) {
                        // Invoice data inserted successfully
                        $invoice_id = $stmt->insert_id; // Get the ID of the inserted invoice
                        $stmt->close();

                        // Accessing items
                        $items = $_POST['invoice']['items_attributes'];
                        foreach ($items as $item) {
                            $description = mysqli_real_escape_string($conn, $item['description']);
                            $amount = mysqli_real_escape_string($conn, $item['amount']);
                            $discount = mysqli_real_escape_string($conn, $item['discount']);
                            $tax = mysqli_real_escape_string($conn, $item['tax']);
                            $tax_name = mysqli_real_escape_string($conn, $item['tax_name']);
                            $form = mysqli_real_escape_string($conn, $item['form']);
                            $total = mysqli_real_escape_string($conn, $item['total']);
                            // Insert item details into the 'invoice_data_items' table, associating them with the invoice
                            $sql = "INSERT INTO invoice_data_items (invoice_id, description, amount, discount, tax, tax_name, form, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = $conn->prepare($sql);

                            if ($stmt) {
                                $stmt->bind_param("dsssssss", $invoice_id, $description, $amount, $discount, $tax, $tax_name, $form, $total);

                                if ($stmt->execute()) {
                                    // Item data inserted successfully
                                    // echo "<img src='$logoImagePath' alt='Logo'>";
                                    // echo "<img src='$imagePath' alt='Logo'>";
                                    // echo $logoImagePath;

                                   
                                } else {
                                    // Handle the error
                                    echo "Error: " . $stmt->error;
                                }

                                $stmt->close();
                            } else {
                                // Handle the error in preparing the statement
                                echo "Error in preparing the statement: " . $conn->error;
                            }
                        }
                    } else {
                        // Handle the error
                        echo "Error: " . $stmt->error;
                    }
                } else {
                    // Handle the error in preparing the statement
                    echo "Error in preparing the statement: " . $conn->error;
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
        $logoImagePath = "upload/" . $_FILES['logo_image']['name'];
        move_uploaded_file($_FILES['logo_image']['tmp_name'], $logoImagePath);
        
        $logoImageData = file_get_contents($logoImagePath);       
        $fileTypeNew = pathinfo($_FILES['logo_image']['name'], PATHINFO_EXTENSION); // Get file extension
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

        $total = $subtotal;
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(153, 10, 'Total:', 0, 0, 'R');
        $this->SetFillColor(240, 240, 240); // Light gray color
        $formattedTotal = number_format($total, 2, '.', '');
        $this->Cell(37, 10, $invoice_currency_format . $formattedTotal, 1, 1, 'R', true);

        // $logoImageData = isset($_FILES['logo_image']['tmp_name']) ? file_get_contents($_FILES['logo_image']['tmp_name']) : null;
        $fileTypeNew = pathinfo($_FILES['logo_image']['name'], PATHINFO_EXTENSION); // Get file extension

        // $imageData = null;

        $imagePath = "upload/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        
        $imageData = file_get_contents($imagePath);  

        // $imageData = isset($_FILES['image']['tmp_name']) ? file_get_contents($_FILES['image']['tmp_name']) : null;
        $fileType = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION); // Get file extension

        
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
