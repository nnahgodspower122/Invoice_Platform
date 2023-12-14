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
    $count_unpaid_sql = "SELECT COUNT(*) FROM invoice_data WHERE username = ? AND statuses = 'unpaid'";
    $count_unpaid_stmt = $conn->prepare($count_unpaid_sql);
    $count_unpaid_stmt->bind_param("s", $username);
    $count_unpaid_stmt->execute();
    $count_unpaid_result = $count_unpaid_stmt->get_result();
    $count_unpaid_row = $count_unpaid_result->fetch_row();
    $unpaid_count = $count_unpaid_row[0];

    // Count records where statuses is overdue
    $count_overdue_sql = "SELECT COUNT(*) FROM invoice_data WHERE username = ? AND statuses = 'overdue'";
    $count_overdue_stmt = $conn->prepare($count_overdue_sql);
    $count_overdue_stmt->bind_param("s", $username);
    $count_overdue_stmt->execute();
    $count_overdue_result = $count_overdue_stmt->get_result();
    $count_overdue_row = $count_overdue_result->fetch_row();
    $overdue_count = $count_overdue_row[0];

    // Count records where statuses is partial
    $count_partial_sql = "SELECT COUNT(*) FROM invoice_data WHERE username = ? AND statuses = 'partial'";
    $count_partial_stmt = $conn->prepare($count_partial_sql);
    $count_partial_stmt->bind_param("s", $username);
    $count_partial_stmt->execute();
    $count_partial_result = $count_partial_stmt->get_result();
    $count_partial_row = $count_partial_result->fetch_row();
    $partial_count = $count_partial_row[0];

    $counts = array(
        'paid' => $paid_count,
        'unpaid' => $unpaid_count,
        'overdue' => $overdue_count,
        'partial' => $partial_count
    );

    echo json_encode($counts);

    $count_paid_stmt->close();
    $count_unpaid_stmt->close();
    $count_overdue_stmt->close();
    $count_partial_stmt->close();
    $conn->close();
} else {
    echo "User is not logged in.";
}
?>
