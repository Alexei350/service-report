<!DOCTYPE html>
<html>
	<head>
		<title>OS Report Beta v0.1</title>
	  	<meta charset="UTF-8">

	  	<link rel="shortcut icon" href="/img/favicon.png">

	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<style>
	      	.bd-placeholder-img 
	      	{
	        	font-size: 1.125rem;
	        	text-anchor: middle;
	        	-webkit-user-select: none;
	        	-moz-user-select: none;
	        	-ms-user-select: none;
	        	user-select: none;
	      	}

	      	@media (min-width: 768px) 
	      	{
	        	.bd-placeholder-img-lg 
	        	{
	          		font-size: 3.5rem;
	        	}
	      	}

	      	#os
	      	{
			  	max-width: 960px;
		   	}

			.lh-condensed 
			{ 
				line-height: 1.25; 
			}
	    </style>

	    <link href="form-validation.css" rel="stylesheet">
	</head>

	<body class="text-center bg-light">
		<header class="masthead mb-auto">
		    <div class="inner">
		      	<?include("menu.php")?>
		    </div>
		</header>

		<main role="main" class="inner cover">
			<div class="row justify-content-md-center">
		  		<div class="col-lg-10">
		  			<div class="py-5 text-center">
						<img class="d-block mx-auto mb-4" src="/img/os.png" alt="" width="72" height="72">
						<h2>Cadastro de Ordens de Serviço</h2>
						<p class="lead">Forneça os dados do cliente, descrição dos serviços e informações para adicionar a ordem de serviço.</p>
				  	</div> 

				    <div class="col-md-12">
				      	<h4 class="mb-3">Billing address</h4>
				      
				      	<form class="needs-validation" novalidate>
				      		<div class="row">
					          	<div class="col-md-6 mb-3">
					            	<label for="firstName">First name</label>
					            	<input type="text" class="form-control" id="firstName" placeholder="" value="" required>
					            	
					            	<div class="invalid-feedback">
					              		Valid first name is required.
					            	</div>
					          	</div>
					          	
					          	<div class="col-md-6 mb-3">
					            	<label for="lastName">Last name</label>
					            	<input type="text" class="form-control" id="lastName" placeholder="" value="" required>
					            	
					            	<div class="invalid-feedback">
					              		Valid last name is required.
					            	</div>
					          	</div>
					        </div>

					        <div class="mb-3">
					          	<label for="username">Username</label>
					          	<div class="input-group">
					            	<div class="input-group-prepend">
					              		<span class="input-group-text">@</span>
					            	</div>
					            	
					            	<input type="text" class="form-control" id="username" placeholder="Username" required>
					            	
					            	<div class="invalid-feedback" style="width: 100%;">
					              		Your username is required.
					            	</div>
					          	</div>
					        </div>

					        <div class="mb-3">
					          	<label for="email">Email <span class="text-muted">(Optional)</span></label>
					          	<input type="email" class="form-control" id="email" placeholder="you@example.com">
					          	
					          	<div class="invalid-feedback">
					            	Please enter a valid email address for shipping updates.
					          	</div>
					        </div>

					        <div class="mb-3">
					          	<label for="address">Address</label>
					          	<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
					          	
					          	<div class="invalid-feedback">
					            	Please enter your shipping address.
					          	</div>
					        </div>

					        <div class="mb-3">
					          	<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
					          	<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
					        </div>

					        <div class="row">
					          	<div class="col-md-5 mb-3">
					            	<label for="country">Country</label>
					            	<select class="custom-select d-block w-100" id="country" required>
					              		<option value="">Choose...</option>
					              		<option>United States</option>
					            	</select>
					            	<div class="invalid-feedback">
					              		Please select a valid country.
					            	</div>
					          	</div>
					          	
					          	<div class="col-md-4 mb-3">
					            	<label for="state">State</label>
					            	<select class="custom-select d-block w-100" id="state" required>
					              		<option value="">Choose...</option>
					              		<option>California</option>
					            	</select>
					            	
					            	<div class="invalid-feedback">
					              		Please provide a valid state.
					            	</div>
					          	</div>
					          	
					          	<div class="col-md-3 mb-3">
					            	<label for="zip">Zip</label>
					            	<input type="text" class="form-control" id="zip" placeholder="" required>
					            	
					            	<div class="invalid-feedback">
					              		Zip code required.
					            	</div>
					          	</div>
					        </div>

					        <hr class="mb-4">
					        <div class="custom-control custom-checkbox">
					          	<input type="checkbox" class="custom-control-input" id="same-address">
					          	<label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
					        </div>
					        <div class="custom-control custom-checkbox">
					          	<input type="checkbox" class="custom-control-input" id="save-info">
					          	<label class="custom-control-label" for="save-info">Save this information for next time</label>
					        </div>
					        <hr class="mb-4">

					        <h4 class="mb-3">Payment</h4>

					        <div class="d-block my-3">
					          	<div class="custom-control custom-radio">
					            	<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
					            	<label class="custom-control-label" for="credit">Credit card</label>
					          	</div>
					          	<div class="custom-control custom-radio">
					            	<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
					            	<label class="custom-control-label" for="debit">Debit card</label>
					          	</div>
					          	<div class="custom-control custom-radio">
					            	<input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
					            	<label class="custom-control-label" for="paypal">PayPal</label>
					          	</div>
					        </div>

					        <div class="row">
					          	<div class="col-md-6 mb-3">
					            	<label for="cc-name">Name on card</label>
					            	<input type="text" class="form-control" id="cc-name" placeholder="" required>
					            	<small class="text-muted">Full name as displayed on card</small>

					            	<div class="invalid-feedback">
					              		Name on card is required
					            	</div>
					          	</div>
					          	<div class="col-md-6 mb-3">
					            	<label for="cc-number">Credit card number</label>
					            	<input type="text" class="form-control" id="cc-number" placeholder="" required>

					            	<div class="invalid-feedback">
					              		Credit card number is required
					            	</div>
					          	</div>
					        </div>

					        <div class="row">
					          	<div class="col-md-3 mb-3">
					            	<label for="cc-expiration">Expiration</label>
					            	<input type="text" class="form-control" id="cc-expiration" placeholder="" required>

					            	<div class="invalid-feedback">
					              		Expiration date required
					            	</div>
					          	</div>
					          	<div class="col-md-3 mb-3">
					            	<label for="cc-cvv">CVV</label>
					            	<input type="text" class="form-control" id="cc-cvv" placeholder="" required>

					            	<div class="invalid-feedback">
					              		Security code required
					            	</div>
					          	</div>
					        </div>

				        	<hr class="mb-4">
				        	<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
				      	</form>
				    </div>

					<footer class="my-5 pt-5 text-muted text-center text-small">
						<p class="mb-1">&copy; 2017-2019 Company Name</p>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#">Privacy</a></li>
							<li class="list-inline-item"><a href="#">Terms</a></li>
							<li class="list-inline-item"><a href="#">Support</a></li>
						</ul>
					</footer>
			  	
				</div>
			</div>
		</main>
	</body>
</html>