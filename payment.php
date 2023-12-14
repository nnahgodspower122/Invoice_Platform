<?php
    // Check login
    include("session.php");

    // Check if the user is logged in
    if (isset($_SESSION['login_username'])) {
        $username = $_SESSION['login_username']; // Get the logged-in user's username

        // Connect to your database
        $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if 'invoice_number' is set in the URL
        if (isset($_GET['invoice_number'])) {
            $invoice_number = $_GET['invoice_number'];

            // Query to retrieve invoice data for the logged-in user and specific invoice number
            $sql = "SELECT i.*, ii.* FROM invoice_data i
            JOIN invoice_data_items ii ON i.id = ii.invoice_id
            WHERE i.username = ? AND i.invoice_number = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ss", $username, $invoice_number);

                if ($stmt->execute()) {
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Fetch and display the invoice data
                        $row = $result->fetch_assoc();
                        $invoice_date = $row['invoice_date'];
                        $from_field = $row['from_field'];
                        $bill_to = $row['bill_to'];
                        $ship_to = $row['ship_to'];
                        $due_date = $row['due_date'];
                        $terms = $row['terms'];
                        $amount = $row['amount'];
                        $image = $row['image'];
                        $logo_image = $row['logo_image'];
                        $description = $row['description'];
                        $discount = $row['discount'];
                        $tax = $row['tax'];
                        $tax_name = $row['tax_name'];
                        $quantity = $row['quantity'];
                        $invoice_currency_format = $row['invoice_currency_format'];

                        // Display the invoice data in your HTML
                        // Example: echo "Invoice Number: $invoice_number, Date: $invoice_date, ...";
                    } else {
                        echo "No records found for the specified invoice number.";
                    }
                } else {
                    // Handle the error
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                // Handle the error in preparing the statement
                echo "Error in preparing the statement: " . $conn->error;
            }
        } else {
            echo "Invoice number not provided in the URL.";
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "User is not logged in.";
    }
?>



<!DOCTYPE html>

<html>
<head>
  <!-- Google Tag Manager -->
        <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PBCQCNC');</script> -->
  <!-- End Google Tag Manager -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

  
  <title>Invoice Platform</title>
  <meta name="description" content="Create and download professional PDF invoices in seconds with the invoice template gallery, send invoices via email, get paid by card." />	
          
  <link rel="icon" type="image/png" href="#">

          <meta name="csrf-param" content="authenticity_token" />
  <meta name="csrf-token" content="mm0xIL6popU7_6BXFw9Rmf5kfYAorThhvXmWvbkzOd0l7lQvoqzBvT-fiiqXnYmNT7DSkhVqvSU0C0DroZcCQA" />
                        

  <link rel="stylesheet" media="all" href="https://acme.invoicehome.com/assets/application-ea466ec73148ccdd81cadc5720e6940f839132a1e9fc108b7c1ae3a8cdb4c746.css" />
  <link rel="stylesheet" media="all" href="https://acme.invoicehome.com/assets/themes/light-6957b6123a1e86f65e6bca6bc516d08361dea65ed9fe9ed320cb38c2f683f8d0.css" />
  <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcs57gkAAAAAHMrbzp6CdgZtfZizW03UnSZpxyb"></script>
		  	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>

		<!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="styles.css">
	<!-- AdminLTE App -->
	<script src="js/app.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
    /* Style for form container */

    label {
        font-family: Arial, sans-serif;
        font-size: 14px;
        margin-right: 10px;
    }

    select {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50; /* Green background color */
        color: white; /* White text color */
        padding: 10px 20px; /* Add some padding */
        font-size: 16px; /* Set the font size */
        border: none; /* Remove border */
        border-radius: 4px; /* Add border radius */
        cursor: pointer; /* Add a pointer cursor on hover */
    }

    /* Change button color on hover */
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

	</head>

  <body class="invoicehome">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBCQCNC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>

  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-xl">
      <div class="me-auto col-4 col-lg-3">
        <a class="navbar-brand" href="#">
          <a href="dashboard.php"> <img alt="Invoice Home" class="" src="images/cooltext445748032293456.png" width="185" height="35" /></a>
        </a>
      </div>
      <div class="ms-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".to-be-collapsed" aria-controls=".to-be-collapsed" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="container">
        <form class="search-form" action="" method="get" >
          <input type="text" name="q" id="q" maxlength="100" class="search-input" placeholder="Search Address, Amount, or Item" aria-label="Search by Customer, Address, or Item">
          <button type="submit" class="search-button">Search</button>
        </form>
      </div>

      <ul class="nav navbar-nav" style="margin-right: 15px;">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="images/3177440-removebg-preview.png" class="user-image" alt="User Image" style="width: 40px;">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"><?php echo $_SESSION['login_username']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- Drop-down list-->
            <li><h6 class="dropdown-header">Languages</h6></li>

              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/en">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/NG.png" width="16" height="16" />&nbsp;English
                    <span class="float-end"><i class="fas fa-check background-font-color"></i></span>
                </a>              </li>
              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/es">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/ES.png" width="16" height="16" />&nbsp;Español
                </a>              </li>
              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/fr">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/FR.png" width="16" height="16" />&nbsp;Français
                </a>              </li>
              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/de">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/DE.png" width="16" height="16" />&nbsp;Deutsch
                </a>              </li>
              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/it">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/IT.png" width="16" height="16" />&nbsp;Italiano
                </a>              </li>
              <li class="dropdown-item my-0 py-0">
                <a class="border-0 py-1 d-block text-decoration-none" href="/languages/pt">
                  <img class="align-middle me-1 icon-flag" src="https://images.invoicehome.com/flags/flags-iso/flat/32/PT.png" width="16" height="16" />&nbsp;Português
                </a>              </li>
              <hr>
              <li style="margin-top: 5px;"><a href="logout.php" class="btn btn-default btn-flat">Sign out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>


<div class="container-xl" style="margin-top: 50px;">
    <div class="row pb-4">
        <div class="col-lg-10 col-md-11 mx-auto">
            
            <div class="text-center m-4 fs-20 semibold no-underline-links link-underline-on-hover lh-lg background-font-color" style="font-size: 18px;">
                <a class="nolink text-decoration-none" href="invoice_new.php">
                    <span class="fa-stack fa-1x icon-add">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class=" me-2 semibold" style="color: green;">New:</span>
                </a>
                <span id='switch-to-invoice' class="acts-as-link text-muted">Invoice</span>
                <span class="mx-1">·</span> 
                <span id='switch-to-tax-invoice' class="acts-as-link ">Tax Invoice</span>
                <span class="mx-1">·</span>
                <span id='switch-to-proforma-invoice' class="acts-as-link ">Proforma Invoice</span>
                <span class="mx-1">·</span>
                <span id='switch-to-receipt' class="acts-as-link ">Receipt</span>
                <span class="mx-1">·</span>
                <span id='switch-to-sales-receipt' class="acts-as-link ">Sales Receipt</span>
                <span class="mx-1">·</span>
                <span id='switch-to-cash-receipt' class="acts-as-link ">Cash Receipt</span>
                <br>
                <span id='switch-to-quote' class="acts-as-link ">Quote</span>
                <span class="mx-1">·</span>
                <span id='switch-to-estimate' class="acts-as-link ">Estimate</span>
                <span class="mx-1">·</span>
                <span id='switch-to-credit-memo' class="acts-as-link ">Credit Memo</span>
                <span class="mx-1">·</span>
                <span id='switch-to-credit-note' class="acts-as-link ">Credit Note</span>
                <span class="mx-1">·</span>
                <span id='switch-to-purchase-order' class="acts-as-link ">Purchase Order</span>
                <span class="mx-1">·</span>
                <span id='switch-to-delivery-note' class="acts-as-link ">Delivery Note</span>
            </div>
        </div>
    </div>
</div>

  <div class="container-xl" style="margin-top: 50px;">
    <div class="row pb-4">
      <div class="col-lg-10 col-md-11 mx-auto">
        <div class="level-1-tabs">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="header.php">
                <i class="fa fa-fw fa-list-ul background-font-color"></i>&nbsp;My Invoices
              </a>
            </li>
          </ul>
        </div>

        <div class="level-1-page p-4">
          <div class="level-2-tabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link " href="edit_invoice.php?invoice_number=<?php echo $invoice_number; ?>">
                  <i class="fa-fw fas fa-pencil-alt icon-edit"></i>Edit <?php echo $invoice_number; ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="email-tab.php?invoice_number=<?php echo $invoice_number; ?>">
                    <i class="fa-fw far fa-envelope icon-email"></i> Email
                </a>  
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  Partially Paid&nbsp;<span class='badge rounded-pill bg-grabber'>0</span>
                </a>
              </li> -->
              <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="delete-invoice.php?invoice_number=<?php echo $invoice_number; ?>">
                    <i class="fa-fw far fa-trash-alt icon-delete"></i> Delete
                </a>  
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="payment.php?invoice_number=<?php echo $invoice_number; ?>">
                  <i class="fa fa-fw fa-circle overdue" aria-hidden="true"></i> Payments
                </a>    
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  Sent by Email&nbsp;<span class='badge rounded-pill bg-sent'>0</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Trash&nbsp;<span class='badge rounded-pill bg-secondary'>0</span>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="level-2-page p-4">
            

           


          <div class="level-2-page p-4">
            <div class="text-center fs-6 semibold py-3">
 
           


                <div class="text-center">

                    
                <div class="my-4">


                    <h1 class="fs-2 overdue my-3">
                        This invoice of <?php echo htmlspecialchars($amount); ?> was due on <?php echo htmlspecialchars($due_date); ?>
                    </h1>

                    <form action="payment_form.php" method="post">
                      
                        <label class='semibold fs-3'>Select payment status</label>
                        <div class='semibold fs-3'>
                        <input class="form-control form-control-sm" placeholder="<?php echo htmlspecialchars($invoice_number); ?>" value="<?php echo htmlspecialchars($invoice_number); ?>" tabindex="3" maxlength="100" size="100" type="text" name="invoice_number" id="invoice_number" hidden/><br>
                        
                        <select name="statuses" id="statuses">
                            <option value="paid" selected>Paid</option>
                            <option value="unpaid">Unpaid</option>
                            <option value="overdue">Overdue</option>
                            <option value="partial">Partially paid</option>
                        </select>

                        </div>
                        <br><br>

                        <!-- Submit Button -->
                        <input type="submit" value="Submit">
                    </form>

                </div>        
                    <!-- <a role="button" data-bs-toggle="collapse" href="#collapse" aria-expanded="false" aria-controls="collapse" class='semibold fs-3'>Set as Paid</a> -->
                </div>
		

          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row text-center" style="margin-top: 50px;">
    <div class="col">
          <img alt="INDIA" src="images/india.png" width="32" height="32" />&nbsp;&nbsp;INDIA&nbsp;&nbsp;·&nbsp;&nbsp;Copyright © 2023&nbsp;&nbsp;·&nbsp;&nbsp;Invoice Platform
        </div>
      </div>

        <div class="row text-center mt-2">
          <div class="col">
            EN / 
          </div>
        </div>
    </div> 
  </div> 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiG5z5F5d5Fk5fa" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q6" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/javascripts/invoices.js?213"></script>

  

  <script src="js/script8.js"></script>
  <script>
    $('.js-example-basic-single').select2();
  </script>
</body>


