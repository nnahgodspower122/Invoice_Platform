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

    // Start by deleting related records in invoice_data_items
    $sql_delete_items = "DELETE FROM invoice_data_items WHERE invoice_id IN (SELECT id FROM invoice_data WHERE invoice_number = ?)";
    $stmt_delete_items = $conn->prepare($sql_delete_items);

    if ($stmt_delete_items) {
        $stmt_delete_items->bind_param("s", $invoice_number);
        $stmt_delete_items->execute();
        $stmt_delete_items->close();
    } else {
        echo "Error deleting related records in invoice_data_items: " . $conn->error;
    }

    // Continue with deleting the record in invoice_data
    $sql_delete_invoice = "DELETE FROM invoice_data WHERE invoice_number = ?";
    $stmt_delete_invoice = $conn->prepare($sql_delete_invoice);

    if ($stmt_delete_invoice) {
        $stmt_delete_invoice->bind_param("s", $invoice_number);

        if ($stmt_delete_invoice->execute()) {
            // Redirect back to the original page after successful deletion
            header("Location: header.php?delete_success=true");
            exit();
        } else {
            // Handle the error if the deletion fails
            echo "Error deleting record in invoice_data: " . $stmt_delete_invoice->error;
        }

        $stmt_delete_invoice->close();
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
