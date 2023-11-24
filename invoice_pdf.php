<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username']; // Get the logged-in user's username

    if (isset($_POST['submit'])) {
        // Connect to your database
        $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve and validate form data
        $from = mysqli_real_escape_string($conn, $_POST['from']);
        $bill_to = mysqli_real_escape_string($conn, $_POST['bill_to']);
        $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
        $invoice_date = mysqli_real_escape_string($conn, $_POST['invoice_date']);
        $terms = mysqli_real_escape_string($conn, $_POST['terms']);

        // Insert invoice details into the 'invoice_data' table, associating them with the logged-in user
        $sql = "INSERT INTO invoice_data (username, from_field, bill_to, invoice_number, invoice_date, terms) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssssss", $username, $from, $bill_to, $invoice_number, $invoice_date, $terms);

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

                    // Insert item details into the 'invoice_data_items' table, associating them with the invoice
                    $sql = "INSERT INTO invoice_data_items (invoice_id, description, amount, discount, tax) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);

                    if ($stmt) {
                        $stmt->bind_param("dssss", $invoice_id, $description, $amount, $discount, $tax);

                        if ($stmt->execute()) {
                            // Item data inserted successfully
                            echo "";
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
} else {
    echo "User is not logged in.";
}


require('includes/fpdf/fpdf.php');


class PDF extends FPDF {
    function Header() {
        // Add your logo (replace path/to/logo with your actual logo file)
        $this->Image('images/cooltext445748032293456.png', 140, 10, 60);
        
        // Invoice title
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(0, 10, 'Invoice', 0, 1, 'L');
        $this->Ln(5);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'B', 11);
        $this->Cell(0, 10, 'Thank you for your patronage', 0, 0, 'C');
    }

    function addFromDetails() {
        $this->SetY(25); // Adjust the Y position for the 'From Details'
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 7, 'Invoice Platform', 0, 1, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 7, 'Address', 0, 1, 'L');
        // Add more 'From Details' as needed
        $this->Ln(5);
    }

    function generateInvoiceFromForm($formData) {
        $this->AddPage();
        // Get data from the form
        $invoice_number = isset($formData['invoice_number']) ? $formData['invoice_number'] : '';
            $due_date = isset($formData['due_date']) ? $formData['due_date'] : '';
            $invoice_date = isset($formData['invoice_date']) ? $formData['invoice_date'] : '';
            $bill_to = isset($formData['bill_to']) ? $formData['bill_to'] : '';
            $ship_to = isset($formData['ship_to']) ? $formData['ship_to'] : '';
            $items = isset($formData['items']) ? $formData['items'] : [];

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
        $this->addFromDetails();
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(45, 10, 'Bill To:');
        $this->Cell(85, 10, 'Ship To:');
        $this->Cell(60, 10, 'Invoice Number: ' . $invoice_number);
        $this->Ln();

        $this->SetFont('Arial', '');
        $this->Cell(45, 10, '' . $bill_to);
        $this->Cell(85, 10, '' . $ship_to);
        $this->SetFont('Arial', 'B');
        $this->Cell(60, 10, 'Invoice Date: ' . $invoice_date);
        $this->Ln();

        $this->SetFont('Arial', 'B');
        $this->Cell(45, 10 );
        $this->Cell(85, 10 );
        $this->Cell(60, 10, 'Due Date: ' . $due_date);
        $this->Ln(15);

        // Table for Quantity, Description, Unit Price, Subtotal
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(112, 10, 'Description', 1);
        $this->Cell(26, 10, 'Amount', 1);
        $this->Cell(26, 10, 'Discount', 1);
        $this->Cell(26, 10, 'Tax', 1);
        
        
        $this->Ln();

        $this->SetFont('Arial', '');
        $subtotal = 0;
        foreach ($items as $item) {
            echo '<pre>';
            print_r($items);
            echo '</pre>';
            $description = isset($item['description']) ? $item['description'] : '';
            $amount = isset($item['amount']) ? $item['amount'] : '';
            $discount = isset($item['discount']) ? $item['discount'] : '';
            $tax = isset($item['tax']) ? $item['tax'] : '';

            $this->Cell(112, 10, $description, 1);
            $this->Cell(26, 10, $amount, 1);
            $this->Cell(26, 10, $discount, 1);
            $this->Cell(26, 10, $tax, 1);
        }

        // Display Subtotal and Total
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(164, 10, 'Subtotal:', 1, 0, 'R');
        $this->Cell(26, 10, '$' . $subtotal, 1, 1);
        
        $tax = 0.15 * $subtotal; // Example Tax Calculation (15%)
        $total = $subtotal + $tax;
        $this->Cell(164, 10, 'Tax (15%):', 1, 0, 'R');
        $this->Cell(26, 10, '$' . $tax, 1, 1);
        
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(164, 10, 'Total:', 1, 0, 'R');
        $this->Cell(26, 10, '$' . $total, 1, 1);

        // Call function to display signature
        $this->addSignature();

        // Call function to display terms and conditions
        $this->addTermsAndConditions();

        // Call function to display bank details
        $this->addBankDetails();
    }

    function addSignature() {
        $this->SetY(50); // Adjust the Y position according to your layout
        $this->Image('images/1200px-Autograph_of_Benjamin_Franklin.svg (1).png', 140, 152, 60);
    }

    function addTermsAndConditions() {
        $this->SetY(210); // Set Y position at the bottom of the page
        $this->SetFont('Arial','B', 11);
        $this->Cell(0, 10, 'Terms and Conditions:', 0, 1, 'L');
        $this->SetFont('Arial', '', 11); // Reset font to regular
        $this->MultiCell(0, 10, "Please review the terms and conditions carefully. ", 0, 'L');
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