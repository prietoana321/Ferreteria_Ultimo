<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo(base_url('public/Style/style1.css'))?>">
	<link rel="stylesheet" href="<?php echo(base_url('public/Style/style2.css'))?>">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed&family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo(base_url('public/img/ferreteria.png'))?>" />
	<title>PRODUCTS</title>

	<title>Products</title>
</head>
<body class="body2">
    <header>
	<div class="container">
				<div class="row">
					<div class="col-10">
						
						 <nav class="navbar navbar-expand-lg barra fixed-top  ">
							<a class="navbar-brand text-white texxto" href="#">
								<img src="<?php echo(base_url('public/img/logo_para_productos-1.png'))?>" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Home')?>"><span class="icon-home3"></span>HOME</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Users')?>"><span class="icon-home3"></span>USERS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Clients')?>"><span class="icon-home3"></span>CLIENTS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Products')?>"><span class="icon-home3"></span>PRODUCTS</a>
							</a>
							 
						</nav>
					</div>
				</div>
			</div>
	</header>
	<main><br><br><br><br><br>
	    <div class="jumbotron">
			<h1 class="display-4">PRODUCTS SESSION</h1>
			<p class="lead">In this session of our online store you will find information about our products.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">Add products to your list, get the id to place your order.</li>
				<li class="lead btn-outline-dark">Search your product for in stock.</li>
				<li class="lead btn-outline-dark">You can update the status of a product and its different properties</li>
				<li class="lead btn-outline-dark">You can eliminate products that leave the market</li>
				<li class="lead btn-outline-dark">and much more</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You must enter with your username and password to the "USERS" session or if you have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-light" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-light" href="register.html" role="button">REGISTER</a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card text-white bg-dark " style="max-width: 70rem;">
						<div class="card-header">ADD</div>
						<div class="card-body">
						  <img src="" alt="">
						  <form action="<?php echo(base_url('public/Products/Add'))?>" method="POST">
						  <div class="form-row">
							  <div class="form-group col-md-12">
								<label for="id_product">Id Product</label>
								<input type="number" class="form-control" id="id_product">
							  </div>
						  </div>
						  <div class="form-row">
							  <div class="form-group col-md-6">
								<label for="ProductName">Products Name</label>
								<input type="text" class="form-control" id="ProductName" name="ProductName">
							  </div>
							  <div class="form-group col-md-6">
								<label for="imagenProducts">Imagen</label>
								  <input type="file" class="form-control" id="imagenProducts" width="150px" hight="150px" name="imagenProducts">
								</div>
							</div>
							  <div class="form-row ">
								<div class="col-md-6 form-group">
									<label for="Category">Category</label>
									<input type="text" class="form-control" id="Category" name="Category">
								</div>
								<div class="col-md-6 form-group">
										<label for="measure">Measure</label>
										<input type="text" class="form-control" id="measure" name="measure">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="Kind">Kind</label>
									<input type="text" class="form-control" id="Kind" name="kind">
								</div>
								<div class="form-group col-md-6">
								  <label for="direction">Direction</label>
								  <input type="text" class="form-control" id="direction" name="direction">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="lowerPrice">Lower price</label>
									<input type="text" class="form-control" id="lowerPrice" name="lowerPrice">
								</div>
								<div class="form-group col-md-6">
									<label for="units">Units</label>
									<input type="text" class="form-control" id="units" name="units">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="lowerPrice">Lower price</label>
									<input type="text" class="form-control" id="lowerPrice" name="lowerPrice">
								</div>
								<div class="form-group col-md-6">
									<label for="higherPrice">Higher Price</label>
									<input type="text" class="form-control" id="higherPrice" name="higherPrice">
									</div>
							 </div>
							 <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="suppliers">Suppliers</label>
								  <input type="text" class="form-control" id="suppliers" name="suppliers">
								</div>
								<div class="form-group col-md-6">
									<label for="providerName">Provider Name</label>
									<input type="text" class="form-control" id="providerName" name="providerName">
							    </div>
							 </div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="providerName">Provider Name</label>
									<input type="text" class="form-control" id="providerName" name="providerName">
								</div>
								<div class="form-group col-md-6 ">
									<label for="telephone">Telephone</label>
									<input type="text" class="form-control" id="telephone" name="telephone">
								</div>
							</div>
						  <a class="navbar-brand text-white texxto" href="#">
							<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>ADD</a>
						  </a>
						  <h3 class="text-center"><?php echo(session("REGISTRO AGREGADO"))?></h3>
						</form>
					  </div>
					  
					</div>
				</div>
	</main>
	<br><br><br><br>
	<footer class="btn-outline-light">
		<div class="container">
			<div class="row">
				<div class="col-6"><hr><hr><hr>
					<h2 class="btn-light text-center"> CONTACT INFORMATION</h2><hr><hr>
					<h3 class=" text-center">305 3366160</h3><hr>
					<h3 class=" text-center">ferresolucioneslaamerica@gmail.com</h3><hr>
					<hr>
					<h3  class=" text-center">BY: Los Chigüireados sin oficina &copy;</h3>
					<br>
				</div>
				<div class="col-6"><br>
					<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089560705357!2d-75.60530288547967!3d6.25192939547466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429742bcbba9b%3A0x19ea2a17e8ee6376!2sCra.%2082%20%2344b-28%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1596768717713!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>

				</div>
			</div>
		</div>	
	</footer>
	<script src="popup.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>