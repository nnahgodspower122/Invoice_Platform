<?php
	//check login
	include("session.php");

// Check if the user is logged in
if (isset($_SESSION['login_username'])) {
    $username = $_SESSION['login_username']; // Get the logged-in user's username

    // Connect to your database
    $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to count the number of invoice data records for the logged-in user
    $sql = "SELECT COUNT(*) AS invoice_count FROM invoice_data WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $invoice_count = $row['invoice_count'];

            // Display the invoice count in your HTML
            echo "";
        } else {
            // Handle the error
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Handle the error in preparing the statement
        echo "Error in preparing the statement: " . $conn->error;
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
	<!-- AdminLTE App -->
	<script src="js/app.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
/* Styles for the overlay background */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Styles for the popup form */
.popup-form {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    max-width: 300px;
    width: 90%;
    border-radius: 8px;
    position: relative;
}

/* Close button styles */
.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
    color: #888;
}

/* Input field styles */
.popup-form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Button styles */
.popup-form button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.popup-form button:hover {
    background-color: #0056b3;
}

/* Style the form container */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: -80px;
  height: 10px;
  
}

/* Style the search form */
.search-form {
  display: flex;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0px 0px 5px 0px #ccc;
}

/* Style the search input */
.search-input {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 5px 0 0 5px;
  outline: none;
  width: 300px;
}

/* Style the search button */
.search-button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 0 5px 5px 0;
  padding: 10px 20px;
  cursor: pointer;
}

/* Hover effect for the search button */
.search-button:hover {
  background-color: #0056b3;
}


/* Style the dropdown menu */
.dropdown-menu {
  border: 1px solid #ccc;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-color: #fff;
}

/* Style the user image */
.user-image {
  border-radius: 50%;
}

/* Style the username */
.dropdown-menu .user-menu a {
  color: #333; /* Text color */
  font-weight: bold;
  text-transform: uppercase;
}

/* Style the "Log out" button */
.dropdown-menu .user-menu a.btn {
  color: #fff; /* Text color */
  background-color: #f00; /* Background color */
  border-color: #f00; /* Border color */
  text-transform: uppercase;
}

/* Hover effect on "Log out" button */
.dropdown-menu .user-menu a.btn:hover {
  background-color: #ff0000; /* Hover background color */
  border-color: #ff0000; /* Hover border color */
}


    .table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 15px; /* Increase the padding for more height */
        margin-left: 20px;
        text-align: center;
        height: 50px; /* Increase the height for more space */
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table td {
      margin-left: 10px;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table tr:hover {
        background-color: #ddd;
    }

    /* CSS styling for search results */
.search-results {
    margin-top: 20px;
    
    float: center;
    justify-content: center; /* Horizontal centering */
    align-items: center; /* Vertical centering */
    position: relative;
    text-align: center;
    

}

.result-item {
    border: 1px solid #ccc;
    border-radius: 5px;
    float: center;
    justify-content: center;
    margin-left: 37%;
    width: 30%;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
}

.result-item p {
    margin: 5px 0;
}

/* Style for 'No results found' message */
.no-results {
    color: #f00; /* Red color for alert message */
    font-weight: bold;
    margin-top: 20px;
}


/* Style the cancel button */
.cancel-button {
    background-color: #87CEEB; /* Sky blue color */
    color: #fff; /* Text color */
    padding: 8px 16px; /* Adjust padding as needed */
    border: none;
    cursor: pointer;
    margin-top: 10px; /* Adjust margin from search results */
    border-radius: 5px; /* Rounded corners */
    display: inline-block;
}

.cancel-button:hover {
    background-color: #5F9EA0; /* Change background color on hover */
}


</style>



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
          <img alt="Invoice Home" class="" src="images/cooltext445748032293456.png" width="185" height="35" />
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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['q']) && isset($_SESSION['login_username'])) {
  // Capture the search query from the form and the logged-in user
  $searchTerm = $_GET['q'];
  $loggedInUser = $_SESSION['login_username'];

  // Connect to your database
  $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Sanitize the search term to prevent SQL injection
  $searchTerm = mysqli_real_escape_string($conn, $searchTerm);

  // Search the 'bill_to' and 'due_date' columns in the 'invoice_data' table for the logged-in user
  $sql = "SELECT * FROM invoice_data 
          WHERE (bill_to LIKE ? OR due_date LIKE ?) 
          AND username = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt) {
      $searchParam = "%$searchTerm%";
      $stmt->bind_param("sss", $searchParam, $searchParam, $loggedInUser);
      $stmt->execute();

      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
        echo "<div class='search-results'>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<div class='result-item'>";
            echo "<p>Bill To: " . $row['bill_to'] . "</p>";
            echo "<p>Due Date: " . $row['due_date'] . "</p>";
            echo "</div>";
        }

        echo "</div>";
    } else {
        echo "<p class='no-results'>No results found.</p>";
    }

      $stmt->close();
  } else {
      echo "Error in the prepared statement: " . $conn->error;
  }

  mysqli_close($conn);
}



?>



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
              <a class="nav-link active" aria-current="page" href="#">
                <i class="fa fa-fw fa-list-ul background-font-color"></i>&nbsp;My Invoices
              </a>
            </li>
          </ul>
        </div>

        <div class="level-1-page p-4">
          <div class="level-2-tabs">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  All Invoices&nbsp;<span class='badge rounded-pill bg-primary'><?php echo $invoice_count; ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Overdue&nbsp;<span class='badge rounded-pill bg-danger'>0</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  Partially Paid&nbsp;<span class='badge rounded-pill bg-grabber'>0</span>
                </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Unpaid&nbsp;<span class='badge rounded-pill bg-warning'>0</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Paid&nbsp;<span class='badge rounded-pill bg-success'>0</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Sent by Email&nbsp;<span class='badge rounded-pill bg-sent'>0</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Trash&nbsp;<span class='badge rounded-pill bg-secondary'>0</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="level-2-page p-4">
            <div class="text-center fs-6 semibold py-3">
                <h2 style="font-size: 20px;"><b><?php echo "Number of invoices for $username: $invoice_count"; ?></b></h2>
            </div>

            <?php
            if ($invoice_count > 1) {
              // Check if the user is logged in
              if (isset($_SESSION['login_username'])) {
                  $username = $_SESSION['login_username']; // Get the logged-in user's username

                  // Connect to your database
                  $conn = mysqli_connect("localhost", "root", "", "invoicemgsys");

                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }

                  // Query to fetch invoice data associated with the logged-in user
                  $sql = "SELECT i.invoice_number, i.invoice_date, i.from_field, i.bill_to, i.terms, it.amount, COUNT(*) as invoice_count
                  FROM invoice_data i
                  INNER JOIN invoice_data_items it ON i.id = it.invoice_id
                  WHERE i.username = ?
                  GROUP BY i.invoice_number, i.invoice_date, i.from_field, i.bill_to, i.terms, it.amount";  

                  $stmt = $conn->prepare($sql);

                    if ($stmt) {
                        $stmt->bind_param("s", $username);

                        if ($stmt->execute()) {
                            $result = $stmt->get_result();

                            // ... (previous code)

                            if ($result->num_rows > 0) {
                              echo '<table class="table text-uppercase semibold">';
                              echo '<thead>';
                              echo '<tr>';
                              echo '<th>Invoice Number</th>';
                              echo '<th>Invoice Date</th>';
                              echo '<th>From</th>';
                              echo '<th>Bill To</th>';
                              echo '<th>Amount</th>';
                              echo '</tr>';
                              echo '</thead>';
                              echo '<tbody>';
                          
                              $totalAmount = 0; // Initialize total amount
                          
                              while ($invoice_row = $result->fetch_assoc()) {
                                  echo '<tr>';
                                  echo '<td><a href="edit_invoice.php?invoice_number=' . $invoice_row['invoice_number'] . '">' . $invoice_row['invoice_number'] . '</a></td>';
                                  echo '<td><a href="edit_invoice.php?invoice_date=' . $invoice_row['invoice_date'] . '">' . $invoice_row['invoice_date'] . '</a></td>';
                                  echo '<td><a href="edit_invoice.php?from_field=' . $invoice_row['from_field'] . '">' . $invoice_row['from_field'] . '</a></td>';
                                  echo '<td><a href="edit_invoice.php?bill_to=' . $invoice_row['bill_to'] . '">' . $invoice_row['bill_to'] . '</a></td>';
                                  echo '<td><a href="edit_invoice.php?amount=' . $invoice_row['amount'] . '">' . $invoice_row['amount'] . '</a></td>';
                                  echo '</tr>';
                          
                                  // Accumulate the amount to calculate the total
                                  $totalAmount += $invoice_row['amount'];
                              }
                          
                              echo '<br><br>';
                              echo '</tbody>';
                              echo '<tfoot>';
                              echo '<tr>';
                              echo '<td colspan="4"><a class="" href="#">Total</a></td>';
                              echo '<td class="text-end"><a class="nolink" href="#">' . number_format($totalAmount, 2) . ' NGN<br/></a></td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td colspan="4"><a class="" href="#">Paid Amount</a></td>';
                              echo '<td class="text-end"><a class="nolink" href="#">0.00 NGN<br/></a></td>';
                              echo '</tr>';
                              echo '<tr>';
                              echo '<td colspan="4"><a class="" href="#">Balance Due</a></td>';
                              echo '<td class="text-end"><a class="nolink" href="#">' . number_format($totalAmount, 2) . ' NGN<br/></a></td>';
                              echo '</tr>';
                              echo '</tfoot>';
                              echo '</table>';
                          } else {
                              echo "No invoice data available for $username.";
                          }
                          

                        // ... (remaining code)

                        } else {
                            // Handle the error
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                    } else {
                        // Handle the error in preparing the statement
                        echo "Error in preparing the statement: " . $conn->error;
                    }

                    // Close the database connection
                    $conn->close();
                } else {
                    echo "User is not logged in.";
                }
              }
              ?>



        </div>

        </div>
      </div>
    </div>
  </div>



  <div class="row text-center" style="margin-top: 50px;">
    <div class="col">
      

          <img alt="NIGERIA" src="images/nig.jpg" width="32" height="32" />&nbsp;&nbsp;Nigeria&nbsp;&nbsp;·&nbsp;&nbsp;Copyright © 2023&nbsp;&nbsp;·&nbsp;&nbsp;Invoice Platform

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


