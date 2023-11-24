<?php
	//check login
	include("session.php");
?>


<!DOCTYPE html>

<html>
<head>
  <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PBCQCNC');</script>
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

  </style>
	</head>

  <body class="invoicehome">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBCQCNC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="container-xl">
    <div class="row pb-4">
      <div class="col-lg-10 col-md-11 mx-auto">
        <header class="main-header" style="background-color: rgba(135, 206, 235, 0.5)">
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation" style="background-color: rgba(135, 206, 235, 0.5); display: flex; justify-content: space-between;">
            <!-- Sidebar toggle button-->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
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
                    <li><a href="logout.php" class="btn btn-default btn-flat">Log out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <div class="text-center">
          <h1 class="fs-2 my-4"><b>New Invoice</b></h1>
        </div>

        <div class="px-4">
          <div class="guest-tabs">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="change-invoice-type-to-basic" aria-current="page" class="nav-link active">Basic Form</a></li>
            </ul>
          </div>

          <div class="p-4 guest-page">
            <form class="edit_invoice" id="invoice-form" action="process_invoice.php" accept-charset="UTF-8" data-remote="true" method="post">
                <div class="row">
                  <div class="col-8">
                    <label for="invoice_from" class="form-label"><i class="fa fa-user icon"></i>&nbsp;&nbsp;From</label>
                    <textarea class="form-control form-control-sm" placeholder="Your Company or Name Address" rows="5" style="height: 8em;" tabindex="1" maxlength="5000" name="from" id="invoice_from" required></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                    <div id="logo" class="mt-2 position-relative">
                      <br>
                      <input type="hidden" name="logo" id="invoice_logo_id" autocomplete="off" />
                      <button type="button" class="show-modal-logo btn btn-info p-4 btn-sm w-100">
                        Select Logo
                        <br>
                        <img src="https://images.invoicehome.com/all-logos.png" width="16" height="16" />
                        <br>
                        Logo Gallery
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row my-3">
                  <div class="col-8">
                    <label for="invoice_billing" class="form-label"><i class="fa fa-female icon"></i><i class="fa fa-male icon"></i>&nbsp;&nbsp;Bill To</label>
                    <textarea class="form-control form-control-sm" placeholder="Your customer's billing address" rows="5" style="height: 8em;" tabindex="2" maxlength="5000" name="bill_to" id="invoice_billing" required></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                    <label for="invoice_number" class="form-label"><i class="fa fa-search icon"></i>&nbsp;Invoice #</label>
                    <input class="form-control form-control-sm" placeholder="Invoice Number" tabindex="3" maxlength="100" size="100" type="text" value="000" name="invoice_number" id="invoice_number" required/><br>

                    <label for="invoice_date_issued" class="form-label">Invoice Date</label>
                    <input class="form-control datepicker form-control-sm" placeholder="yyyy-mm-dd" tabindex="4" maxlength="100" autocomplete="off" size="100" type="text" name="invoice_date" id="invoice_date_issued_string" required/>
                  </div>
                </div>
                <hr>

            
                <div class="row">
                  <div class="col-5 form-label">
                      Description
                  </div>
                  <div class="col-2 form-label">
                      Amount
                  </div>
                  <div class="col-2 form-label">
                      Discount
                  </div>
                  <div class="col-2 form-label">
                      Tax
                  </div>
                  <div class="col-1 form-label"></div>
                </div>

                <div id="items">
                  <input type="hidden" name="invoice[items_attributes][0][id]" id="invoice_items_attributes_0_id" value="212952714" autocomplete="off" />

                  <div class="row mb-3" id='row_item_212952714'>
                      <div class="col-5">
                          <textarea name="invoice[items_attributes][0][description]" id="invoice_items_attributes_0_description" placeholder="Description" class="form-control description form-control-sm" rows="2" tabindex="212952714" maxlength="5000"></textarea>
                      </div>

                      <div class="col-2">
                          <input class="form-control amount description form-control-sm" placeholder="Amount" tabindex="212952714" maxlength="100" size="100" type="text" value="0.00" name="invoice[items_attributes][0][amount]" id="invoice_items_attributes_0_amount" />
                      </div>

                      <div class="col-2">
                          <input class="form-control discount description form-control-sm" placeholder="Discount" tabindex="212952714" maxlength="100" size="100" type="text" value="0.00" name="invoice[items_attributes][0][discount]" id="invoice_items_attributes_0_discount" />
                      </div>

                        <div class="col-2">
                            <button type="button" class="add_tax btn btn-success form-control description form-control-sm" tabindex="212952714">Add Tax</button>
                        

                        <div class="popup-overlay" id="popupOverlay" style="display: none;">
                            <div class="popup-form" > <!-- Initially hidden -->
                              <span class="close-button" onclick="closePopup()">&times;</span>
                              <h2>Add A Tax</h2>
                              <input type="text" placeholder="Tax Name" id="taxName">
                              <input type="text" placeholder="Tax Rate %" tabindex="212952714" name="invoice[items_attributes][0][tax]" id="invoice_items_attributes_0_tax">
                              <button onclick="addTax()">Add Tax</button>
                            </div>
                        </div>
                        <script>
                          function openPopup() {
                            var popupOverlay = document.getElementById("popupOverlay");
                            popupOverlay.style.display = "flex";
                          }

                          function closePopup() {
                            var popupOverlay = document.getElementById("popupOverlay");
                            popupOverlay.style.display = "none";
                          }

                          function addTax() {
                            var taxName = document.getElementById("taxName").value;
                            var taxRate = document.getElementById("invoice_items_attributes_0_tax").value;

                            if (taxName && taxRate) {
                              // Remove any non-numeric characters from the entered tax rate
                              taxRate = taxRate.replace(/[^0-9.]/g, '');

                              // Append the percentage sign to the tax rate
                              var taxRateWithPercentage = taxRate + "%";

                              // Replace the "Add Tax" button with the entered tax rate value
                              var addButton = document.querySelector(".add_tax");
                              addButton.textContent = taxRateWithPercentage;

                              // Close the popup
                              closePopup();
                            }
                          }

                          // Wait for the DOM to be fully loaded before binding the event
                          document.addEventListener("DOMContentLoaded", function () {
                            // Bind the click event to the "Add Tax" button
                            var addButton = document.querySelector(".add_tax");
                            addButton.addEventListener("click", openPopup);
                          });
                        </script>
                        </div>
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

                <script src="js/script2.js"></script>

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
                      <input type="hidden" name="invoice[currency]" id="invoice_currency" value="NGN" autocomplete="off" />
                      <input type="hidden" name="invoice[currency_format]" id="invoice_currency_format" value="%s %n" autocomplete="off" />
                      <div class="col-6 col-md-3 text-end fs-5 fw-bold">
                        <a class="currency-formats dotted text-decoration-dotted" title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="left" style="font-size: 1.2em;">
                          <span id="currencySymbol">₦</span> <span id="second_subtotal">0.00<span>
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
                    <textarea class="form-control form-control-sm" placeholder="Payment is due within 15 days" rows="5" style="height: 8em;" tabindex="1" maxlength="5000" name="terms" id="invoice_from" required></textarea>
                  </div>

                  <div class="col-4 col-md-3 offset-md-1">
                    <div id="logo" class="mt-2 position-relative">
                        <br>
                        <input type="hidden" name="signature_logo" id="invoice_logo_id" autocomplete="off" />
                        <!-- Create an input element for file upload (hidden by default) -->
                        <input type="file" id="signatureLogoInput" accept="image/*" style="display: none;">
                        <!-- Create a button to trigger the file input -->
                        <button type="button" class="show-modal-logo btn btn-info p-4 btn-sm w-100" onclick="openFileInput()">
                            Add your Signature
                            <br>
                            <div id="logoPreview">
                                <img src="images/aaddbfff5ed8e4d2bd1f7f0a5df23c29-removebg-preview.png" width="46px" height="36px" />
                            </div>
                        </button>
                    </div>
                  </div>

                </div>
                <div class="row" style="margin-top: 40px;">
                  <div class="col">
                    <button type="submit" name="submit" class="btn btn-success done w-100"><i class="fa fa-fw fa-save"></i> Save Invoice, Print or Send via Email </button>
                  </div>
                </div>
              </div>
            </form>
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

  

  <script>
    $('.js-example-basic-single').select2();
  </script>
</body>


