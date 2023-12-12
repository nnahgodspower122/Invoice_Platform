<?php
session_start();

if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username'];

    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Count records where statuses is paid
    $count_paid_sql = "SELECT COUNT(*) FROM invoice_data WHERE username = ? AND statuses = 'paid'";
    $count_paid_stmt = $conn->prepare($count_paid_sql);
    $count_paid_stmt->bind_param("s", $username);
    $count_paid_stmt->execute();
    $count_paid_result = $count_paid_stmt->get_result();
    $count_paid_row = $count_paid_result->fetch_row();
    $paid_count = $count_paid_row[0];

    // Count records where statuses is unpaid
    $count_unpaid_sql = "SELECT COUNT(*) FROM invoice_data WHERE username = ? AND statuses = 'pending'";
    $count_unpaid_stmt = $conn->prepare($count_unpaid_sql);
    $count_unpaid_stmt->bind_param("s", $username);
    $count_unpaid_stmt->execute();
    $count_unpaid_result = $count_unpaid_stmt->get_result();
    $count_unpaid_row = $count_unpaid_result->fetch_row();
    $unpaid_count = $count_unpaid_row[0];

    $counts = array(
        'paid' => $paid_count,
        'unpaid' => $unpaid_count
    );

    echo json_encode($counts);

    $count_paid_stmt->close();
    $count_unpaid_stmt->close();
    $conn->close();
} else {
    echo "User is not logged in.";
}
?>
