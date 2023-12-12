<?php
session_start();

if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Count total amount where statuses is paid
    $total_amount_paid_sql = "SELECT SUM(i.amount) AS total_amount_paid 
                             FROM invoice_data d
                             JOIN invoice_data_items i ON d.id = i.invoice_id
                             WHERE d.username = ? AND d.statuses = 'paid'";
    
    $total_amount_paid_stmt = $conn->prepare($total_amount_paid_sql);
    $total_amount_paid_stmt->bind_param("s", $username);
    $total_amount_paid_stmt->execute();
    $total_amount_paid_result = $total_amount_paid_stmt->get_result();
    $total_amount_paid_row = $total_amount_paid_result->fetch_assoc();
    $total_amount_paid = $total_amount_paid_row['total_amount_paid'];

    $totalAmountPaid = array(
        'total_amount_paid' => $total_amount_paid
    );

    echo json_encode($totalAmountPaid);

    $total_amount_paid_stmt->close();
    $conn->close();
} else {
    echo "User is not logged in.";
}
?>
