<?php

include('header.php');
include('functions.php');

?>
<style>
    textarea:focus {
        border-color: #337ab7; /* Border color on focus */
    }
</style>
		
		<!-- <hr> -->

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice" class="p-3" style="margin-left: 20%; margin-right: 20%; background-color: rgba(173, 216, 250, 0.5); border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 20px;">
			<input type="hidden" name="action" value="create_invoice">
			
			<div class="row">
				<div class="col-md-4 col-sm-12">
				<h2 style="text-align: center;"><b>New Invoice</b></h2>
				</div>
				<div class="col-md-12 col-sm-12 text-right">
					<div class="row">
						<div class="col-md-6 col-sm-6 mb-2">
							<select name="invoice_type" id="invoice_type" class="form-control">
								<option value="invoice" selected>Invoice</option>
								<option value="quote">Quote</option>
								<option value="receipt">Receipt</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-6 mb-2">
							<select name="invoice_status" id="invoice_status" class="form-control">
								<option value="open" selected>Open</option>
								<option value="paid">Paid</option>
							</select>
						</div>
					</div>
					<br /> 
					<div class="row">
						<div class="col-md-6 col-sm-6 mb-2">
							<div class="form-group">
								<div class="input-group date" id="invoice_date">
									<input type="text" class="form-control required" name="invoice_date" placeholder="Invoice Date" data-date-format="<?php echo DATE_FORMAT ?>" />
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 mb-2">
							<div class="input-group">
								<span class="input-group-addon">Invoice #</span>
								<input type="text" name="invoice_id" id="invoice_id" class="form-control required" placeholder="Invoice Number" aria-describedby="sizing-addon1" value="<?php getInvoiceId(); ?>">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="float-left">From</h4>
							<div class="clear"></div>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-12">
									
									<textarea class="required" name="senders_name" id="customer_name" placeholder="Your Company or Name Address" rows="5" style="height: 8em; width: 100%; border-radius: 10px; border: 4px solid transparent; outline: none;" tabindex="1" maxlength="10000" onfocus="this.style.borderColor='#337ab7';"></textarea>

								</div>
								<div class="col-xs-6">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-center">
					<div class="panel-body form-group form-group-sm">
						<div class="row">
							<div class="col-xs-12">
								<div id="logo" class="mt-2 position-relative">
									<input type="file" name="invoice[logo_id]" id="invoice_logo_id" accept="image/*" style="display: none" />

									<button type="button" class="show-modal-logo btn btn-info p-4 btn-sm mx-auto" id="select-logo" style="width: 200px; height: 200px;">
										<div style="text-align: center;">
											<span>Select Logo</span>
											<br>
											<img src="https://images.invoicehome.com/all-logos.png" width="16" height="16" />
											<br>
											<span>Logo Gallery</span>
										</div>
									</button>

									<div id="image-preview" style="display: none;">
										<img id="selected-logo" src="" alt="Selected Logo" width="100" height="100">
										<br>
										<button id="reupload-logo" class="btn btn-warning">Reupload</button>
										<button id="cancel-upload" class="btn btn-danger">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				const selectLogoButton = document.getElementById('select-logo');
				const uploadInput = document.getElementById('invoice_logo_id');
				const imagePreview = document.getElementById('image-preview');
				const selectedLogo = document.getElementById('selected-logo');
				const reuploadButton = document.getElementById('reupload-logo');
				const cancelUploadButton = document.getElementById('cancel-upload');

				selectLogoButton.addEventListener('click', () => {
					uploadInput.click(); // Trigger the hidden file input
				});

				uploadInput.addEventListener('change', () => {
					const file = uploadInput.files[0];
					if (file) {
						const reader = new FileReader();
						reader.onload = (e) => {
							selectedLogo.src = e.target.result;
							imagePreview.style.display = 'block';
							reuploadButton.style.display = 'inline-block';
							cancelUploadButton.style.display = 'inline-block';
							selectLogoButton.style.display = 'none';
						};
						reader.readAsDataURL(file);
					}
				});

				reuploadButton.addEventListener('click', () => {
					uploadInput.value = '';
					imagePreview.style.display = 'none';
					selectLogoButton.style.display = 'inline-block';
				});

				cancelUploadButton.addEventListener('click', () => {
					uploadInput.value = '';
					imagePreview.style.display = 'none';
					selectLogoButton.style.display = 'inline-block';
				});
    		</script>

			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Bill To</h4>
						</div>
						<div class="panel-body form-group form-group-sm">
							<div class="row">
								<div class="col-xs-12">
									<textarea class="required" name="customer_name" id="customer_name" placeholder="Your customers billing Address" rows="5" style="height: 8em; width: 100%; border-radius: 10px; border: 4px solid transparent; outline: none;" tabindex="1" maxlength="10000" onfocus="this.style.borderColor='#337ab7';"></textarea>

									<!-- <div class="form-group">
										<input type="text" class="form-control margin-bottom" name="customer_address_2_ship" id="customer_address_2_ship" placeholder="Address 2" tabindex="11">	
									</div>
									<div class="form-group no-margin-bottom">
										<input type="text" class="form-control required" name="customer_county_ship" id="customer_county_ship" placeholder="Country" tabindex="13">
									</div> -->
								</div>
								<!-- <div class="col-xs-6">
									<div class="form-group">
								    	<input type="text" class="form-control margin-bottom required" name="customer_address_1_ship" id="customer_address_1_ship" placeholder="Address 1" tabindex="10">
									</div>
									<div class="form-group">
										<input type="text" class="form-control margin-bottom required" name="customer_town_ship" id="customer_town_ship" placeholder="Town" tabindex="12">							
								    </div>
								    <div class="form-group no-margin-bottom">
								    	<input type="text" class="form-control required" name="customer_postcode_ship" id="customer_postcode_ship" placeholder="Postcode" tabindex="14">
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-center">
					<div class="panel-body form-group form-group-sm">
						<div class="row">
							<div class="col-xs-12">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- / end client details section -->
			<table class="table table-bordered table-hover table-striped" id="invoice_table">
				<thead>
					<tr>
						<th width="500">
							<h4><a href="#" class="btn btn-success btn-xs add-row"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Description</h4>
						</th>
						<th width="50">
							<h4>Qty</h4>
						</th>
						<th width="150">
							<h4>Price</h4>
						</th>
						<th width="150">
							<h4>Discount</h4>
						</th>
						<th width="150">
							<h4>Sub Total</h4>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="form-group form-group-sm  no-margin-bottom">
								<a href="#" class="btn btn-danger btn-xs delete-row"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
								<input type="text" class="form-control form-group-sm item-input invoice_product" name="invoice_product[]" placeholder="Enter Product Name OR Description">
								<p class="item-select">or <a href="#">select a description</a></p>
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm no-margin-bottom">
								<input type="number" class="form-control invoice_product_qty calculate" name="invoice_product_qty[]" value="1">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm  no-margin-bottom">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="number" class="form-control calculate invoice_product_price required" name="invoice_product_price[]" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_discount[]" placeholder="Enter % OR value (ex: 10% or 10.50)">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" class="form-control calculate-sub" name="invoice_product_sub[]" id="invoice_product_sub" value="0.00" aria-describedby="sizing-addon1" disabled>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div id="invoice_totals" class="padding-right row text-right">
				<div class="col-xs-6">
					<div class="input-group form-group-sm textarea no-margin-bottom">
						<textarea class-"form-control" name="invoice_notes" placeholder="Additional Notes..."></textarea>
					</div>

					
				</div>

				
				<div class="col-xs-6 no-padding-right">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Sub Total:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-sub-total">0.00</span>
							<input type="hidden" name="invoice_subtotal" id="invoice_subtotal">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Discount:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-discount">0.00</span>
							<input type="hidden" name="invoice_discount" id="invoice_discount">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong class="shipping">Shipping:</strong>
						</div>
						<div class="col-xs-3">
							<div class="input-group input-group-sm">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="text" class="form-control calculate shipping" name="invoice_shipping" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</div>
					</div>
					<?php if (ENABLE_VAT == true) { ?>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>TAX/VAT:</strong><br>Remove TAX/VAT <input type="checkbox" class="remove_vat">
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-vat" data-enable-vat="<?php echo ENABLE_VAT ?>" data-vat-rate="<?php echo VAT_RATE ?>" data-vat-method="<?php echo VAT_INCLUDED ?>">0.00</span>
							<input type="hidden" name="invoice_vat" id="invoice_vat">
						</div>
					</div>
					<?php } ?>
					<div class="row">
						<div class="col-xs-4 col-xs-offset-5">
							<strong>Total:</strong>
						</div>
						<div class="col-xs-3">
							<?php echo CURRENCY ?><span class="invoice-total">0.00</span>
							<input type="hidden" name="invoice_total" id="invoice_total">
						</div>
					</div>
				</div>

		
					<div class="col-xs-6">
						<input type="email" name="custom_email" id="custom_email" class="custom_email_textarea" placeholder="Enter custom email if you wish to override the default invoice type email msg!"></input>
					</div>

					<div class="col-xs-6 margin-top btn-group">
						<input type="submit" id="action_create_invoice" class="btn btn-success float-right" value="Create Invoice" data-loading-text="Creating...">
					</div>
			

			</div>
			<div class="row">
				
			</div>
		</form>

		<div id="insert" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select Product</h4>
		      </div>
		      <div class="modal-body">
				<?php popProductsList(); ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div id="insert_customer" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Select An Existing Customer</h4>
		      </div>
		      <div class="modal-body">
				<?php popCustomersList(); ?>
		      </div>
		      <div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

<?php
	include('footer.php');
?>