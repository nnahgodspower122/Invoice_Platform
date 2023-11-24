
<!DOCTYPE html>
<html lang="en">

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

        <meta property="og:image" content="https://acme.invoicehome.com/assets/invoicehome-logo-5d9895e4836774de874ff885a01b442d9b04df0f0117739053475a8707e5dc22.png">
       
		<title>100 - New Invoice - Invoice Home</title>
<meta name="description" content="Create and download professional PDF invoices in seconds with the invoice template gallery, send invoices via email, get paid by card." />	
		
<link rel="icon" type="image/png" href="https://images.invoicehome.com/favicon-usd.png">

		<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="sI4GvIK5kh3Bjeq3Ndausra7LjKCmPQe5436NY17pbYPDWOznrzxNcXtwMq1RHamB2-BIL9fcVpu_yxjld-eKw" />
		

		<link rel="stylesheet" media="all" href="https://acme.invoicehome.com/assets/application-ea466ec73148ccdd81cadc5720e6940f839132a1e9fc108b7c1ae3a8cdb4c746.css" />
		<link rel="stylesheet" media="all" href="https://acme.invoicehome.com/assets/themes/light-6957b6123a1e86f65e6bca6bc516d08361dea65ed9fe9ed320cb38c2f683f8d0.css" />

		
	
			<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lcs57gkAAAAAHMrbzp6CdgZtfZizW03UnSZpxyb"></script>
		


	</head>

	<body class="invoicehome">

		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBCQCNC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

		





		


		<div class="container-xl">

			<div class="row pb-4">

				<div class="col-lg-10 col-md-11 mx-auto">

					<div class="text-center">
						<h1 class="fs-2 my-4">New Invoice</h1>
					</div>

					<div class="text-center m-4 fs-6 semibold no-underline-links link-underline-on-hover lh-lg background-font-color">

                        
                    </div>
						
					<div class="px-4">
						







                        <div class="guest-tabs">
                            <ul class="nav nav-tabs">

                            
                            <li class="nav-item"><a id="change-invoice-type-to-basic" aria-current="page" class="nav-link active">Basic Form</a></li>
                        
                            </ul>

                         </div>

    <div class="p-4 guest-page">
        <form class="edit_invoice" id="invoice-form" action="/invoices/115134380" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off" /><input type="hidden" name="authenticity_token" value="-QngwJaCylOk3Jw9T_ib6p1DmS0u7O0RsUpGJ-EEkvt6ao6hkz1XrrQiW0mscf8bPEFDnIe5rUFPkq0JpTrEjg" autocomplete="off" />

	<input type="hidden" name="invoice[invoice_type]" id="invoice_type" value="BASIC" autocomplete="off" />

	<input type="hidden" name="redirect_page" id="redirect_page" value="" autocomplete="off" />

	<input type="hidden" name="save_clicked" id="save_clicked" value="" autocomplete="off" />

	<input type="hidden" name="ref" id="ref" autocomplete="off" />

	<div class="row">

		<div class="col-8">
			<label for="invoice_from" class="form-label"><i class="fa fa-user icon"></i>&nbsp;&nbsp;From</label>
			<textarea class="form-control form-control-sm" placeholder="Your Company or Name
		Address" rows="5" style="height: 8em;" tabindex="1" maxlength="5000" name="invoice[from]" id="invoice_from">
		</textarea>
		</div>

		<div class="col-4 col-md-3 offset-md-1">
    <div id="logo" class="mt-2 position-relative">
        <br>
        <input type="file" name="invoice[logo_id]" id="invoice_logo_id" accept="image/*" style="display: none;" />

        <button type="button" class="show-modal-logo btn btn-info p-4 btn-sm w-100">
            Select Logo
            <br>
            <img src="https://images.invoicehome.com/all-logos.png" width="16" height="16" />
            <br>
            Logo Gallery
        </button>

        <div id="image-preview" style="display: none;">
            <img id="selected-logo" src="" alt="Selected Logo">
            <br>
            <button id="reupload-logo" class="btn btn-warning">Reupload</button>
            <button id="cancel-upload" class="btn btn-danger">Cancel</button>
        </div>
    </div>
</div>


	</div>

	<div class="row my-3">

		<div class="col-8">
			<label for="invoice_billing" class="form-label"><i class="fa fa-female icon"></i><i class="fa fa-male icon"></i>&nbsp;&nbsp;Bill To</label>
			<textarea class="form-control form-control-sm" placeholder="Your customer&#39;s billing address" rows="5" style="height: 8em;" tabindex="2" maxlength="5000" name="invoice[billing]" id="invoice_billing">
			</textarea>
		</div>

		<div class="col-4 col-md-3 offset-md-1">
			<label for="invoice_number" class="form-label"><i class="fa fa-search icon"></i>&nbsp;Invoice #</label>
			<input class="form-control form-control-sm" placeholder="Invoice Number" tabindex="3" maxlength="100" size="100" type="text" value="100" name="invoice[number]" id="invoice_number" /><br>

			<label for="invoice_date_issued" class="form-label">Invoice Date</label>
			<input class="form-control datepicker form-control-sm" placeholder="dd/mm/yy" tabindex="4" maxlength="100" autocomplete="off" size="100" type="text" value="16/10/2023" name="invoice[date_issued_string]" id="invoice_date_issued_string" />
		</div>

	</div>

	<hr>


		<div class="row">

			<div class="col-6 form-label">
				Description
			</div>

			<div class="col-2 form-label">
				Amount
			</div>

			<div class="col-3 form-label text-center">
				Tax
			</div>

			<div class="col-1 form-label"></div>

		</div>



		<div id="items">


		<input type="hidden" name="invoice[items_attributes][0][id]" id="invoice_items_attributes_0_id" value="212952714" autocomplete="off" />

		<div class="row mb-3" id='row_item_212952714'>

			<div class="col-6">
				<textarea name="invoice[items_attributes][0][description]" id="invoice_items_attributes_0_description" placeholder="Description" class="form-control description form-control-sm" rows="2" tabindex="212952714" maxlength="5000">
</textarea>
			</div>

			<div class="col-2">
				<input type="text" name="invoice[items_attributes][0][amount]" id="invoice_items_attributes_0_amount" value="0.0" placeholder="Amount" class="form-control amount form-control-sm" tabindex="212952714" maxlength="100" />
			</div>

			<div class="col-3">

				<input type="hidden" name="invoice[items_attributes][0][tax_rate_id]" id="invoice_items_attributes_0_tax_rate_id" autocomplete="off" />

				<input type="hidden" name="invoice[items_attributes][0][tax_rate_id_2]" id="invoice_items_attributes_0_tax_rate_id_2" autocomplete="off" />

				<button type="button" id="invoice_items_attributes_0_tax_rate_name" class="btn btn-info btn-sm show-modal tax-rate-name w-100" data-index="0" data-item-id="212952714" data-locale="en">Add a Tax</button>

			</div>

			<div class="col-1 text-center text-nowrap" style="margin-top: 7px;">

				<input type="hidden" name="invoice[items_attributes][0][_destroy]" id="invoice_items_attributes_0__destroy" autocomplete="off" />


				<i class="fa fa-times-circle delete-item acts-as-link text-danger fs-5" title="Delete Item"></i>
				
			</div>

		</div>


</div>




		<div class="row">


		<div class="col-12">
			<button name="button" type="button" class="btn btn-info btn-sm w-100" id="add-item">Add New Item</button>
		</div>


</div>


	
	
<div id="total">

		
		<div class="row mt-4">
			<div class="col-6 col-md-3 offset-md-6 fs-6 fw-bold">Subtotal</div>
			<div class="col-6 col-md-3 text-end fs-6 fw-bold">0.00</div>
		</div>	
		

			
	<div class="row my-4">
		
		<div class="col-6 col-md-3 offset-md-6 fs-5 fw-bold">
				TOTAL <a class='currency-formats show-modal-currency-format text-decoration-dotted' title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="top">NGN&nbsp;<sup style="font-size: 50%; top: -.7em;">Edit</sup></a>
		</div>
		
		<input type="hidden" name="invoice[currency]" id="invoice_currency" value="NGN" autocomplete="off" />
				
		<input type="hidden" name="invoice[currency_format]" id="invoice_currency_format" value="%s %n" autocomplete="off" />
		
		<div class="col-6 col-md-3 text-end fs-5 fw-bold">
					
				<a class='currency-formats show-modal-currency-format dotted text-decoration-dotted' title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="left">
					₦ 0.00
				</a>
				
		</div>

	</div>
				
</div>


	<div class="row">

		<div class="col-8">


				<label for="invoice_footer_1" class="form-label me-1"><i class="fas fa-pencil-alt icon"></i></label>

				<a class="show-footer-label-modal text-decoration-dotted form-label">
					<span id="footer_label">
	Terms &amp; Conditions	
</span>&nbsp;<sup style="font-size: 10px; top: -.5em; font-weight: 700;">Edit</sup>
				</a>

				<textarea class="form-control form-control-sm" placeholder="Optional" rows="5" style="height: 8em;" tabindex="-1" maxlength="5000" name="invoice[footer_1]" id="invoice_footer_1">
Payment is due within 15 days</textarea>


		</div>

		<div class="col-4 col-md-3 offset-md-1">
			<div id="signature" class="mt-2 position-relative">
	
	<br>

	<input type="hidden" name="invoice[signature_id]" id="invoice_signature_id" autocomplete="off" />

		<button type="button" class="show-modal-signature btn btn-info btn-sm w-100" style="padding: 1.7rem !important;">
			Add Your Signature
			<br>
			<i class="fas fa-signature fs-5 icon-signature py-2"></i>
		</button>

</div>

		</div>

	</div>

</form>
<div class="modal" tabindex="-1" id="tax-rates-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h6 class="modal-title">Add a Tax</h6>
				<button type="button" class="btn-close choose-last-tax" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<div class="modal-body">

				<div id="tax-rates">
				</div>

				<div id="new-tax-rate">
				</div>

			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<input type="hidden" name="target-item" id="target-item" value="" autocomplete="off" />
<input type="hidden" name="choose-last-tax" id="choose-last-tax" value="" autocomplete="off" />


<div class="modal" tabindex="-1" id="logoModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h6 class="modal-title">Select Logo</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<div class="modal-body">
				
<ul class="nav nav-tabs" role="tablist">

  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="cliparts-tab" data-bs-toggle="tab" href="#cliparts" role="tab" aria-controls="cliparts" aria-selected="true"><i class="fa fa-fw fa-image icon-clipart me-1"></i>Clipart</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link" id="people-tab" data-bs-toggle="tab" href="#people" role="tab" aria-controls="people" aria-selected="false"><i class="fa fa-fw fa-user-md icon-people me-1"></i>People</a>
  </li>
  
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="jobs-tab" data-bs-toggle="tab" href="#jobs" role="tab" aria-controls="jobs" aria-selected="false"><i class="fa fa-fw fa-paint-brush icon-jobs me-1"></i>Jobs</a>
  </li>

  <li class="nav-item" role="presentation">
    <a class="nav-link " id="your-logo-tab" data-bs-toggle="tab" href="#your_logo" role="tab" aria-controls="your_logo" aria-selected="false"><i class="fa fa-fw fa-save me-1"></i>Your Logo</a>
  </li>

</ul>

<div class="tab-content">

	<div class="tab-pane show active" id="cliparts" role="tabpanel" aria-labelledby="cliparts-tab">
		<div id="cliparts_list">

	<br>
				
	<div class="row text-end">
		
	<div class="col">
		Filter by Color
	
		<a class="text-decoration-none mx-1" title="All" data-remote="true" href="/logos">
			<img class="" style="position: relative; top: -2px;" src="https://images.invoicehome.com/all-colors-selected.png" width="18" height="18" />
</a>	

			<a class="text-decoration-none mx-1" title="Black &amp; White" data-remote="true" href="/logos?color_id=7">
				<i class="fa fa-circle fa-lg" style="color: black"></i>
</a>

			<a class="text-decoration-none mx-1" title="Red" data-remote="true" href="/logos?color_id=1">
				<i class="fa fa-circle fa-lg" style="color: rgb(204,61,59)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Beige" data-remote="true" href="/logos?color_id=8">
				<i class="fa fa-circle fa-lg" style="color: rgb(226,144,0)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Yellow" data-remote="true" href="/logos?color_id=5">
				<i class="fa fa-circle fa-lg" style="color: rgb(253, 205,0)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Orange" data-remote="true" href="/logos?color_id=6">
				<i class="fa fa-circle fa-lg" style="color: rgb(255,128,53)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Blue" data-remote="true" href="/logos?color_id=2">
				<i class="fa fa-circle fa-lg" style="color: rgb(54,116,197)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Light Blue" data-remote="true" href="/logos?color_id=3">
				<i class="fa fa-circle fa-lg" style="color: rgb(79,178,218)"></i>
</a>

			<a class="text-decoration-none mx-1" title="Green" data-remote="true" href="/logos?color_id=4">
				<i class="fa fa-circle fa-lg" style="color: rgb(80,175,58)"></i>
</a>
	</div>
			
</div>
	
	<div class="justify-content-center pagination m-3">
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?goal=form_start&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">
	
		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="960" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/960/thumb_centered/Logo_Caffee_Yellow_Handrawn.png?timestamp=1436617985&amp;Expires=1697450053&amp;Signature=TDUrn1zNmD5iIRs99shRX0yPuAAh2z4O7j6ff6nIeU~Q5BgfhxlGnp3enDBeeLmuMGfGj9YTqDe7fkXm1mdenVzs9U5wG8PNvMwWMF4YsTx4HZHyMQva1ADsoBlzbKeRSGjoJrDgmKRiQZTJqbXD5s9s~mN5efzAeLci8tquGBjNFpEhw9VHgWKRQEIc5OeprMfvh2XP7Q2oRVGXPtuYzUs7he0Jf699ziPxN0FZCnjBHCouGhJou55Y8WFsq73zOpTB91iVe4Htuy5nXgf5wXjGcqA3WD0GiHuCSYWBAyxvuEuVamyaMu-vDvthWbrjqRDK4UxHxFlxSWzih0A4kA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="960">Coffee Yellow Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="844" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/844/thumb_centered/Logo_handrawn_Gardener_green.png?timestamp=1436617980&amp;Expires=1697450053&amp;Signature=AbSFyBRw0e-ljrNMZSQuhtrZ2-T4T9jk091zJkbWQHWjkhPypnyBMe8DXz0nz4Sm2iRU9zyZ4zXzoAb~~0RjmlTZDWVoxI3abCG~K~GRmxymlb~THMCmS1YPq1YHxhFmeWTUzxLEFNLq-q~Ja~Nq2e5uC4zXREunXpvmYiAGEXPimP17ZdZ7kosp7WiMRjh115ngHFQ~FgxJrTRQLHYZDMVuMCH-ckGY7OR88raX96k1WGkxQ8clN3hixrv0LWFifCCc9J2cQTm0uh2wZDtvBeyIuH9exCHx9XVpSjVnGfMREglWgRtpbB-idwLsJz0HJLNd7MirIPYifY~BGsWO4Q__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="844">Gardener Green Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="918" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/918/thumb_centered/Logo_handrawn_Healthmedical_red.png?timestamp=1436617954&amp;Expires=1697450053&amp;Signature=f9lPZGdo69IylEhbyCTJ5-y2We~4yWv7BrJEYPtfOeL-B4vzr6vper53C1682x3byopyJPuuXFzlj--YexX6lPbs44q35qxnh2z2~5UU1ihqIpmZdJZGgjI4naTnDLkGfvSlIhBB746pRYdS1RSlN2ciSzT~~QdHTPpQdcbEUOviWCTew30vx~eOkenfI966JBPsigg7aH7ES0EgdqDcbISPI6zjSrMrZeDTrdCK6Xb2E8yTwWv8aO3aoyZ6b9fit4Q99lAC-UmkXJeO8UbnzjFe54iovzx1qkcbxWcgwq5ieWav5CA3lWJ8~d7ne62RcCamXCVNViW5ruSh-5qbwg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="918">Health Red Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="176" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/176/thumb_centered/Logo_HairBeauty_red.png?timestamp=1436617925&amp;Expires=1697450053&amp;Signature=ldLx2xqcM4YrZ-2KKbKlstuOe5DRjxCbq0ac4E1vUUWy00DdHRsaWRbUQFe-fmK22nfCN~rMPsM54hv7ubLYGnKnrMOH9wYsWDuhL~tposkLCieITF7lKFRVxAAXdB2Ku4suW3S5kOXLLKdbX7xk566cybPhwPkuIHXicpSHNXDLr81VpbxqExe68gmol9gC7rMkRwvwtwVf~4JnC3WZIbiVoZwTca3PxwexOvfWrBeCvOqQIh4uX3AzLGkDYX0RIuHA9MEe8mkzPL1uITBJRoVh1cXRQA62RkAm3s-Wvdt1CTNMyhOQ1GhFSYFhXa~rfcqRSeqGmS46qUyxMKITzg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="176">Hair Beauty Red</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="876" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/876/thumb_centered/Logo_handrawn_Repair-man_light-blue.png?timestamp=1400510778&amp;Expires=1697450053&amp;Signature=NaQbnwB-cQIHPwc6n6qjA8enEyhbJh3rp1oIhWpsBrCficinJgP~RO1P0~nkgMoLnIox7TGT4EBT6AzlApfHgd2e3dv51-OGlZWWFG7NvxBVZ5BkmTO~aNvcvM6FdPwRnFts1fSwXPPjCbZ4DvTFkutvclPIMH83CFdyt5PC3HuTg~Iv4xT5scs~OZR-6rVsZy1Y42O-qVOdNJ2ikXY7Vjsowvhil4Jc3RR1sh2eNmy7Ynbs1YIcnc50UQPGTIBxzfetOIbD08JVm9bn1-LOeq04p1QtxKcfgq-ynGzoGJyK3ST0REBeFFKGB3FRwwofFZ2yRcV2-FoNmO1akS7B9A__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="876">Repair Man Light Blue Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="1155" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/001/155/thumb_centered/Logo_Analyst_Green.png?timestamp=1400510778&amp;Expires=1697450053&amp;Signature=aszQsnRIvWre8s2qUU4E2o8PSOU9RECFtpln2wnbPcAwW5jHnViwzpLlAtT65l8TRjCrrGsIBit3RNdNFndOJD1Ic5A9uWqDmr7vfmrEyZqxy23Lqm8O34lJ-5vL13ieu~OIzCoxM01W0tFkRx0Z0EuQNyBziJN5MhoERQWIy8Kf-L~9TC~5hYgMGh~lrsjnVwwaTFSkOJsk4cDvXbNJDvhwjaV6-W6Gdi4Hc~7ca4Q9ltUFbkM578AaacRPv3cPRVkIZBc7lyo~Q~vZqbjZMJa0cfn9xeZCUuTsfJ5VZG3P7Pn8Kw~wYdnm3eJj5HRJzuUEJkFeZMf3fV6UcV6byA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="1155">Analyst Green 3D</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="873" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/873/thumb_centered/Logo_handrawn_Legal_light-blue.png?timestamp=1400143645&amp;Expires=1697450053&amp;Signature=FtCF2uJ8awqwgcsYx0I46Tlz5Moo2rEE87ASxTyUifUsItE9FMqZYvPIN2juoENEIaz8U~hga~5dvsLvik4TJ-pYqL-oaBAvtgklbEMe1TT-TaZSGoKtZnxww31TkenpeEoqNC-2MKqbFJKi7ixDuPY4iv0w68L2~-FooyGsmCyH8SqdWYYWjFd5pnOec8K96Fg5CaSEbSlk40hY2HvBqguTgEuTvWFZ6h1N96mdToEvySdubxENyFgM08QY2ytZVpqY0SVIXwnxTx9pR~Ui1D10DSEMyrhEraTpVWeJPfm-OucTzGmj9ywsat-AkLOnxqlyN9p7n60UvdVcAQJ4GA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="873">Legal Light Blue Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="907" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/907/thumb_centered/Logo_handrawn_Butcher_red.png?timestamp=1400143641&amp;Expires=1697450053&amp;Signature=J7fybFDv1paRsU56FN4dmIN6wzI4knjD7xD6jLmaigP1k4huTlq0h3qHGwPlBdok66tSD3fK5vH~dVhBGDN2MJFkrwVK3sNDkmOEl3ZXolY~hfN2IMD3D1U7P3UbyCAcFhKz0hghczxO4mkSDfgAuAwi7wPJ49bWMDjnOUcMCtIwgxbPzRFyoSnywDoG3L3AuWn1H8OwFUztFXqfAZLpUs9YFC223R3KvWzIGMIkBKuVjNZY0gqrCGwM7EnqhzVTaMLoJbVTWvLaoQE~GgpZvns1xf6hWMB~BdxHSMFZ-bqJafGZ7iqfAPrKbKSI7L8ULt4kb2V10oA9OEtn7dy8aA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="907">Butcher Red Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="144" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/144/thumb_centered/Logo_HandymanRepairs.png?timestamp=1400143637&amp;Expires=1697450053&amp;Signature=W4Qt9MAY5dg4BWhc3kEFWYsuMaV57tmvaVKqFQB8rpcayiG0JciakglXpKebSZ6aAxHbGWFlxcJjieBaYXNAFlXfBMaiBxalhQHvGzKXktqcQp2vdjXgwoj8phYVyiYlb9Jr77XXetdBPq9XU7yBNd98ahrAn9Fn77Gj4yb9x2dlpGeoD5Rze5SDQSHfbhDVSqhnxuy3gUo2UwVm43DK0DGeoTnDqTjwk8UcxMKxuTH45xhxYayQNccpqWz9kl6gxkAYvZwYFiQvbayLDFfugAEGynJkmJavpjENpTGmIO7izNyh5wPTbqTlsFIDQj5IYImTFLD5vWgQQVBmA2Y9HQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="144">Handyman Yellow</a>
				</div>
				
	
			
	</div>

</div>
	</div>

	<div class="tab-pane" id="people" role="tabpanel" aria-labelledby="people-tab">
		<div id="people_list">

	<br>
			
	<div class="row text-end">	
			
		<div class="col">
			Filter by Color
		
			<a class="text-decoration-none mx-1" title="All" data-remote="true" href="/logos?category=PEOPLE">
				<img class="" style="position: relative; top: -2px;" src="https://images.invoicehome.com/all-colors-selected.png" width="18" height="18" />
</a>		

				<a class="text-decoration-none mx-1" title="Black &amp; White" data-remote="true" href="/logos?category=PEOPLE&amp;color_id=7">
					<i class="fa fa-circle fa-lg" style="color: black"></i>
</a>
		</div>
				
	</div>

	<div class="justify-content-center pagination m-3">
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?category=PEOPLE&amp;goal=form_start&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">
	
		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8004" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/004/thumb_centered/accountant.png?timestamp=1436617980&amp;Expires=1697450053&amp;Signature=ixoNOAna3EkJCuK~RtRnOpAQ8fz1HA-dZkl0CmOL9JZIg50DfIgpOZxdpdkSGI1tD3Svzsanp3JuydEkaeF~c8f3aTMdx0L5xJZ5iwWvKDHxQ6JLXLm7BtTXdOzboflfrJJnewbzuapAdIiSUOEZvjWwxjNeBMvFds6muzWN~UMhnGzkRutzHhR8GYKy840y-68ZC63AM-xb6Yk5FieLLoinfXieUp47eqC0LzeOtRG7x3nj~z9w3BW68Jni9lEkJTGNeRs4RVewqCKUS0BjV8vodg9J6yZ6OWN672UV9quhGiPifznmuknMwPjUlcFZI5PMYXYCApTO1b4Dz5LoLg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8004">Accountant</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8059" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/059/thumb_centered/accountant_bw.png?timestamp=1443024228&amp;Expires=1697450053&amp;Signature=eqv5177f27quN60Vqlrx03fpCiGLeiuG7UH0iTG6zjjnSI7H9bySWbM3xlMTYz0RUZxUIU2PrSOnWousC38QHtWUnyEf~HeD1UeK5VFBvkSTBDcje124TJ2J-muKl9W9OkBSr7hVkayH~z~fU8hDzp7cHbJapLNUE45qz9ETaO32~tHFn5276If5cnCxXbcWW2MMpcoVMEhhZDc5V6~fK2SuLF-sWjzm1001SXAUaqtiy4P3qU4C0azHDea7FnCfYxtJC2fg5QnVHHYG1nwPAtfm5o7l3aj3F24gee6NEh0n6LztOb5T8ig5-AnJQiFLvo1b9al5Z61ySMsrlJwVGQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8059">Accountant B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="113413" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/113/413/thumb_centered/accountant_woman.png?timestamp=1472480304&amp;Expires=1697450053&amp;Signature=Uev585G5xjaVtoAWMgXu3a9duIwjAS1xV3p4jsrC-20zTRWhVm~52cy1~q8b~LzN9-FoqjR7IZoaydVl3BozeMb-fKfT4xCr72rhCWJdZWbrtOIwUEStLYwwipOlG7fA-0mEMN595XiUnA131Zf-n38g5Kk3s12eLIGkHyFUxa~IiIjikoBdXWNUsJ-YlFdTVZ-XC6TcMgqkrsrM4E9WEozNw3KgkuJkwpzHfA-E9hFym4LXmVT16YiG~l~vBf8RK7rzOW7rjDPUsKKkulcG4waZv-kVen4zNBoxtaOrF~5D83Kr0sB80xdc4v4HxehcUpo9E6zZwzhNMvLahMU8cQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="113413"><span class="translation_missing" title="translation missing: en.jobs.accountant_woman">Accountant Woman</span></a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8005" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/005/thumb_centered/actor.png?timestamp=1436617426&amp;Expires=1697450053&amp;Signature=Q-ptcIsu38YgoAiLNjHQw~euNVKEb72ugtzqBIoNU-4t2pc4y1oQxeYKJhiFRDxWszJIYM0NZJ9nVUOtQcnzUE~0qV9OTIyVrDK~oUEUHsq5QYD5bnbR2e8OdMJxwlEx0jXBen7nIoS39bdXKljx2YotWy3vHqecJpRIhfVt246RqzOgg-IRK~G1ZV-Vv7qVdTrX6NV3QIgslg6tA5Um05xXOGDh2aL9TCetv-GmTHheYWGlI~K~yrYr5Y3q56D~DXzxXGptebGYZKx~f0Uky2Ox74vPHwfg7A80-Fp2syqg5bsSYkwyBm-0XYKY150S85cuY1r4sQf2x1tARDPSng__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8005">Actor</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8060" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/060/thumb_centered/actor_bw.png?timestamp=1443024232&amp;Expires=1697450053&amp;Signature=jn3U~LVI-uyD9clCE81Ip3FGYKn9rC75UHG8r7KPt61D3PJ4v9HGlcSng1re5iTjLokmY8qnUY2BSRiXUSywQhl9rew34f~YDJAk37DZ0h9fNueI49PWEwaeqy53UqsaVzXKACnvcNpajdU96uKBkfxsXVgTqP51gDaPNvVZ7D6TJdqVKayOOl9LpEzOZSZCGkSTQ-cxB4SixiyFfscL84Mhe-6SECtdLi7zaRkFFSruFy53scioCwqjlLbhBQRdLpWrDOSbW~Bah01UdMXk~zwgYMwhDjcOqTOomT3Mf5s6-7w2tOCVsmXrKEe8aKW6dvZseTJBdNfH1hAMKNVD7g__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8060">Actor B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="113414" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/113/414/thumb_centered/actress.png?timestamp=1472480304&amp;Expires=1697450053&amp;Signature=Wf22MkpNjgy9UGFSvKtOb6ARo6CW1WbFuBO~2pa-rT8bynsyqfAV2jUoasf~oc60v7624N3M6B5cr6b~rvfwVBTG7onF3Y40wGxGUC5nkU0e-SyBjnBR63gI6PBEba1~C9VQqLW8nUwHoktjNVQW-3836bygIOQW3jLtnX3nVSA7j5aZ8IlwQzQYhNgBPryWBFbTJHzzdrWdJZ1jwyk62XPG8bOGehO1ZS6pgvtKQN7T7T5HwUtGbeKaV7aoVtRkLOvrg1h57aTFgSbypXcn~zO4FR6mzuPwnMl44F56AkJPX3RFBgdT2DygNj6sV6HTTDJaN5HTmAPiVGH19~Wm1A__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="113414"><span class="translation_missing" title="translation missing: en.jobs.actress">Actress</span></a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8006" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/006/thumb_centered/agent.png?timestamp=1436617426&amp;Expires=1697450053&amp;Signature=kikZTXis-5ZjkNmyf4f~tdSmJtNpepKPp95oP4bTcSEOD8SxCu7XAFsKBPbIXvdJnROIjO0abxBEFJxEOSz9c7F86OcOpQv8raOBhISwXnyy0LdZw3m~aIC1mroAWkwINBD8AGfbKIwnmssiliXGSSqQb0IOt4PGGPsS7Th4wGOrskOCwvNFdftRACbR2p9v7l~bFRIKar~k82sB0Jwq3X8Rz5JxYqSuK-GjdRW6rOPk3xL-qjMvppFOunU8RXxmfwKshAu5VkIKMB9NwX6gRSmibEUopr-F9MwX0QAB6XGgLsM7k0jZagy52V86~vxKBkoH8h~5QOcxH77XtX5mbg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8006">Agent</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8061" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/061/thumb_centered/agent_bw.png?timestamp=1443024233&amp;Expires=1697450053&amp;Signature=ASa2pBl2xnQwJhPiPut0xfdVthG3XT~Xd0RhFpz6giFcJRTWTFkW~d9zpw25W1IGn2-bnmNRU2OfKkjnfRerAANZ5R22Kfk4ZPBV~x3PpmEKSuSVM1F93G1rDJvY9bkyQMBFnHTIayFC7T1oerDPaz~~eZA6BHTWf33drSaSjyeMz0MwiOg~361Fk6OF9x6Nzk5Ok-YvB9OglPoWAySm14BVMGWHrrDw6J-3Eki9jRohDhGoJISUFctHy6gXOy6iTwLhV-vqTIMYMA6X0wzEN8tWodkz6nl9UvdjikCDpaJT1YHSLejH5I6bSsDxqg~zYDhvpacQJq34xBaNiFBDeQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8061">Agent B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8007" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/007/thumb_centered/analyst.png?timestamp=1436617427&amp;Expires=1697450053&amp;Signature=WjB3yWF7FzzczJQivzdrXe511olvJzbKXAeSqHIUVkt9xNF-4VnMhx8mKe2McdQQtLfn8Ml6F2soMb7LVoQ4NSOIbSJz8JWV3oJtCDBH3qHZG4z2JH0oz9-fH37OfqweEPQEeYUp~nghgOydEc9Vvzzk7IKX-ee12bK7Dx9Tj0ipBwEWR2P3MFB5n4dxG7aSGuaqisehozulQlw3twOyCOsME5eRjybXauVORtTAD235c35a99uXVdh~ZMlNfO5M2oWVq9ZMYf4tMczTNVVYcYyDDLEn8gCayyPOqNj9Q0eNEX6z9soV54IO1dvU3Pzq8-JGLuFWe2kxrzvvKxj6tA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8007">Analyst</a>
				</div>
				
	
			
	</div>
	
</div>
	</div>

	<div class="tab-pane" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
		<div id="jobs_list">
			
	<br>

	<div class="row text-end">	
			
		<div class="col">
			Filter by Color

			<a class="text-decoration-none mx-1" title="All" data-remote="true" href="/logos?category=JOBS">
				<img class="" style="position: relative; top: -2px;" src="https://images.invoicehome.com/all-colors-selected.png" width="18" height="18" />
</a>

				<a class="text-decoration-none mx-1" title="Black &amp; White" data-remote="true" href="/logos?category=JOBS&amp;color_id=7">
					<i class="fa fa-circle fa-lg" style="color: black"></i>
</a>

				<a class="text-decoration-none mx-1" title="Red" data-remote="true" href="/logos?category=JOBS&amp;color_id=1">
					<i class="fa fa-circle fa-lg" style="color: rgb(204,61,59)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Beige" data-remote="true" href="/logos?category=JOBS&amp;color_id=8">
					<i class="fa fa-circle fa-lg" style="color: rgb(226,144,0)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Yellow" data-remote="true" href="/logos?category=JOBS&amp;color_id=5">
					<i class="fa fa-circle fa-lg" style="color: rgb(253, 205,0)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Orange" data-remote="true" href="/logos?category=JOBS&amp;color_id=6">
					<i class="fa fa-circle fa-lg" style="color: rgb(255,128,53)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Blue" data-remote="true" href="/logos?category=JOBS&amp;color_id=2">
					<i class="fa fa-circle fa-lg" style="color: rgb(54,116,197)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Light Blue" data-remote="true" href="/logos?category=JOBS&amp;color_id=3">
					<i class="fa fa-circle fa-lg" style="color: rgb(79,178,218)"></i>
</a>

				<a class="text-decoration-none mx-1" title="Green" data-remote="true" href="/logos?category=JOBS&amp;color_id=4">
					<i class="fa fa-circle fa-lg" style="color: rgb(80,175,58)"></i>
</a>
		</div>
				
	</div>

	<div class="justify-content-center pagination m-3">
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?category=JOBS&amp;goal=form_start&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">

		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25275" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/275/thumb_centered/accountant.png?timestamp=1450354638&amp;Expires=1697450053&amp;Signature=Sf-n6b4zAGaniis7KCqn-lsUn6qCslIL0LdttuBadxan1FX7oROYX8hUONnMoTyyxuWQI2FvxHejQgq6uXnyFuHrBGA73UuJAwA2oe~FvSRGsmbc2KaeUHkrL5bD3N2WKRzwct4cH6TtDucxDQfeHrEhNHxCNHRjxU0RQHHYPjFexz~8J3HDPm~XpsuMst1ebr~--NHcNZlfCFyKxepCz-1MfALhJriGyaisPMNCwqbE5eRvo91OGm-DhbBENExoF1AZrKfLp3wbfZblEazGM7SBjqTFGAvNjLnNhh~t4SaFIWLAneVx0te9tGjZ-331KxUeOgKzmW82zSlHdzyTwQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25275">Accountant</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25274" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/274/thumb_centered/actor.png?timestamp=1450354656&amp;Expires=1697450053&amp;Signature=d6ffH9u-pDHn4SUKuJpQTx-XIEkk6zNhoHkFLPnla7T489ncl-dzeJcBA4Lnf~1eSX2Ixdt48mzTzE91A9r0aRlfhQwLr~qnVuBCRU87F6K7W-AA7NOf543awv0Wf4iNHJxbU5G1W-LDZadFLhqWa7L-UU1qXvSdvEWd3hyTynvGoe8Z2x5oK3NuL1nE7RzUhoRSL87jyimAFR7MC8umJaV4zmCFpDFahtCo8Jg9LkVi-T2SbFmtd1Bd50ZVxdMRYmii0wv4zTN50fXmbGrc0LqJlyiiBFF5ATgm67u50QxBz9CeaZWVcEhxVXwP~nXkcb-uwpJ2qWk1xzY1xfirkw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25274">Actor</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25273" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/273/thumb_centered/agent.png?timestamp=1450354678&amp;Expires=1697450053&amp;Signature=cFtE7C0~cjppt7CsjGB~HyFJf1hoqL4cQkVIG0rAEFSIpo5AV8D-EBxg6zF89Eov3bQvvwBLYIEc6jI5zXvh8AlL1f8ruiV7Q3Yhqw2fwfQjh5kg8e20OyE5DZvX9NSDXk2v1RvlgPGikQDZUW1doyL8zsGTFCOtx7sOwrr-QSYZ-kvIq41r8OMyfqDptpM0uywAXR0e2Fb1gS8oKJRf1hij1Jl9YS-10LL8HuO1X-Wc5oL5MVLszOOi5J9otdmZE0bEEoNMWLkbJNFAEg99D12~NjCLMfzkUoYbNLuXdMhWF01dZ4shS-gCKRKLt4rpOcCwzrYk-nP8ikPaXdywfQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25273">Agent</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25272" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/272/thumb_centered/analyst.png?timestamp=1450354697&amp;Expires=1697450053&amp;Signature=Rk2Z2ejdK-huj91uZGRBO3vkCQveYRkEi-4JHXFobDcHz3p2vcSI3gvsb-1bL4dnmNW6uq0sBewLPP0i2bsGxzo1~7UlVQS2HmIUF9ADBtWpT4ZfJFYs8Ivt-sbLeHcFsKsx9ZAsW8LzVlzRlIBNWU0RByAihhs2jbBw2gwgfBsecfmk2gfrRhXi4EZ7ax7HDzb4fWpxgHVGYCfcoek~dpdPM-3Zz1r2A6dOMenXHFEU4~yS2kToDRLb-P0xVDnCYwvgjYGScqlVPLR6Sz77os5NICXvZn5Rp6YEakfa6E8agFHnABO5JMURyHTobiGIJvq1keo8CbGcoyatH1G3ew__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25272">Analyst</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25271" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/271/thumb_centered/architect.png?timestamp=1450354716&amp;Expires=1697450053&amp;Signature=cv9agnDfIjNyCNnT~O40u8uUJ~fQGvzEbIF0V2Y9KqZbPNbAzC~W~Z7SWQPbQUDDYqtithSN23uPNsUM~S4B-fhFfeeJ9693-XsKsLGYfMKbtRjFHZFOhQ~h-FPa7NSHZ1F-2C14-KLbaw~F0ZGt3g0lWDqR0jpG8y3NgnowZw0uccMdypiApVj7ZCi-~1unq1W8rb2PeQkjOBmiEtwZZVTJcWFBKUnsjp0JLkfp1KHnX8qoShx4wMIwr~BgFYsmyZLUFRQSKGCyFGQ1JWRhFr17dZcfL0Tyw8Qwp4RvwWQxJTfRNPaN6xmO7o1j4tBJg7Y3FCJTjiRVmFKMSOP1Aw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25271">Architect</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25270" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/270/thumb_centered/babysitting.png?timestamp=1450354733&amp;Expires=1697450053&amp;Signature=JtUr0WFgI527wdpA2RfstOet-Sb3tfa9C7ZtspWVYbRoC9y~in5GUDeYps0tUbjzpXs1SrLFisZu5s0gpNEA55LVXGW5gvLrkJ6lxNDXJqUirgiyQl0Hcqu1a0dnvI7W5jgXHbHB1ynUYCzb4XkTScSSiPBJdyexovD32lMOxZ~1PTU~-ut52Lpk8lMdmAMy4JLJsBQVJKStbxBFR8rQyVcsPwTFxw1F2fyxMRGVYY0QvCnBqwWzdcBIDceGi8JQavFS5T~0KsgTw8seqmDpTLHVT0mmaqRCjaWyGk05pmGFb9lztofzNKmlEzXJ0cGhQF-xMe8MDrdjEdDR37VNWg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25270">Babysitting</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25269" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/269/thumb_centered/babysitting-2.png?timestamp=1450354751&amp;Expires=1697450053&amp;Signature=UDTzx1Ztgy-pE0dQcoEYtuPuTBHLLpyPJRGWv9oYnK-z1kEyTagCwV2Kvj-zAxhDXu05NsyWsQ5eBCTNkf1HuATPnEj-56he3eBNAjB2DwbMEpj7bm8VcE4yiJAkDPC4juhL1uSC4bDfEiS75z485~40uHbsw~vBJXhw8HN5nMxifkFts-9ESFljGujtOyZBsTuZhyfVHHCUwMEUWA8Fvs~xEPfdRTSIvI1rkJgSHHbKIgItI6CmAGaWzewYCzHpvesDZKR2kQG2lGv8PIQS9gT6uHxA0lhk7~n9J4o7N6lqmIh4nIELlZQ2gy57CiBDMuescCc2BFnAgPA4obqWEQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25269">Babysitting</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25268" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/268/thumb_centered/baker.png?timestamp=1450354765&amp;Expires=1697450053&amp;Signature=GGhgtzHs3ZVIrlBng13DxGlxs0~uuVSkoblZ7jqR7IsSAlChVSe28n3tYar5fgd2FVljz3ts8FOW4nEAmIH52gvfdDciLCi654L2ZIz-qRFFOKVhrF~tNW7OSnyPsQbszgmJS-N8jhB3aUJs8ofTdM20XHUxqFf3b~MDDP6nRnbkeQDe5ch7LCgigNHo6UYQ7ksNsf-E9snXWOLjDSpYe40XVeZd~jWBQ1593x8n20DkOUf2iVeA0vPuhz0YxYoPya5K8NY8Q6S5IxcYwdjqjEmSnp2naNhOQwMuMj~vSRa6gyuJD-dGWGweOC0uJzM96Tam6C2McouO0TT~IjJw9A__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25268">Baker</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25209" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/209/thumb_centered/baker-2.png?timestamp=1450355655&amp;Expires=1697450053&amp;Signature=a0NDs9dEOAjy72v4JsYcURbcJ1zQM-79fC5c0fkaCmezVDCbxl8dkER3am-HNNwy~ZiBMhXgU3LDquqByjO9bFg346WcFUN9uvjAOQtBU6qAHL6HdKnufBxC5FjHqjtER3Co0kK48iS4ZSaUWKVU-L0Hw~vFeQox0oCRAKXlDpDEcOgBgkmi3dPdsVEpAQO5AwC3~6eKd0T7SKanxNhQCkBmFKZrEKZzauWH7vnzykqiLjT8mV~rgTne6qCpEliDzM2n4zjWjr5qoX~lQFUXKyS5W1rRWRN22sBNzHmg0vdULGqgtuYn0Uaygs9~gIEuSl24p4EFeDNRwQH5NMd~8w__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25209">Baker</a>
				</div>
				

			
	</div>

</div>
	</div>

	<div class="tab-pane " id="your_logo" role="tabpanel" aria-labelledby="your-logo-tab">
		<div id="your_logo_list">

	<br>



	
<div id='new_logo_form'>

	<div class="row text-center my-3" id="spinner" style="display: none;">
		<div class="col">
			<i class="fa fa-spinner fa-spin fa-2x blue"></i>
		</div>
	</div>

	
	<div id="logo-div row">

		<div class="col">

			<form class="new_logo" id="new_logo" enctype="multipart/form-data" action="/logos" accept-charset="UTF-8" data-remote="true" method="post">
				
				<input type="hidden" name="invoice_id" id="invoice_id" value="115134380" autocomplete="off" />


				<label for="logo_file" class="form-label">Select Your Logo File</label>
				<input class="form-control form-control-sm" type="file" name="logo[file]" id="logo_file" />
				<div class="form-text">Your logo must be a GIF, JPG or PNG image, and a maximum of 5 MB in size.</div>

</form>		</div>

	</div>


</div>


</div>

	</div>

</div>

			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<input type="hidden" name="choose-last-logo" id="choose-last-logo" value="" autocomplete="off" />

<div class="modal" tabindex="-1" id="signatureModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<div class="modal-header">
				<h6 class="modal-title">Select Signature</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<div class="modal-body">
				<ul class="nav nav-tabs" role="tablist">

  <li class="nav-item" role="presentation">
    <a class="nav-link active" href="#your_signatures" aria-controls="your_signatures" role="tab" aria-selected="true"><i class="fas fa-fw fa-signature blue me-1"></i>Your Signature</a>
  </li>

</ul>

<div class="tab-content">

	<div role="tabpanel" class="tab-pane active" id="your_signatures">
		<div id="your_signatures_list">

	<br>



	
<div id='new_signature_form'>

	<div class="row text-center my-3" id="signatureSpinner" style="display: none;">
		<div class="col">
			<i class="fa fa-spinner fa-spin fa-2x blue"></i>
		</div>
	</div>

	
	<div id="signature-div row">

		<div class="col">

			<form class="new_signature" id="new_signature" enctype="multipart/form-data" action="/signatures" accept-charset="UTF-8" data-remote="true" method="post">
				
				<input type="hidden" name="invoice_id" value="115134380" autocomplete="off" />


				<label for="signature_file" class="form-label">Select Your Signature File</label>
				<input class="form-control form-control-sm" type="file" name="signature[file]" id="signature_file" />
				<div class="form-text">Your signature must be a GIF, JPG or PNG image, and a maximum of 5 MB in size.</div>
				<div class="form-text">For best results, upload a bold signature on a solid white background.</div>

</form>
		</div>

	</div>

</div>


</div>

	</div>

</div>

			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<input type="hidden" name="choose-last-signature" id="choose-last-signature" value="" autocomplete="off" />



<div class="modal" tabindex="-1" id="currencies-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h6 class="modal-title">Change Currency &amp; Formatting</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<div class="modal-body">
				<div id="currencies-index">

	<div class="row m-1">

		<div class="col form-group">
			<label for="currency" class="form-label">Currency</label>
			<select name="currency" id="currency" class="form-select form-select-sm"><option value="AED">AED</option>
<option value="AFN">AFN</option>
<option value="ALL">ALL</option>
<option value="AMD">AMD</option>
<option value="ANG">ANG</option>
<option value="AOA">AOA</option>
<option value="ARS">ARS</option>
<option value="AUD">AUD</option>
<option value="AWG">AWG</option>
<option value="AZN">AZN</option>
<option value="BAM">BAM</option>
<option value="BBD">BBD</option>
<option value="BDT">BDT</option>
<option value="BGN">BGN</option>
<option value="BHD">BHD</option>
<option value="BIF">BIF</option>
<option value="BMD">BMD</option>
<option value="BND">BND</option>
<option value="BOB">BOB</option>
<option value="BRL">BRL</option>
<option value="BSD">BSD</option>
<option value="BTN">BTN</option>
<option value="BWP">BWP</option>
<option value="BYR">BYR</option>
<option value="BZD">BZD</option>
<option value="CAD">CAD</option>
<option value="CDF">CDF</option>
<option value="CHF">CHF</option>
<option value="CLP">CLP</option>
<option value="CNH">CNH</option>
<option value="CNY">CNY</option>
<option value="COP">COP</option>
<option value="CRC">CRC</option>
<option value="CUP">CUP</option>
<option value="CVE">CVE</option>
<option value="CZK">CZK</option>
<option value="DJF">DJF</option>
<option value="DKK">DKK</option>
<option value="DOP">DOP</option>
<option value="DZD">DZD</option>
<option value="EGP">EGP</option>
<option value="ERN">ERN</option>
<option value="ETB">ETB</option>
<option value="EUR">EUR</option>
<option value="FJD">FJD</option>
<option value="FKP">FKP</option>
<option value="GBP">GBP</option>
<option value="GEL">GEL</option>
<option value="GGP">GGP</option>
<option value="GHS">GHS</option>
<option value="GIP">GIP</option>
<option value="GMD">GMD</option>
<option value="GNF">GNF</option>
<option value="GTQ">GTQ</option>
<option value="GYD">GYD</option>
<option value="HKD">HKD</option>
<option value="HNL">HNL</option>
<option value="HRK">HRK</option>
<option value="HTG">HTG</option>
<option value="HUF">HUF</option>
<option value="IDR">IDR</option>
<option value="ILS">ILS</option>
<option value="IMP">IMP</option>
<option value="INR">INR</option>
<option value="IQD">IQD</option>
<option value="IRR">IRR</option>
<option value="ISK">ISK</option>
<option value="JEP">JEP</option>
<option value="JMD">JMD</option>
<option value="JOD">JOD</option>
<option value="JPY">JPY</option>
<option value="KES">KES</option>
<option value="KGS">KGS</option>
<option value="KHR">KHR</option>
<option value="KMF">KMF</option>
<option value="KPW">KPW</option>
<option value="KRW">KRW</option>
<option value="KWD">KWD</option>
<option value="KYD">KYD</option>
<option value="KZT">KZT</option>
<option value="LAK">LAK</option>
<option value="LBP">LBP</option>
<option value="LKR">LKR</option>
<option value="LRD">LRD</option>
<option value="LSL">LSL</option>
<option value="LTL">LTL</option>
<option value="LVL">LVL</option>
<option value="LYD">LYD</option>
<option value="MAD">MAD</option>
<option value="MDL">MDL</option>
<option value="MGA">MGA</option>
<option value="MKD">MKD</option>
<option value="MMK">MMK</option>
<option value="MNK">MNK</option>
<option value="MNT">MNT</option>
<option value="MOP">MOP</option>
<option value="MRO">MRO</option>
<option value="MUR">MUR</option>
<option value="MVR">MVR</option>
<option value="MWK">MWK</option>
<option value="MXN">MXN</option>
<option value="MYR">MYR</option>
<option value="MZN">MZN</option>
<option value="NAD">NAD</option>
<option selected="selected" value="NGN">NGN</option>
<option value="NIO">NIO</option>
<option value="NOK">NOK</option>
<option value="NPR">NPR</option>
<option value="NZD">NZD</option>
<option value="OMR">OMR</option>
<option value="PAB">PAB</option>
<option value="PEN">PEN</option>
<option value="PGK">PGK</option>
<option value="PHP">PHP</option>
<option value="PKR">PKR</option>
<option value="PLN">PLN</option>
<option value="PRB">PRB</option>
<option value="PYG">PYG</option>
<option value="QAR">QAR</option>
<option value="RMB">RMB</option>
<option value="RON">RON</option>
<option value="RSD">RSD</option>
<option value="RUB">RUB</option>
<option value="RWF">RWF</option>
<option value="SAR">SAR</option>
<option value="SBD">SBD</option>
<option value="SCR">SCR</option>
<option value="SDG">SDG</option>
<option value="SEK">SEK</option>
<option value="SGD">SGD</option>
<option value="SHP">SHP</option>
<option value="SLL">SLL</option>
<option value="SOS">SOS</option>
<option value="SRD">SRD</option>
<option value="SSP">SSP</option>
<option value="STD">STD</option>
<option value="STN">STN</option>
<option value="SVC">SVC</option>
<option value="SYP">SYP</option>
<option value="SZL">SZL</option>
<option value="THB">THB</option>
<option value="TJS">TJS</option>
<option value="TMT">TMT</option>
<option value="TND">TND</option>
<option value="TOP">TOP</option>
<option value="TRY">TRY</option>
<option value="TTD">TTD</option>
<option value="TVD">TVD</option>
<option value="TWD">TWD</option>
<option value="TZS">TZS</option>
<option value="UAH">UAH</option>
<option value="UGX">UGX</option>
<option value="USD">USD</option>
<option value="UYU">UYU</option>
<option value="UZS">UZS</option>
<option value="VEF">VEF</option>
<option value="VES">VES</option>
<option value="VND">VND</option>
<option value="VUV">VUV</option>
<option value="WST">WST</option>
<option value="XAF">XAF</option>
<option value="XCD">XCD</option>
<option value="XOF">XOF</option>
<option value="XPF">XPF</option>
<option value="YER">YER</option>
<option value="ZAR">ZAR</option>
<option value="ZMK">ZMK</option>
<option value="ZMW">ZMW</option>
<option value="ZWD">ZWD</option>
<option value="ZWL">ZWL</option></select>
		</div>
		
		<div class="col form-group text-end">
			<label for="currency" class="form-label">Currency Formatting</label>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s %n">
						<strong>₦ 0.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%n %s">
						<strong>0.00 ₦</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s%n">
						<strong>₦0.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s%n %c">
						<strong>₦0.00 NGN</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%n %c">
						<strong>0.00 NGN</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%c %n">
						<strong>NGN 0.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s %n %c">
						<strong>₦ 0.00 NGN</strong>
					</span>
				</div>
		</div>
		
	</div>
	
</div>

			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>



<div class="modal" tabindex="-1" id="footer-label-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h6 class="modal-title">Edit Footer Label</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			
			<div class="modal-body">
				
				<form class="row m-2" id="footer-label-form" action="/invoices/115134380/update_footer_label" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off" /><input type="hidden" name="authenticity_token" value="-fMAlqwdN9h5bzHoV-oDnHsC_FCR67ys7i6J4Q082qDFIFxmbevh58D-ogv3trxrRle8VYCukxK8qZIJcKuY6w" autocomplete="off" />

					<div class="col-8">
						<div class="form-group">
							<input class="form-control" placeholder="New Footer Label" maxlength="80" size="80" type="text" name="invoice[footer_label]" id="invoice_footer_label" />
						</div>
					</div>

					<div class="col">
						<button type="submit" class="btn btn-primary">Update Label</button>
					</div>

					<div class="col-12 mt-4">
						<button type="submit" class="btn btn-link p-0 btn-sm" name="reset_footer_label">Reset to default &quot;Terms &amp; Conditions&quot;</button>
					</div>
					
					<div class="col-12 mt-2">
						<button type="submit" class="btn btn-link p-0 btn-sm" name="hide_footer_label">Hide label (label won&#39;t be displayed)</button>
					</div>

</form>

	
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>



        
        
    </div>

    <br>

    <div class="row">

	  
		<div class="col">
			<a id="done-with-signup" class="btn btn-primary done w-100">
				<i class="fa fa-fw fa-save"></i>
				Save Invoice, Print or Send via Email
				
				

				
				
				

				
				
				
				
				
				
				
			</a>
		</div>
		
	
</div>



    
<div class="modal guest-modal fade text-center yellow-modal" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center justify-content-center">
                <h4 class="modal-title fs-6 mx-auto" id="signup-modal-label">

                    To print, download or send your invoice, we have to save it first.<br/>Please Sign Up For Free.
                    
                    
                    
                    

                    
                    
                    
                    
                    

                    
                    

                </h4>
            </div>
            <div class="modal-body container">

                <form class="mt-0 mb-3 mx-auto col-md-7 col-lg-6 justify-content-center" id="new_user" action="/users" accept-charset="UTF-8" data-remote="true" method="post">

                    <div class="form-group">
                        <label class="text-center form-label pb-2">Please enter your email address below</label><br />
                        <input class="form-control mb-4" placeholder="your@email.com" type="text" name="user[email]" id="user_email" />
                    </div>

                    <div class="text-center">


                        
			<script>
				function verifyCaptcha(e) {

					e.preventDefault();
					document.getElementById("recaptcha-submit-button").disabled = true;

					grecaptcha.enterprise.ready(function() {
						grecaptcha.enterprise.execute('6Lcs57gkAAAAAHMrbzp6CdgZtfZizW03UnSZpxyb', {action: 'signup'}).then(function(token) {
							document.getElementById("recaptcha-token").value = token;
							$("#new_user").trigger('submit.rails');
						});
					});
				}
			</script>

			<input name="recaptcha_token" type="hidden" id="recaptcha-token"/>
			<button class="btn btn-primary w-100 " id="recaptcha-submit-button" onclick="verifyCaptcha(event)" data-disable-with="Continue To Your Invoice">Continue To Your Invoice</button>
		
                        
                    </div>

</form>
                

                <a class="text-secondary fw-bold" href="/signin">Have an account already? Sign in here.</a>

                <div class="mb-3">
                    <div class="row p-3">
    <div class="mx-auto">
        <hr>
    </div>
</div>

<div class="text-center">
    <p class="fw-bold pb-2">Or sign in with services you already have:</p>

    <div class="mb-1">
        

<div class="row pt-1 justify-content-center gy-4 gx-3">

	<div class="col-auto gy-3 pt-1" style="width: 198px">
		<a rel="nofollow" data-method="post" href="/auth/google"><img style="max-width: 100%" id="btn-google" src="https://acme.invoicehome.com/assets/btn_google_signin_dark_normal_web@2x-bf439967c2cc9cfd75dabf9ca8f0d0fc4adeaf07da73d6634a2c3825e8bbb247.png" /></a>
	</div>

	<div class="col-auto">
		<form class="d-inline-block" method="post" action="/auth/facebook"><input class="btn nolink btn-facebook text-white shadow" rel="nofollow" type="submit" value="Facebook" /><input type="hidden" name="authenticity_token" value="_f0xl7pVM2ZHK7AXwqo7a_DIU4IZobU-Yt0UzC5cUcvsJUywoentjfjgPgvsQiN9JY6HTcpSXUfdUilG-YD7hQ" autocomplete="off" /></form>
	</div>

	<div class="col-auto">
		<form class="d-inline-block" method="post" action="/auth/windowslive"><input class="btn nolink btn-live text-white shadow" rel="nofollow" type="submit" value="Windows Live" /><input type="hidden" name="authenticity_token" value="hnk99yIU4Na_zR1zbgP155dfMu_meVvLdxtkxPQeQP_47SZlhPPC9-upXlCvwqB4jxSgnE_B0xnS2IOIiXOvng" autocomplete="off" /></form>
	</div>

	<div class="col-auto">
		<form class="d-inline-block" method="post" action="/auth/yahoo_auth"><input class="btn nolink btn-yahoo text-white shadow" rel="nofollow" type="submit" value="Yahoo" /><input type="hidden" name="authenticity_token" value="hzK7MNw4NVrdZqoOiQ2kBeWnPCN6JqsbNJ-ZTYOZO4zv-v8K0Cioyrx1I1Vz9xei7Cnhz8waQz_nv8qKqnFliw" autocomplete="off" /></form>
	</div>

</div>

    </div>

</div>

                </div>

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->






					</div>

                    <div class="text-center my-5">
                        <h1 class="fs-3">Select a Template</h1>
                        <h2 class="text-secondary fs-5"><a id="done-with-more-invoice-templates">More templates inside!</a></h2>
                    </div>

                    <div class="row mb-3" id="new-invoice-templates">



		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=165">

					<span class="" style="position: absolute; top: 50%; left: 50%; width: 40px; height: 40px; margin-left: -20px; margin-top: -20px"><i class="fa fa-circle fa-3x" style="color: white;"></i></span>
					<span class="" style="position: absolute; top: 50%; left: 50%; width: 40px; height: 40px; margin-left: -20px; margin-top: -20px"><i class="green fa fa-check-circle fa-3x"></i></span>


				<img alt="Invoice Template En Neat " class="shadow img-fluid p-0" title="Invoice Template En Neat " src="https://templates.invoicehome.com/invoice-template-en-neat-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=1">



				<img alt="Invoice Template En Classic White " class="shadow img-fluid p-0" title="Invoice Template En Classic White " src="https://templates.invoicehome.com/invoice-template-en-classic-white-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=88">



				<img alt="Invoice Template En Band Blue " class="shadow img-fluid p-0" title="Invoice Template En Band Blue " src="https://templates.invoicehome.com/invoice-template-en-band-blue-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=164">



				<img alt="Invoice Template En Military Orange " class="shadow img-fluid p-0" title="Invoice Template En Military Orange " src="https://templates.invoicehome.com/invoice-template-en-military-orange-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=176">



				<img alt="Invoice Template En Flag Of Nigeria " class="shadow img-fluid p-0" title="Invoice Template En Flag Of Nigeria " src="https://templates.invoicehome.com/invoice-template-en-flag-of-nigeria-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=3">



				<img alt="Invoice Template En Modern Red " class="shadow img-fluid p-0" title="Invoice Template En Modern Red " src="https://templates.invoicehome.com/invoice-template-en-modern-red-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=206">



				<img alt="Invoice Template En Cool Waves " class="shadow img-fluid p-0" title="Invoice Template En Cool Waves " src="https://templates.invoicehome.com/invoice-template-en-cool-waves-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=297">



				<img alt="Invoice Template En Dexter " class="shadow img-fluid p-0" title="Invoice Template En Dexter " src="https://templates.invoicehome.com/invoice-template-en-dexter-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=87">



				<img alt="Invoice Template En Mono Black " class="shadow img-fluid p-0" title="Invoice Template En Mono Black " src="https://templates.invoicehome.com/invoice-template-en-mono-black-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=39">



				<img alt="Invoice Template En Oldie " class="shadow img-fluid p-0" title="Invoice Template En Oldie " src="https://templates.invoicehome.com/invoice-template-en-oldie-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=4">



				<img alt="Invoice Template En Classic Blue " class="shadow img-fluid p-0" title="Invoice Template En Classic Blue " src="https://templates.invoicehome.com/invoice-template-en-classic-blue-750px.png" width="360" height="510" />

</a>
		</div>


		<div class="col-2 p-2 position-relative">


			<a data-remote="true" href="/invoices/115134380/change_template_on_new?invoice_template_id=215">



				<img alt="Invoice Template En Connect Rbw " class="shadow img-fluid p-0" title="Invoice Template En Connect Rbw " src="https://templates.invoicehome.com/invoice-template-en-connect-rbw-750px.png" width="360" height="510" />

</a>
		</div>


</div>

					<footer class="my-5">
  <div class="row text-center">
    <div class="col">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="/" title="Home" class="btn-link text-muted lh-lg">Home</a>
        </li>

          <li class="list-inline-item">
            <a href="/templates/invoice" title="Invoice Templates" class="btn-link text-muted lh-lg">Invoice Templates</a>
          </li>

        <li class="list-inline-item">
          <a href="/features" title="Features" class="btn-link text-muted lh-lg">Features</a>
        </li>

          <li class="list-inline-item">
            <a href="/signin" title="Sign In" class="btn-link text-muted lh-lg">Sign In</a>
          </li>
          <li class="list-inline-item">
            <a href="/signup" title="Sign Up" class="btn-link text-muted lh-lg">Sign Up</a>
          </li>

        <li class="list-inline-item">
          <a href="/terms" title="Terms" rel='nofollow' class="btn-link text-muted lh-lg">Terms</a>
        </li>

        <li class="list-inline-item">
          <a href="/sitemap" title="Sitemap" class="btn-link text-muted lh-lg">Sitemap</a>
        </li>

        <li class="list-inline-item">
          <a href="/privacy" title="Privacy" rel='nofollow' class="btn-link text-muted lh-lg">Privacy</a>
        </li>


        <li class="list-inline-item">
          <a href="/faq" title="FAQ" class="btn-link text-muted lh-lg">FAQ</a>
        </li>

        <li class="list-inline-item">
          <a href="/contact" title="Contact Us" class="btn-link text-muted lh-lg">Contact Us</a>
        </li>

        <li class="list-inline-item">
          <a href="https://www.facebook.com/invoicehome" title="Facebook" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">Facebook</a>
        </li>

        <li class="list-inline-item">
          <a href="https://twitter.com/InvoiceHome" title="Twitter" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">Twitter</a>
        </li>

        <li class="list-inline-item">
          <a href="https://www.youtube.com/channel/UCe2AUob8Lw3yvKFC7TjFBzg" title="YouTube" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">YouTube</a>
        </li>

        <li class="list-inline-item">
          <a href="https://www.pinterest.com/invoicehome" title="Pinterest" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">Pinterest</a>
        </li>

        <li class="list-inline-item">
          <a href="https://www.instagram.com/invoice_home" title="Instagram" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">Instagram</a>
        </li>

        <li class="list-inline-item">
          <a href="https://www.linkedin.com/company/invoice-home" title="LinkedIn" target="_blank" rel="noreferrer" class="btn-link text-muted lh-lg">LinkedIn</a>
        </li>

        <li class="list-inline-item">
          <a href="/blog" title="Blog" class="btn-link text-muted lh-lg">Blog</a>
        </li>

        <li class="list-inline-item">
          <a href="/about-us" title="About Us" class="btn-link text-muted lh-lg">About Us</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="row text-center">
    <div class="col">
      
<div class="row text-center" style="padding: 1em 0;">
  <div class="col-md-12">
    <a href='https://play.google.com/store/apps/details?id=com.invoicehome.invoicehome&utm_source=mailing&utm_medium=email&utm_campaign=report&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt="Get it on Google Play" title="Get it on Google Play" src="https://images.invoicehome.com/googleplay.en.png" width="162" height="63" /></a>
    <a target="_blank" href="https://itunes.apple.com/app/pdf-invoice-maker-estimates/id1435778692?mt=8"><img alt="Download on the App Store" title="Download on the App Store" src="https://images.invoicehome.com/appstore.en.png" width="131" height="44" /></a>
       
  </div>
</div>

      <img alt="NG" src="https://images.invoicehome.com/flags/flags-iso/flat/64/NG.png" width="32" height="32" />&nbsp;&nbsp;Nigeria&nbsp;&nbsp;·&nbsp;&nbsp;Copyright © 2023&nbsp;&nbsp;·&nbsp;&nbsp;Invoice Home Inc.

    </div>
  </div>

    <div class="row text-center mt-2">
      <div class="col">
        AK / 
      </div>
    </div>

</footer>


				</div>

			</div>


		</div>

		<script src="https://acme.invoicehome.com/assets/application-5822449f51a8d1402d771490fa3a92e17554060a67437db76c823887cac45f6a.js"></script>

		<script src="https://js.stripe.com/v3/"></script>

	</body>

</html>