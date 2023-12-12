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
                        $terms = $row['terms'];
                        $po_number = $row['po_number'];
                        $amount = $row['amount'];
                        $price = $row['price'];
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
                <a class="nav-link active" href="edit_invoice.php?invoice_number=<?php echo $invoice_number; ?>">
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
                    <a class="nav-link" aria-current="page" href="/invoices/115964115/download.pdf">
                    <i class="fa fa-arrow-down icon-download"></i> Download
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
            

            <div class="level-3-tabs">
                <ul class="nav nav-tabs">      
                  <li class="nav-item"><a href="edit_invoice.php?invoice_number=<?php echo $invoice_number; ?>" aria-current="page" class="nav-link ">Basic Form</a></li>
                  <li class="nav-item" style="white-space: nowrap;"><a href="edit_advance_invoice.php?invoice_number=<?php echo $invoice_number; ?>" aria-current="page" class="nav-link active">Advanced Form - <span class='fw-bold'>Due Date, Ship To, Qty</span></a></li>	      
                  <li class="nav-item">
                  </li>
                </ul>
            </div>


          <div class="level-2-page p-4">
            <div class="text-center fs-6 semibold py-3">
            </div>

            <div class="p-4 guest-page">
            <form class="edit_invoice" id="invoice-form" action="process_invoice2.php" accept-charset="UTF-8" data-remote="true" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-8">
                    <label for="invoice_from" class="form-label"><i class="fa fa-user icon"></i>&nbsp;&nbsp;From</label>
                    <textarea class="form-control form-control-sm" placeholder="Your Company or Name Address" rows="5" style="height: 8em;" tabindex="1" maxlength="5000" name="from" id="invoice_from" required><?php echo htmlspecialchars($from_field); ?></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                    <div id="logo" class="mt-2 position-relative">
                      <br>
                          <button type="button" class="show-modal-logo btn btn-info p-4 btn-sm w-100">
                              <label for="signatureLogoInput1" id="uploadLabel1" style="display: block; padding: 10px 20px; color: #fff; cursor: pointer; border-radius: 5px;">
                                  Select Logo
                                  <br>
                                  <img src="https://images.invoicehome.com/all-logos.png" width="16" height="16" />
                                  <br>
                                  Logo Gallery
                              </label>
                              <input type="file" name="logo_image" id="signatureLogoInput1" style="display: none;" accept="image/*" required>
                              <img id="uploadedImage1" style="display: none;" width="100" height="100" style="display: none; margin-left: 30px;; text-align: center;">

                          </button>
                      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                      <script>
                      $(document).ready(function() {
                          $('input[type="file"]').on('change', function() {
                              var inputId = $(this).attr('id');
                              var imgId = 'uploadedImage' + inputId.replace('signatureLogoInput', '');
                              var imgElement = $('#' + imgId);
                              var labelId = 'uploadLabel' + inputId.replace('signatureLogoInput', '');
                              var labelElement = $('#' + labelId);

                              if (this.files && this.files[0]) {
                                  var reader = new FileReader();

                                  reader.onload = function(e) {
                                      imgElement.attr('src', e.target.result);
                                      imgElement.css('display', 'block');
                                      labelElement.css('display', 'none'); // Hide label text
                                  };

                                  reader.readAsDataURL(this.files[0]);
                              }
                          });
                      });
                      </script>
                    </div>
                  </div>
                </div>

                <div class="row my-3">
                  <div class="col-8">
                    <label for="invoice_billing" class="form-label"><i class="fa fa-female icon"></i><i class="fa fa-male icon"></i>&nbsp;&nbsp;Bill To</label>
                    <textarea class="form-control form-control-sm" placeholder="Your customer's billing address" rows="5" style="height: 8em;" tabindex="2" maxlength="5000" name="bill_to" id="invoice_billing" required><?php echo htmlspecialchars($bill_to); ?></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                  <label for="invoice_number" class="form-label"><i class="fa fa-search icon"></i>&nbsp;Invoice #</label>
                    <input class="form-control form-control-sm" placeholder="Invoice Number" tabindex="3" maxlength="100" size="100" type="text" value="<?php echo htmlspecialchars($invoice_number); ?>" name="invoice_number" id="invoice_number" required/><br>

                    <!-- <script>
                    // Function to generate a unique invoice number
                    function generateInvoiceNumber() {
                      // Check if the invoice number is stored in local storage
                      let lastInvoiceNumber = localStorage.getItem('lastInvoiceNumber');
                      
                      if (lastInvoiceNumber === null) {
                        // If it's the first time, start with 1
                        lastInvoiceNumber = 1;
                      } else {
                        // Increment the last invoice number
                        lastInvoiceNumber = parseInt(lastInvoiceNumber) + 1;
                      }
                      
                      // Store the new invoice number in local storage
                      localStorage.setItem('lastInvoiceNumber', lastInvoiceNumber);
                      
                      // Update the input field with the new invoice number
                      document.getElementById('invoice_number').value = lastInvoiceNumber.toString().padStart(3, '0');
                    }

                    // Call the function to generate the invoice number when the page loads
                    generateInvoiceNumber();
                    </script> -->

                    <label for="invoice_date_issued" class="form-label">Invoice Date</label>
                    <input class="form-control datepicker form-control-sm" placeholder="yyyy-mm-dd" tabindex="4" value="<?php echo htmlspecialchars($invoice_date); ?>" maxlength="100" autocomplete="off" size="100" type="text" name="invoice_date" id="invoice_date_issued_string" required/>
                  </div>
                </div>
                <!-- <script>
                // Get the current date in the format yyyy-mm-dd
                function getCurrentDate() {
                    const today = new Date();
                    const month = String(today.getMonth() + 1).padStart(2, '0');
                    const day = String(today.getDate()).padStart(2, '0');
                    const year = today.getFullYear();
                    return `${year}-${month}-${day}`;
                }

                // Set the current date in the invoice date input field
                document.addEventListener('DOMContentLoaded', function() {
                    const currentDate = getCurrentDate();
                    document.getElementById('invoice_date_issued_string').value = currentDate;
                });
                </script> -->
                
                <div class="row">
                    <div class="col-8">
                        <label for="invoice_shipping" class="form-label"><i class="fa fa-plane icon"></i>&nbsp;&nbsp;Ship To</label>
                        <textarea class="form-control form-control-sm" placeholder="Your customers shipping address (optional)" rows="5" style="height: 8em;" tabindex="3" maxlength="5000" name="ship_to" id="invoice_shipping"><?php echo htmlspecialchars($ship_to); ?>
                        </textarea>
                    </div>
                    <div class="col-4 col-md-3 offset-md-1">
                        <label for="invoice_po_number" class="form-label">P.O.#</label>
                        <input class="form-control form-control-sm" placeholder="Purchase Order (optional)" value="<?php echo htmlspecialchars($po_number); ?>" tabindex="6" maxlength="100" size="100" type="text" name="po_number" id="invoice_po_number" /><br/>
                        
                        

                        <label for="invoice_due_date" class="form-label">Due Date</label>
                        <input class="form-control form-control-sm datepicker" placeholder="yyyy-mm-dd (optional)" tabindex="7" value="<?php echo htmlspecialchars($due_date); ?>" maxlength="100" autocomplete="off" size="100" type="date" name="due_date" id="invoice_due_date_string" />

                        <script>
                        var $j = jQuery.noConflict();

                        $j(document).ready(function() {

                            // Initialize the datepicker for the input field with the ID 'invoice_due_date_string'
                            $j("#invoice_due_date_string").datepicker({
                                dateFormat: 'yy-mm-dd', // Date format
                                changeMonth: true, // Allow changing the month
                                changeYear: true // Allow changing the year
                                // You can add more options as needed
                            });
                        });
                        </script>

                  
                    </div>
                </div>

                <hr>

            
                <div class="row">
                    <div class="col-1 form-label">
                        Qty
                    </div>

                    <div class="col-3 form-label">
                        Description
                    </div>

                    <div class="col-2 form-label">
                        Unit Price
                    </div>

                    <div class="col-2 form-label">
                        Amount
                    </div>

                    <div class="col-1 form-label">
                        Discount
                    </div>

                    <div class="col-2 form-label">
                        Tax
                    </div>

			        <div class="col-1"></div>
                    
                </div>

                <div id="items">
                  <input type="hidden" name="invoice[items_attributes][0][id]" id="invoice_items_attributes_0_id" value="212952714" autocomplete="off" />

                  <div class="row mb-3" id='row_item_212952716'>
                        <div class="col-1 form-group">
                            <input type="text" name="invoice[items_attributes][0][quantity]" value="<?php echo htmlspecialchars($quantity); ?>" id="invoice_items_attributes_0_quantity" placeholder="Qty" class="form-control form-control-sm quantity" tabindex="214495989" maxlength="100" />
                        </div>    
                        <div class="col-3">
                            <textarea name="invoice[items_attributes][0][description]" id="invoice_items_attributes_0_description" value="<?php echo htmlspecialchars($description); ?>" placeholder="Description" class="form-control description form-control-sm" rows="2" tabindex="212952714" maxlength="5000"></textarea>
                        </div>
                        
                        <div class="col-2 form-group">
                                <input type="text" name="invoice[items_attributes][0][price]" id="invoice_items_attributes_0_price" value="<?php echo htmlspecialchars($price); ?>" placeholder="Unit Price" class="form-control form-control-sm price" tabindex="214495989" maxlength="100" />
                        </div>

                        <div class="col-2">
                            <input class="form-control amount description form-control-sm" placeholder="Amount" tabindex="212952714" maxlength="100" size="100" type="text" value="<?php echo htmlspecialchars($amount); ?>" name="invoice[items_attributes][0][amount]" id="invoice_items_attributes_0_amount" />
                        </div>

                        <div class="col-1">
                            <input class="form-control discount description form-control-sm" placeholder="Discount" tabindex="212952714" maxlength="100" size="100" type="text" value="<?php echo htmlspecialchars($discount); ?>" name="invoice[items_attributes][0][discount]" id="invoice_items_attributes_0_discount" />
                        </div>

                        <div class="col-2">
                            <button type="button" onclick="openPopup(event)" class="add_tax btn btn-success form-control description form-control-sm" tabindex="212952714">Add Tax</button>
                        </div>

                        <div class="popup-overlay" id="popupOverlay" style="opacity: 0; visibility: hidden; pointer-events: none;">
                            <div class="popup-form" > <!-- Initially hidden -->
                              <span class="close-button" onclick="closePopup(event)">&times;</span>
                              <h2>Add A Tax</h2>
                              <input type="text" name="invoice[items_attributes][0][tax_name]]" value="<?php echo htmlspecialchars($tax_name); ?>" placeholder="Tax Name" id="taxName">
                              <input type="text" class="tax" placeholder="Tax Rate %" value="<?php echo htmlspecialchars($tax); ?>" tabindex="212952714" name="invoice[items_attributes][0][tax]" id="invoice_items_attributes_0_tax">
                              <button onclick="addTax(event)">Add Tax</button>
                            </div>
                        </div>
                        <script>
                          function openPopup(event) {
                            var popupOverlay = event.target.parentNode.parentNode.querySelector("#popupOverlay");
                            popupOverlay.style.opacity = "100%";
                            popupOverlay.style.visibility = "visible";
                            popupOverlay.style['pointer-events'] = "all";
                          }

                          function closePopup(event) {
                            var popupOverlay = event.target.parentNode.parentNode;
                            popupOverlay.style.opacity = "0";
                            popupOverlay.style.visibility = "hidden";
                            popupOverlay.style['pointer-events'] = "none";
                          }

                          function addTax(event) {
                            var taxName = event.target.parentNode.querySelector("#taxName").value;
                            var taxRate = event.target.parentNode.querySelector("#invoice_items_attributes_0_tax").value;

                            if (taxName && taxRate) {
                              // Remove any non-numeric characters from the entered tax rate
                              taxRate = taxRate.replace(/[^0-9.]/g, '');

                              // Append the percentage sign to the tax rate
                              var taxRateWithPercentage = taxRate + "%";

                              // Replace the "Add Tax" button with the entered tax rate value
                              var addButton = event.target.parentNode.parentNode.parentNode.querySelector(".add_tax");
                              addButton.textContent = taxRateWithPercentage;

                              // Close the popup
                              closePopup(event);
                            }
                          }

                          // // Wait for the DOM to be fully loaded before binding the event
                          // document.addEventListener("DOMContentLoaded", function () {
                          //   // Bind the click event to the "Add Tax" button
                          //   var addButton = document.querySelector(".add_tax");
                          //   addButton.addEventListener("click", openPopup);
                          // });
                        </script>

                      <div class="col-1">
                          <input type="hidden" name="invoice[items_attributes][0][_destroy]" id="invoice_items_attributes_0__destroy" value="false" autocomplete="off" />
                          <button type="button" class="remove_fields btn btn-danger form-control description form-control-sm" tabindex="212952714">x</button>
                      </div>
                  </div>
                </div>


                <div class="actions">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <a id="add_item" class="btn btn-info btn-sm w-100">
                                Add New Item
                            </a>
                        </div>
                    </div>
                </div>

                <script src="js/script7.js"></script>

                <div id="total">
                  <div class="row mt-4">
                    <div class="col-6 col-md-3 offset-md-6" style="font-size: 13px;">Subtotal</div>
                    <div id="subtotal" class="col-6 col-md-3 text-end" style="font-size: 13px;">0.00</div>

                  </div>
                    <div class="row my-4">
                      <div class="col-6 col-md-3 offset-md-6 fs-5 fw-bold" style="font-size: 5px; display: flex; justify-content: space-between; align-items: center;">
                        <span>TOTAL</span>
                            <?php
                              //check login
                              include("select.html");
                            ?>
                      </div>
                      <input type="hidden" name="invoice_currency_format" id="invoice_currency" value="INR" autocomplete="off" />
                      <input type="hidden" name="invoice[currency_format]" id="invoice_currency_format" value="%s %n" autocomplete="off" />
                      <div class="col-6 col-md-3 text-end fs-5 fw-bold">
                        <a class="currency-formats dotted text-decoration-dotted" title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="left" style="font-size: 1.2em;">
                          <span id="currencySymbol"><?php echo htmlspecialchars($invoice_currency_format); ?></span> <span id="second_subtotal">0.00<span>
                        </a>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                  <div class="col-8">
                    <label for="invoice_from" class="form-label"><i class="fas fa-pencil-alt icon"></i>&nbsp;&nbsp;</label>
                    <a class="show-footer-label-modal text-decoration-dotted form-label">
                      <span id="footer_label">
                    Terms &amp; Conditions	
                    
                    </a></label>
                    <textarea class="form-control form-control-sm" placeholder="Payment is due within 15 days" rows="5" style="height: 8em;" tabindex="1" maxlength="5000" name="terms" id="terms" required><?php echo htmlspecialchars($terms); ?></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                    <div id="logo" class="mt-2 position-relative">
                        <br>
                        
                        <button type="button" class="show-modal-logo btn btn-info p-4 btn-sm w-100">
                            <label for="signatureLogoInput" style="display: block; padding: 10px 20px; color: #fff; cursor: pointer; border-radius: 5px;">Add your Signature</label>
                            <input type="file" name="image" id="signatureLogoInput" accept="image/*" style="display: none;" onchange="displayImage(this)" required>
                        </button>
                        <div id="imagePreview"></div>


                    </div>
                  </div>

                </div>

                <script>
                function displayImage(input) {
                    const file = input.files[0];
                    const imagePreview = document.getElementById('imagePreview');

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.maxWidth = '100%';
                            img.style.maxHeight = '100px'; // Set a maximum height for preview
                            imagePreview.innerHTML = '';
                            imagePreview.appendChild(img);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        imagePreview.innerHTML = '';
                    }
                }
                </script>

                </div>
                <div class="row" style="margin-top: 40px;">
                <div class="col">
                    <button type="submit" name="save_and_download" class="btn btn-success done w-100"><i class="fa fa-fw fa-save"></i> Save and Download Invoice</button>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var invoiceFromInput = document.getElementById('invoice_from');
                    var invoiceBillingInput = document.getElementById('invoice_billing');
                    var termsInput = document.getElementById('terms');
                    var emailButton = document.getElementById('emailButton');

                    // Function to check and enable the button
                    function checkAndEnableButton() {
                        if (invoiceFromInput.value.trim() !== '' && invoiceBillingInput.value.trim() !== '' && termsInput.value.trim() !== '') {
                            emailButton.disabled = false;
                        } else {
                            emailButton.disabled = true;
                        }
                    }

                    invoiceFromInput.addEventListener('input', checkAndEnableButton);
                    invoiceBillingInput.addEventListener('input', checkAndEnableButton);
                    termsInput.addEventListener('input', checkAndEnableButton);
                });

                function submitForm(action) {
                    if (action === 'email_button') {
                        if (!document.getElementById('emailButton').disabled) {
                            window.location.href = 'mailer.php';
                        } else {
                            alert('Please fill out the required fields first.');
                        }
                    } else {
                        document.getElementById('myForm').submit();
                    }
                }
                </script>

                </div>
              </div>
            </form>
        </div>
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


