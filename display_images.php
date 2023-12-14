<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username']; // Get the logged-in user's username

    // Specify the folder where images are stored
    $imageFolder = "invoice_image/";

    // Display the images directly
    $logoImageName = $imageFolder . 'logo.png';


    echo '<div><img src="' . $logoImageName . '" alt="Logo Image"></div>';


    // Add error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

} else {
    echo "User is not logged in.";
}
?>
