
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
                <meta name="csrf-token" content="mm0xIL6popU7_6BXFw9Rmf5kfYAorThhvXmWvbkzOd0l7lQvoqzBvT-fiiqXnYmNT7DSkhVqvSU0C0DroZcCQA" />
                        

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
						
					<div class="px-4">
						
    <div class="guest-tabs">
        <ul class="nav nav-tabs">

		
		<li class="nav-item"><a id="change-invoice-type-to-basic" aria-current="page" class="nav-link active">Basic Form</a></li>

	
		<li class="nav-item" style="white-space: nowrap;"><a id="change-invoice-type-to-advanced" aria-current="page" class="nav-link ">Advanced Form - <span class='fw-bold'>Due Date, Ship To, Qty</span></a></li>	



	
</ul>

    </div>

    <div class="p-4 guest-page">
        <form class="edit_invoice" id="invoice-form" action="/invoices/115134380" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off" /><input type="hidden" name="authenticity_token" value="D1OoSndKDG0nrxJo6Hq_v2n58HMmYEJcR4rDrmKiKq2MMMYrcvWRkDdR1RwL89tOyPsqwo81Agy5UiiAJpx82A" autocomplete="off" />

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


		<input type="hidden" name="invoice[logo_id]" id="invoice_logo_id" autocomplete="off" />

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
				<input type="text" name="invoice[items_attributes][0][amount]" id="invoice_items_attributes_0_amount" value="100.0" placeholder="Amount" class="form-control amount form-control-sm" tabindex="212952714" maxlength="100" />
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
			<div class="col-6 col-md-3 text-end fs-6 fw-bold">100.00</div>
		</div>	
		

			
	<div class="row my-4">
		
		<div class="col-6 col-md-3 offset-md-6 fs-5 fw-bold">
				TOTAL <a class='currency-formats show-modal-currency-format text-decoration-dotted' title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="top">NGN&nbsp;<sup style="font-size: 50%; top: -.7em;">Edit</sup></a>
		</div>
		
		<input type="hidden" name="invoice[currency]" id="invoice_currency" value="NGN" autocomplete="off" />
				
		<input type="hidden" name="invoice[currency_format]" id="invoice_currency_format" value="%s %n" autocomplete="off" />
		
		<div class="col-6 col-md-3 text-end fs-5 fw-bold">
					
				<a class='currency-formats show-modal-currency-format dotted text-decoration-dotted' title="Change Currency &amp; Formatting" data-toggle="tooltip" data-placement="left">
					₦ 100.00
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
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?doc_type=INVOICE&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">
	
		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="960" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/960/thumb_centered/Logo_Caffee_Yellow_Handrawn.png?timestamp=1436617985&amp;Expires=1697554773&amp;Signature=OFB2CLZKcfgGil0XjOEXnM8SMvCB2LR5uYLzeN41FRoDFeIzAtDOv-ZKS1GwkL7fx1dFbMcLJFsQ6cEk2C13XkH6crOPBQp840y4UYpyxMdg-NxM8bvhVlPsdX-oBK~52qalnDlBs2mnWWrEjTgz7aun~qjoiP~bTgRkeBdqJZjxbC~ulzDaxW4AZQB8FuRlOTTLOM~c56YozjvgmeW9PesywOs2zKMwU5xCAd6UnosDRQ1UybaWlQzWT-cGxo1y733llgTZa6w7RKL1nqjvouEmWHhe~e4OWWjG6IVNckp~e5S8dhTQ0Kkf~w~Pxo26n5tuw9SPtLPedtrljcVmyQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="960">Coffee Yellow Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="844" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/844/thumb_centered/Logo_handrawn_Gardener_green.png?timestamp=1436617980&amp;Expires=1697554773&amp;Signature=dEKGCu-r4xngMfGdXtWkA9qi-uo0vUh0rftMwShwaJ-0PQht3kuxRNjYnZANRVVddxlilMBGfDJQAFal~JaN1g~taGSudaje2s8TAh5CdXi1kw-gAfKjRRdeLC4hlzT45UQeVOR4-pZH67LjWzhECaEr5U55IwIEJ~WLvBNMKBiFOks9yyRTmlnzcq3nY5mTu1rT4aPzY40QRc28SuZsUXX9~dpfH9Vr7pB~CqLuHJmf7KgFy6BRmj3IZhWYSVnD6bj7wqJKkK1ptkVHKjJ3DhXQ9mkqX-dDGo9GXUaTl19Fn~kKGy09pV4~-LQmRyQ1agBruPvt86NtGUgWq4To7A__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="844">Gardener Green Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="918" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/918/thumb_centered/Logo_handrawn_Healthmedical_red.png?timestamp=1436617954&amp;Expires=1697554773&amp;Signature=iV0BIUP58ONJ4A2FZe7gB7Szk48vtkxJY9gSa4ib6rRBYKiyNH~JI2TDkcflQuDHu0fBgZs~fGzc0PAUnhFqM-JHrHG7vqCzdMaYF~Dz-6MZo0juZET8chooSSE-WV-3t1HMCrsduLuNBEsom2A2fKvGmqW49T5-n~WwrrDe-h4C6GSQdtWvv4Q~r6kuo6AoXNLTQ1oYslHCAeotK3DIhpeZLdGYeefq28ZeM5bDydaqh8i09KMIb5aaMx8CL7onxfKcDfukp3MgS-MjPIVyLTBi57IjjVpUdwHfWK1Fwd-CjJds11l0~0htu7jchTCn~VNxa65cwDe1lKhYscLAbA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="918">Health Red Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="176" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/176/thumb_centered/Logo_HairBeauty_red.png?timestamp=1436617925&amp;Expires=1697554773&amp;Signature=hntpL37Qe2y7xd5tY6y13hQNn8dEIlaQzyY6ajxIV2hq7Ie7By3TbUMZ36lMIaZfYl~pabZyTmy71DhCWnKwZaW-rwV7HhZzFmyPiSvKbepe8NIzPRgeeOfv1LiySxmU2VR084fvD0D6ZEGXGsfQ513yx-9T1IfG~9TUZBUHgTp2~LyD3Dc2F-kjJeFzgCMMdiyht~i4wtQO7ZlROwJ8Db3kDtxYWwKf30FavAoGytZysDvCYy6~BO3zfTdfi7Ticns~W2IvuewlcCLFal1DIkr183c5LJzponGptA-LVOHFys5YLdJk~7eFFs54MwjpG1yL8q3chR~OUuaGwD-puA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="176">Hair Beauty Red</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="876" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/876/thumb_centered/Logo_handrawn_Repair-man_light-blue.png?timestamp=1400510778&amp;Expires=1697554773&amp;Signature=MGOliSK2lKy0w18pmQR~vtn2cpv3UCwmL0FZle3HMDLQOtCzU5sgvTIek5aWR77zGMQu5iz5sB0lcQuKg-xrNXU1lIG3hVmcmFEOHFYmswNRYFPUmiW9MhCgiwRjSanTegL3CCDlQ6DzHfBr0X7bgE4vaWjQThBIN3uManojX~6oCIOP~MpQbVtydCA7MXFw6GJGG4fTjtUrboG3oDcdXpYcsHyQIbgIM9OM2k1og8eOJa6BPHUySxl0P6TTOtVrogoAF6XeTRUItIf2otIcBXlg9iV20SubWVjbNc3MhqkemQHG5XZRhvTLP1GfVuzFw1VSV8FCFMQ6bFUboNjY5w__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="876">Repair Man Light Blue Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="1155" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/001/155/thumb_centered/Logo_Analyst_Green.png?timestamp=1400510778&amp;Expires=1697554773&amp;Signature=ba6MU~v~j53eKLp0ssdbb0IpUXGhQax3WYoSmxDwcLHxVkw5tb0D2r87z7HOlTT6iCgP5Lle-Nfdtb6jqC7UGrTWOX6x5jvoUktTJUz9inE0UNxR8FfnENpTZFalZblCOqCjypFbfFvEibBJbDKBUnwbusdwz-WTZV21z8HtzSNByiNrc4fvc-6X2-WjtZ2mCPlMRepimk7RCnq~eQ38c5pV58Ziej1Dfgunh9DeHb3prqi8qFg0sqgOiAe8-XLQJKXSir46j35WGGed8kooHYhuTCqUj4xINBTvQ2DEJkWvkv41P0YEKplB05tqEpmxtGS7gM~o-XaTfrGnqT5Fjg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="1155">Analyst Green 3D</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="873" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/873/thumb_centered/Logo_handrawn_Legal_light-blue.png?timestamp=1400143645&amp;Expires=1697554773&amp;Signature=Xl-75Izl7d8yu5kBJfDJhp65jk-zlnZTMovoRZp~ex6t3vNLnO5hU6NF3t4cgZwn5eOCj1SoZqfVntbJqu0uOaoQhzk9Nos6fDIbAT2Sl6xl3~uceM9uIQ6A-hR5-KgR1MnTG8TG9h0GWmxEwcI2FGDRICBFGDzah1yS-aiIkupEc5iKquTywgQjoxHw4i3NPX0-AxcxnRDS1TzHrQIg7rhqJIp5BYz5ZsLXks0vfrb4Qj36KfsCEkjdsidY2U9ff2TQKSNrjKDvYVoMMW3DQaseAwyDg-v3GJEGKCBS1SKUNAWpCRnH75kSipgfJqVbdMdE0KmpDIXV2Uum0YPQiw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="873">Legal Light Blue Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="907" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/907/thumb_centered/Logo_handrawn_Butcher_red.png?timestamp=1400143641&amp;Expires=1697554773&amp;Signature=b34n00QjN4xmpKkA8TC64ajTa4i6U15ASrSb09fVbwvD9H-mxJmpEnCJVxSVDpbNSKbyvHEwwqwdO4Q9YEBGA6Kse93XdEWGrZmU3uqMxqqZFnwmmgHRQez7pMDJTRQ1g~ElgdHrouojfdkcImBSsRKtcLrM26duJIzWYZB8nLGCqzsnAOdkcwdgenZBqYXKm5Nl~qZY719ATlCx6KdPCR7uH2Aho2xqykOfutwcp34zRV5w-b5lIyDIT~nl9VvUOHyzf1VYx9QTxCmnNB4OpFkUWklF4Ucl6u4FL9KfZQs8AVm8uGAHjBMRIESbZCzU7ZsK7ip1ieZ9UX7-znmKFg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="907">Butcher Red Hand-Drawn</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="144" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/000/144/thumb_centered/Logo_HandymanRepairs.png?timestamp=1400143637&amp;Expires=1697554773&amp;Signature=l0sampCjzlvE-O2pvZ2xrEjk9AND~Hx761PPR1zP0INNw5joqnGYuQftpFfi4zY2XmrnuUdVbWSJr~DGWpn2tMCoHsSEioJtD5rKhocHXgVY1UI0japY1e0T-pQ8XU1QtK~Rj6jUsQGqSjvroLK-aFtGn0E99dp9yLuH7tc2U7NxsXqYSLGLMw5rtlwDApFaSdEXo9jsrvLy4S0eWV3Kb6kv2Vi4Xgyr~yegVd4JGUSlwyjbme9kc~YsFaN6khzUKh1yeR3tNl0-CDJ3SbG6fZlgJRdoDo6kSBfwD8~ZtzpAp06NauDQADO6I9tx-rt3afqhHrLG0j75z9BwaNw1pQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br/>
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
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?category=PEOPLE&amp;doc_type=INVOICE&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">
	
		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8004" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/004/thumb_centered/accountant.png?timestamp=1436617980&amp;Expires=1697554773&amp;Signature=ICrBftRqMoFYJ-ZK5QNvOsNxlsiUdAb9fzxhwCdhliZwcBQarPfpgD1EMy-NZlGMfzjJ-WTOaSXOnq1NaMyV0tf~tzRvRaaradswLOOyvo8ZL4N~boUCMtqG6c45u6O4geY0sQ3tgZtS9Qgx6Fl65v6VnziDzjk~QjP3~zFgEexto0-FJ022Uw5ZU7O1Et79mSfvNhuNQ6q1fDsIQzTcYu54BcKZcRAC~mzsegSCj8Q1zZYc5AC3S9wyh-tiHOLnJuB4Xd6jZYEQX-BhtT8rKZ1D5k1GwWNk7XLTSgUpD2mLH2HTKDpmfR-zUieGef74B56Xh~l0tFOazfyksGQIBg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8004">Accountant</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8059" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/059/thumb_centered/accountant_bw.png?timestamp=1443024228&amp;Expires=1697554773&amp;Signature=mXJGOapNkN56-Z6AuEM5VM6p8rIA2RCe1-81AThnY9XmFrJk0aAw6hMrZ7zuSvACAmN90l5CCFpHR~Iv43HfA72-87MqqcfiyFELZ8wRT6bIFqdXrQjDPFf~8f1wqo4nFPIGqMg4gQSPJJe87XYi33e4SDBaw2ny5bghyO5uzJgOJTeiBaYaMOPV7AuLm32Za2v3mnswSYddo1K-yI2UuUYdzRGtB6Z3~IIh5V~aW2bytY5C~5zAp8-FaFThVxXQ4Ul5kMZVTBZLVdgM~wcuDCzhBzM4CG17YzMDWH~399OrhNwoZ0XlB6h6kwCZIkJBf33SOQQKBXOkf5kFUbS6uw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8059">Accountant B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="113413" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/113/413/thumb_centered/accountant_woman.png?timestamp=1472480304&amp;Expires=1697554773&amp;Signature=FKAjrF9eAekw4fJXtxkx5BJqZRqRAAcIOndtgHEZa0KGhANrRRRlY4nX0BYIzmTNkNNlkJ5dtWZOY7Ryjfz0b8UQPfIGggSboF1CEfjGqY4Y-4mE0WlmzSC1jnjfTACvMiZjIY0Ek4SeQ8qcO70RJNCmeIchr6pgD4PPSqkY4R4zUCF0ciRxavsWiN371sUkAbc59ivKeuBBpV~~mgpRq1TSIcoYAil7hrnLqRl8YEtUl0UAYJsCJuooiG~rTNo5fu3cCjCJwNNo2r-zUCKYfp322xFHdecd-1gLVCmQWpBVfpnzfdPQ84Cm5P9fH9KG5lMJ5lWK~C5vjcr6kvtIpw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="113413"><span class="translation_missing" title="translation missing: en.jobs.accountant_woman">Accountant Woman</span></a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8005" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/005/thumb_centered/actor.png?timestamp=1436617426&amp;Expires=1697554773&amp;Signature=T72Hkc~NaPrr0-awDyPBE9BaFXM7wtHIt5fVyCip5HMQaScRdumbKStYvEzLqQy9fMZNYb6UpwiPK7MlHp6~9EbE0ShoCq2qR8aJyOtC8II9nNaxj6HwZZAeJYG-7e7tX-RNfL8bTVIppZeU3GgfEJIYyOiq9txJqtow1HYxkiI1hGpSKEhxB5fe560q2ZEf3L7HDWt~6KEOXjDHDTFcKd3EzgpkVDArrP9GyFTev7S3F4oP3c1UVTpT1dlxRuzVUPuaC5iJBQt5R3C~8KCD10NVG1HpCImXeQZAjvRHVtvrAsYbu7yRgpSIfmzIyLfEyddWBr-G9I-Dxzscj7~VuA__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8005">Actor</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8060" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/060/thumb_centered/actor_bw.png?timestamp=1443024232&amp;Expires=1697554773&amp;Signature=n8rvHf82CTnjHgW~LAKI0RVrAfWWtIUH66J6C8facK8UrjKbdzDpEBRmziuRTqtSLAivbJJ0lIXrHPbzaLumceRpDDQ7QcutUoh0aO~tAKsOMt-Bg-HrOLsV677LOt1TJpLuvLOcUrr7SBEzyMQ~8lTOZvxyQ2ARYrSBmterHwi046VmTrjR1ywqxOEPtAtHvj-Hrmo5gvMPTSm7q~7LLBYo0D3xGNnVMF0QfuAnUK2c4-Rd-d0BeU1bxb28fo~Dr9qlVQ69brlSKPEBRMK8m8-NqCeas~Xbun~kbZ36EMSPfX0q-gq~cKf-VNdpBRwgo~IJd3i2g6FgUdWk1JRcHg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8060">Actor B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="113414" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/113/414/thumb_centered/actress.png?timestamp=1472480304&amp;Expires=1697554773&amp;Signature=P5njTW5rmATozNsFSz4VsdQ7bI7o7uSP0hU8fKQjOgfDz45gFk1RhnnivfZ1WgRC~IsgYt5NKA88QKivkxXBjdLAqkW4JmMH8D1rSje24YuXb9Q5dv6u4m2Z2tifQTgZbv8segtFg8zDZ~o8Mu3raeQ7XSE86YzdED~4slZIpQrTXxGIefkDHWg8H~w5SWYQ19vCbexBM35ECUGaYLSWIM68nVZJJSenCcborhSCNhp23DSEFBAbaK4ZJYdR3JkBek1cCPPzPX~Y7lJVd6~XETAUU4ReyJyk2OcDvusICxUnEZFP13aF7-6WRzBg3vNZnY33nx5fRE2~g36jLfSidg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="113414"><span class="translation_missing" title="translation missing: en.jobs.actress">Actress</span></a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8006" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/006/thumb_centered/agent.png?timestamp=1436617426&amp;Expires=1697554773&amp;Signature=qo1v54kzDL945p~E0hmX3coDOdbna0tnutB~A3FjOzWVmCSolVsAwlN1pGD9TjhPEsBKto2wGL0Gd~gOLEhIl-ddaNj41cKD63YyKiwbTAe-nRve0mdRMzk3MC5yuci8a-zzdLTMY3eRHDBtxZs18ZpJAv5i9Ww6SIHeX-tXy6c6WvEpARO-HC96WHGGScwQMiwDJJs04DIrBcgTzgTGpJ0Xk~XS0~5gdIMqpg1EgX1gexR0cy~qjQK5UE9AS~n3ws0I5ERXaR14zPWEmktSInsqg-NeV0kD-Q6323Vz96~XQC2AMbhDrASDE6glCbCj0Z7HPgtKFNxL~t6UTX5lzw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8006">Agent</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8061" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/061/thumb_centered/agent_bw.png?timestamp=1443024233&amp;Expires=1697554773&amp;Signature=MiCPyjeePwzRsIvNl80YUmhRdeyQJsIWvHIRfQWkOtetg-ESy12IwBkkQEv-SalqvcmXoEcK-HHLHRRI5X2M-S8uZ~TxuT4oVh1nh3lcj9CKQ2svKhXYAOlpBORmqSBC6~Xmnf5Frk9R9Rwz-9xcXLoPqQ84FGpi~1RG8pbuTLxPZxUYaEG6vv5Wjt6ZteWx1YkiYV-nflaSTKSrA~MqamW1deLCPI2H-Qb6WE8jIodIzXcYczdvBYDGfHkvcmx0mWskXO1q3BUaSq1lTg09pj34L0NGFyJcCFIpWPvjcRGcQpwbccfMr~-DcZEVbiENSm8yIJ37F5PVwjEEFO8EEg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
					<a href="#" class="choose-logo underline bold darkblue" data-index="8061">Agent B&amp;W</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="8007" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/008/007/thumb_centered/analyst.png?timestamp=1436617427&amp;Expires=1697554773&amp;Signature=dvgJY8mvWt-i-bCy2qysSFrPEPzpb1AZ1yV6NGvg8nUsZ9yOE9INL422DNWmmRp-CJaR2r-PipcYLdoMLQrcDP6XlRNd4P1D4xZBcJPhpL8PaIJigGiHfMx7D7oA2gJruMVYxBFM4bL5WPbe7LPALMYELBbm40F5oZD0VbjOoGBzzeOEYsb2Dz3fXqzcSiSy79P6waJiDxv7JHOpSBcoNVUH7WgJsbwfA7pmV4wqm1h55xTonkByJAYhGHUyjMFFK3KlslSNof3X6iLUelQCwL8IrCy-e6C73Tkc0xr5FGqqW4Vg2wrHg0xH8jiqnvPuf2CU3IKxWTrwzhuL5qDkbQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" /><br>
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
		<div role="navigation" aria-label="Pagination" class="pagination"><span class="previous_page disabled" aria-label="Previous page">&#8592; Previous</span> <a class="next_page" aria-label="Next page" rel="next" data-remote="true" href="/logos?category=JOBS&amp;doc_type=INVOICE&amp;id=115134380&amp;page=2">Next →</a></div>
	</div>

	<div class="row">

		
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25275" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/275/thumb_centered/accountant.png?timestamp=1450354638&amp;Expires=1697554773&amp;Signature=MO5qenxK95LyClxntOAoZcmnwZzQfJ3D5tn~sZNsX2zGcSKX2Ap4vxEEL-UT0byJvPmEqumxhMmpA07sFkPnw-~skGlTP61FQ0BN57GQn6skcktyJR5FrsL-CsjWCsd0k7WD-MsiSEFK4t2rya~Qb41Zb3jJKZyMg4dfMDU1xWkcblT48b~VbjT-~uS0z~Y2sifRvtHGfSGOeFC7fL76HiLRkrDTptln~CPw4MLrTBbmbLsk1TWBIh2wqTMFYjYhQxInwXFETFVjs6X4yOJID5p3UYCTidEVD023yKnsiNGGETerWwa-N4Q9Bh4CIc2ZYqt6TfSj73RCJIkpftfqYg__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25275">Accountant</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25274" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/274/thumb_centered/actor.png?timestamp=1450354656&amp;Expires=1697554773&amp;Signature=FVGbHBtNxZfUoHPdYZhAVeGgXhtWPEyv7WAgMWd-yanqwLGJF3ub3nR6Wlo6TGWGYUyThn~sTqvv7BUvI9ozMM7AnmTaiaXmGSAfTqp7wsfTd6Bs9Hgs~tu-U9bRRzfK3Ke8WnKbM2SSK~xrkSUGGyx-r6AvwvtS~iyOQN1yuZSHNJAj70krD8y1~~Omk1tkPeve~6M6rw~Ps4PqrXsCPLcxtYjsk5eu-UcqliBnUNgyL7Zp-M9qHqP8muejfWquLO1odZMecKH-jLddEOfiGaNddbtOEvBw0APOa9zFdQFMVlp~OblH4y2lowAA0By82nDqh~TpoxZycDCsm~ekHw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25274">Actor</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25273" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/273/thumb_centered/agent.png?timestamp=1450354678&amp;Expires=1697554773&amp;Signature=IRFw4bl7LYuqLHRCzoLbmjGPvhtHWNuyO--e8JrGIyaMQNTVyUjJ~CZTdcdyiBBsgGmqvJzssAO8eOO3oMGaiUU2PYLQ1FDf1QdSnihQChQ16cPytHVTfSB5y-IruYmN9aD-uLJIiq9ru0KiIo0gDl8Z5j7O0PTa5iGbP4fflYLe1aemysMCg0tumQvfE1lfRERByrIrPzaC~jethsui7aabCMfJ7K9q47EC~hn7KNQycvuVkl9JgjUVBUxYaKVvL9xLSPzB0LdmXNOsM-cNeblpZBCSAcKwyd~PSCv9JVRincOdCZZJFfCgfOqOTKpiasAHR884btS8ruJ2zaCUqQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25273">Agent</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25272" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/272/thumb_centered/analyst.png?timestamp=1450354697&amp;Expires=1697554773&amp;Signature=MxW1oep6cu2pk3fWqjLCnARH-0nUpSraHsNcHAX27h1VLqQKw2C~zqQku~F7Xp7hNSindULe73q3MGT1A9CEMCiAojOAiKmxpT805JLUCZriSFYnA5V-rdijwnbaPeqcqJxLFQSdmGpLYYddMTWmG0ZyudO3guRNragorzDmfIhSevgVmd5hDVWElxWUf-HVFe3qwShSszgOBFywEsTnf19h0UlHM-okoOwSoeE0hMgV9Qa-WJ6667SYKEdS7zjQsaC~d-YMEzQHdoHUsxRlxUuc0L96ycCVD0VpmVk~9KiJLhYR~HYGPOMHo1e2s-1x74gntUUnrbSnR6kMs~Xo-w__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25272">Analyst</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25271" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/271/thumb_centered/architect.png?timestamp=1450354716&amp;Expires=1697554773&amp;Signature=TRcpztGJPEvYhhZ53auyfyCOqQSgZZYQHWqAuBu4Rb-4JvYdx9OuTJrWtQn9N8Taj-DFJVkZpGmeBfmXQJHIKL2yJnpz~fAYs8cNwwffwIPHJeZFmlVDbIr~4q2sRD8Kprsgo5Ck-6kFPSIlgeMvUo0Ldvx286b4bxkV4BPaJ20u3fzBoePvhNgIz4n8WJlvBZJJ~OcZi53oPEvjwynvPaSzmMJ4nczbzegepdFtcKTFcLk7NgoSsiPrcEJXLyQD3IrCuYKd4Szr7NFSPN8Xf68fTiNL31w13mzRPjZ3ImzeNV7Ym5Ixzx80-j5FtiB1pqTiAh3yRC6ubIhqEfLiJw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25271">Architect</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25270" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/270/thumb_centered/babysitting.png?timestamp=1450354733&amp;Expires=1697554773&amp;Signature=K7e2Gs6hYrIYh1RQnk7f3How1IA1YiUK1XD1xqY7nIVnLQyzeffT0~VG2dldEXw82AY4a1v684uCRoP11m6mVr9Dj32mwHIk1SOHBMBYMuk8ukeBKIWY6UJ7w7~0zALFvw7htY7XzFyYsvHemE45ne--pUKs-HIp71pLLmUMMWaNH7gfdToU4ORWuUFp0alQAHFS1NDxLrWFH~XqWyW~s0mNGv64cDAMt51tXmyEbodGOcJwFGxeYUJmcMp0kCXx6qfPlAjeD07hPFfABgzJZ2IiQbz70UDg7~D~mWNiBOU-kDEPd4S~SujuSJEI5UeI31XSlaQuZ296zd3L3v-tYw__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25270">Babysitting</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25269" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/269/thumb_centered/babysitting-2.png?timestamp=1450354751&amp;Expires=1697554773&amp;Signature=H2pTW2uMH1JwQEQCZeITI0rCurQ1MyAsRr3rJVgopbNVwg99KRKaT2cBFYYyzgt1KTQYh4Gd54~S1VFfJWxrtPiIhU7OxXTm-bMZjpyDccIgiGJgRQI25qZmdIdxzZ1DluY7b8LHxPki1jLR27HwRzCcW7yZohl9bNZOVrevbOmDOIdO77Sd-cuwVoclZ7wVOxwN41TAl7Zr4Qdpj68HJ-PFfQU5tEH3UWhl8YLpGTnc~nCflYZKYQDNT~SFtyrHfzfNYymVTXcsEA6bX6bomwjZgQA8xhBwDutQBWFATFTS18HdoFk7zIgjWlMA14~fAHviaP-5ddpjKH~b7HlaUQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25269">Babysitting</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25268" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/268/thumb_centered/baker.png?timestamp=1450354765&amp;Expires=1697554773&amp;Signature=Ry8Yb7ix7SrhwfcKFOJ0h9OljdOWRf5nVXm9E9CuPCTwtA3BB8BMtlA2vl66p5wR-vgUZ2JdhqtSLe8Yd~2Gzu36VZjO~rennEQsuIhDKLI~aG4yW5fjNiebepV-pA08tAGraPV3TIl5MUqrsxxKLMvdoSdX1WItH-5iiHFxUxwRiINAe-7YJQm6vn2BNySfVsG80eTg3ZNtgfBcTnFmwQgFbEzEQqNMAZFRwIGueu7m6r-Gz9CTbWZZ47vrpXAm-Y1qbCQi16Ku1EByDx6Fo3pCXGOsnZrTp5islBlIIXs4UBHGtfoQnIJ~4PUwcir6Y42aTcI89sbdh2AjPGkbSQ__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
					<a href="#" class="choose-logo underline bold darkblue" data-index="25268">Baker</a>
				</div>
				
							
				<div class="col text-center my-3 p-0">
					<img title="Select Logo" class="choose-logo acts-as-link" data-index="25209" src="https://d23o3umie6vb7x.cloudfront.net/logos/files/000/025/209/thumb_centered/baker-2.png?timestamp=1450355655&amp;Expires=1697554773&amp;Signature=EMe4NvdgW-ASVItOPPqD05Q~44990rDzRtLMKH0TMGdKcFEHPhv1vF3zuqD2SF17hlyjdqoDJUIo0cYADu-AQZtjlpbeFdaavDLuE9kOoMM6oSThSJwtcY8EQ~B99GDsogMlhGf1i-8mZsQJDdNlaSJtHO19HQYdZ5qsrsBJ6kNujcSy-pl~z7EqzYkUdU2uD5cli7R5W1buWSzb7Zk9fJE9jPb3MBBy3lo7WCnBy8QnvJnAjv2wlLewXp-1wBVZqCoVfWh9bdzp-DVyg8lxNTdImKXtRcHEP7fEKVvLmYL5uGR7L4Zhe4G253-PB1UTw~BMpUqI34R4GMF0iQsd~g__&amp;Key-Pair-Id=APKAJ5JUFZUTW73QIUFQ" width="200" height="100" /><br/>
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
						<strong>₦ 100.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%n %s">
						<strong>100.00 ₦</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s%n">
						<strong>₦100.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s%n %c">
						<strong>₦100.00 NGN</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%n %c">
						<strong>100.00 NGN</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%c %n">
						<strong>NGN 100.00</strong>
					</span>
				</div>
				<div class="my-2">
					<span class="choose-currency-format text-decoration-underline fs-6 link-primary" data-id="%s %n %c">
						<strong>₦ 100.00 NGN</strong>
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
				
				<form class="row m-2" id="footer-label-form" action="/invoices/115134380/update_footer_label" accept-charset="UTF-8" data-remote="true" method="post"><input type="hidden" name="_method" value="patch" autocomplete="off" /><input type="hidden" name="authenticity_token" value="gIHiqCMvt_99W274vqfH556Wg07jN0LCZHI1tJzGE3e8Ur5Y4tlhwMTK_Rse-3gQo8PDS_JybXw29S5c4VFRPA" autocomplete="off" />

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
		<form class="d-inline-block" method="post" action="/auth/facebook"><input class="btn nolink btn-facebook text-white shadow" rel="nofollow" type="submit" value="Facebook" /><input type="hidden" name="authenticity_token" value="twWlGSe-xOitXORYF_zsmEOJey9V4F4H2pPdx20z8cum3dg-PAIaAxKXakQ5FPSOls-v4IYTtn5lHOBNuu9bhQ" autocomplete="off" /></form>
	</div>

	<div class="col-auto">
		<form class="d-inline-block" method="post" action="/auth/windowslive"><input class="btn nolink btn-live text-white shadow" rel="nofollow" type="submit" value="Windows Live" /><input type="hidden" name="authenticity_token" value="T_eNRKQu5Zn_Zv3EGjXANA1n7ssQ2ZDmSXZE3ODbLwIxY5bWAsnHuKsCvufb9JWrFSx8uLlhGDTstaOQnbbAYw" autocomplete="off" /></form>
	</div>

	<div class="col-auto">
		<form class="d-inline-block" method="post" action="/auth/yahoo_auth"><input class="btn nolink btn-yahoo text-white shadow" rel="nofollow" type="submit" value="Yahoo" /><input type="hidden" name="authenticity_token" value="nE87ggwydhP7boamg7Yn8y1XrLwYHzC0fwxunb9XpP_0h3-4ACLrg5p9D_15TJRUJNlxUK4j2JCsLD1alr_6-A" autocomplete="off" /></form>
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

</div>

					<footer class="my-5">
  <div class="row text-center">
    <div class="col">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="/" title="Home" class="btn-link text-muted lh-lg">Home</a>
        </li>
      </ul>
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