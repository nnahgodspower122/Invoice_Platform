<?php
// Connect to your database
$conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have the invoice ID
$invoice_id = 24; // Replace with your actual invoice ID

$sql = "SELECT image_name, logo_image_name FROM invoice_data WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("d", $invoice_id);
    $stmt->execute();
    $stmt->bind_result($imageName, $logoImageName);

    // Specify the folder where images are stored
    $imageFolder = "invoice_image//";

    // Display the images
    echo '<img src="' . $imageFolder . $logoImageName . '" alt="Logo Image">';
    echo '<img src="' . $imageFolder . $imageName . '" alt="Invoice Image">';

    $stmt->close();
} else {
    echo "Error in preparing the statement: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
