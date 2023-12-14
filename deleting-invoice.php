<?php

include("session.php");

// Connect to your database
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the invoice_number parameter is set in the URL
if (isset($_GET['invoice_number'])) {
    // Get the invoice_number from the URL
    $invoice_number = $_GET['invoice_number'];

    // Soft delete related records in invoice_data_items
    $sql_update_items = "UPDATE invoice_data_items SET is_deleted = TRUE WHERE invoice_id IN (SELECT id FROM invoice_data WHERE invoice_number = ?)";
    $stmt_update_items = $conn->prepare($sql_update_items);

    if ($stmt_update_items) {
        $stmt_update_items->bind_param("s", $invoice_number);
        $stmt_update_items->execute();
        $stmt_update_items->close();
    } else {
        echo "Error updating related records in invoice_data_items: " . $conn->error;
    }

    // Soft delete the record in invoice_data
    $sql_update_invoice = "UPDATE invoice_data SET is_deleted = TRUE WHERE invoice_number = ?";
    $stmt_update_invoice = $conn->prepare($sql_update_invoice);

    if ($stmt_update_invoice) {
        $stmt_update_invoice->bind_param("s", $invoice_number);

        if ($stmt_update_invoice->execute()) {
            // Redirect back to the original page after successful deletion
            header("Location: header.php?delete_success=true");
            exit();
        } else {
            // Handle the error if the deletion fails
            echo "Error updating record in invoice_data: " . $stmt_update_invoice->error;
        }

        $stmt_update_invoice->close();
    } else {
        // Handle the error in preparing the statement
        echo "Error in preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case where invoice_number is not set in the URL
    echo "Invoice number not provided in the URL.";
}

?>
