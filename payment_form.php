<?php
session_start();

if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username'];

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['statuses'])) {
        $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $invoice_number = mysqli_real_escape_string($conn, $_POST['invoice_number']);
        $statuses = mysqli_real_escape_string($conn, $_POST['statuses']);

        $check_sql = "SELECT * FROM invoice_data WHERE username = ? AND invoice_number = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("ss", $username, $invoice_number);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            // Update existing record
            $update_sql = "UPDATE invoice_data SET statuses = ? WHERE username = ? AND invoice_number = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("sss", $statuses, $username, $invoice_number);

            if ($update_stmt->execute()) {
                header("Location: header.php?update_success=true");
                exit();
            } else {
                echo "Error updating record: " . $update_stmt->error;
            }
        } else {
            // Insert new record
            $insert_sql = "INSERT INTO invoice_data (username, invoice_number, statuses) VALUES (?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("sss", $username, $invoice_number, $statuses);

            if ($insert_stmt->execute()) {
                echo "New record inserted successfully";
            } else {
                echo "Error inserting new record: " . $insert_stmt->error;
            }
        }

        $check_stmt->close();
        $conn->close();
    } elseif (isset($_POST['email_button'])) {
        echo "<script>window.location.href = 'mailer.php';</script>";
    } else {
        echo "User is not logged in.";
    }
}
?>

