<?php
if (isset($_POST['change_status_button'])) {
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the invoice_number from the form submission
    $invoice_number = $_POST['invoice_number'];

    // Update the is_deleted status for the specified record to 0
    $update_sql = "UPDATE invoice_data SET is_deleted = 0 WHERE invoice_number = ?";
    $update_stmt = $conn->prepare($update_sql);

    if ($update_stmt) {
        $update_stmt->bind_param("s", $invoice_number);

        if ($update_stmt->execute()) {
            // Redirect back to the original page after successful update
            header("Location: header.php?status_change_success=true");
            exit();
        } else {
            // Handle the error if the update fails
            echo "Error updating record: " . $update_stmt->error;
        }

        $update_stmt->close();
    } else {
        // Handle the error in preparing the statement
        echo "Error in preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle the case where the form was not submitted properly
    echo "Invalid form submission.";
}
?>
