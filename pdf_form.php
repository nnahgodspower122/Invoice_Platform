<?php
function generateInvoice($data) {

        $this->addFromDetails();
        // Columns for Bill To, Ship To, Invoice IDs
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(45, 10, 'Bill To:');
        $this->Cell(85, 10, 'Ship To:');
        $this->Cell(60, 10, 'Invoice Number: ' . $data['invoice_number']);
        $this->Ln();

        $this->SetFont('Arial', '');
        $this->Cell(45, 10, $data['bill_to']);
        $this->Cell(85, 10, $data['ship_to']);
        $this->SetFont('Arial', 'B');
        $this->Cell(60, 10, 'Invoice Date: ' . $data['invoice_date']);
        $this->Ln();

        $this->SetFont('Arial', 'B');
        $this->Cell(45, 10 );
        $this->Cell(85, 10 );
        $this->Cell(60, 10, 'P.O#: ' . $data['po_number']);
        $this->Ln();

        $this->SetFont('Arial', 'B');
        $this->Cell(45, 10 );
        $this->Cell(85, 10 );
        $this->Cell(60, 10, 'Due Date: ' . $data['due_date']);
        $this->Ln(15);

        // Table for Quantity, Description, Unit Price, Subtotal
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(25, 10, 'Quantity', 1);
        $this->Cell(87, 10, 'Description', 1);
        $this->Cell(26, 10, 'Unit Price', 1);
        $this->Cell(26, 10, 'Discount', 1);
        $this->Cell(26, 10, 'Amount', 1);
        $this->Ln();

        $this->SetFont('Arial', '');
        $subtotal = 0;
        foreach ($data['items'] as $item) {
            $this->Cell(25, 10, $item['qty'], 1);
            $this->Cell(87, 10, $item['description'], 1);
            $this->Cell(26, 10, $item['price'], 1);
            $this->Cell(26, 10, $item['discount'], 1);
            $this->Cell(26, 10, $item['amount'], 1);
            $this->Ln();
            $subtotal += $item['amount'];
        }

        ?>


// $this->SetFont('Arial', '');
        // $subtotal = 0;

        // Loop through the items array
        // foreach ($items as $item) {
        //     // Check and display the quantity
        //     $quantity = isset($item['qty']) ? $item['qty'] : '';
        //     $description = isset($item['description']) ? $item['description'] : '';
        //     $price = isset($item['price']) ? $item['price'] : '';
        //     $discount = isset($item['discount']) ? $item['discount'] : '';
        //     $amount = isset($item['amount']) ? $item['amount'] : '';

        //     // Output the item details to the table
        //     $this->Cell(25, 10, $quantity, 1);
        //     $this->Cell(87, 10, $description, 1);
        //     $this->Cell(26, 10, $price, 1);
        //     $this->Cell(26, 10, $discount, 1);
        //     $this->Cell(26, 10, $amount, 1);
        //     $this->Ln();

        //     // Increment subtotal
        //     $subtotal += $amount;
        // }