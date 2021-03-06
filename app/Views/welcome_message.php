<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo(base_url('public/Style/style1.css'))?>">
	<link rel="stylesheet" href="<?php echo(base_url('public/Style/style2.css'))?>">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed&family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../vista1/img/ferreteria.png" />
	<title>Home</title>
</head>
<body class="bg-dark">
	<header>
		<img  class="logo" src="<?php echo(base_url('public/img/logo_editado-1.png'))?>" width=1550px height=300px  alt="">
		<div class="container">
            <div class="row">
                <div class="col-12">
                    
		             <nav class="navbar navbar-expand-lg barra fixed-top  ">
						<a class="navbar-brand text-white texxto" href="#">
							<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/registration')?>"><span class="icon-home3"></span>LOG IN</a>
						</a>
						<a class="navbar-brand text-white texxto" href="#">
							<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/customer')?>"><span class="icon-home3"></span>CHECK IN</a>
						</a>
						<a class="navbar-brand text-white texxto" href="#">
							<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/products')?>"><span class="icon-home3"></span>PRODUCTS</a>
						</a>
						<a class="navbar-brand text-white texxto" href="#">
							<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/about')?>"><span class="icon-home3"></span>WE ARE</a>
						</a> 
					</nav>
                </div>
            </div>
        </div>
	</header>
	<main> 
      <div>
         <img class="colage1" src="<?php echo(base_url('public/img/IMAGEN_COLAGE1_ingles-1.png'))?>" alt="IMAGEN_1_COLAGE" width="1130px" height="500px">
         <img class="colage1" src="<?php echo(base_url('public/img/IMAGEN_COLAGE2_ingles-1.png'))?>" alt="IMAGEN_1_COLAGE" width="1130px" height="420px">
         <img class="colage1" src="<?php echo(base_url('public/img/COLAGE3_ingles-1.png'))?>" alt="IMAGEN_1_COLAGE" width="1130px" height="470px">
       </div> 
       <div class="jumbotron-fluid somos">
         <div class="container">
             <div class="row">
                 <div class="col-12 center-block">
                    <h1 class="display-4 center-block">ABOUT US?</h1>
                    <p class="lead">We are a group of construction workers, engineers, and vendors. That as a family project we decided to undertake this dream of having a hardware franchise.
                    <hr class="my-4">
                    <p class="lead">Our main objective is to grow and help people who do not have tools to solve small and large situations, quick, safe and affordable solutions to every problem. We want to establish ourselves as a brand to trust. </p>
                 </div>
             </div>
         </div>
	  </div>
	  <div class="jumbotron-fluid somos">
		<div class="container">
			<div class="row">
				<div class="col-12 center-block">
				   <h1 class="display-4 center-block">WHY CHOOSE US?</h1>
				   <p class="lead">We understand your needs, that's why we handle the best brands on the market.
				   <hr class="my-4">
				   <p class="lead">
					Our main objective is to grow and help people who do not have tools to solve small and large 
					situations, quick, safe and affordable solutions to every problem. We want to establish ourselves 
					as a brand to trust. </p>
					<ul>
                            <li class="lead btn-outline-light">Quality</li>
							<li class="lead btn-outline-light">Durability</li>
							<li class="lead btn-outline-light">Warranty</li>
							<li class="lead btn-outline-light">Fair Prices</li>
					</ul>
				</div>
			</div>
		</div>
	 </div>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
					<div class="card-header">TOPE DE PUERTA GATO CON IMÁN</div>
					<div class="card-body">
					  <img src="" alt="">
					  <h5 class="card-title">Building</h5>
					  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 18.03.52 (2).jpeg'))?>" width="200px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				      </a>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
					<div class="card-header">LLAVE LAVAPLATOS DE PARED</div>
					<div class="card-body">
					  <h5 class="card-title">Bathrooms and toilets</h5>
					  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 17.45.20.jpeg'))?>" width="200px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				      </a>
					</div>
				</div>
			</div>
			<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">LLAVE ADJUSTABLE</div>
				<div class="card-body">
				  <h5 class="card-title">Tools</h5>
				  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 18.03.51 (2).jpeg'))?>" width="200px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				      </a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
					<div class="card-header">CHAZO MARIPOSA</div>
					<div class="card-body">
					  <h5 class="card-title">Bathrooms and toilets</h5>
					  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 17.38.51 (3).jpeg'))?>" width="230px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				      </a>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
					<div class="card-header">CÁNCAMO EN L</div>
					<div class="card-body">
					  <h5 class="card-title">Bathrooms and toilets</h5>
					  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 17.38.24.jpeg'))?>" width="200px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				      </a>
					</div>
				</div>
			</div>
			<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">CANCAMO DE GANCHO O ABIERTO</div>
				<div class="card-body">
				  <h5 class="card-title">Bathrooms and toilets</h5>
				  <img src="<?php echo(base_url('public/img/WhatsApp Image 2020-07-20 at 17.38.24 (1).jpeg'))?>" width="200px" height="150px"  alt="">
					  <a class="navbar-brand text-white texxto" href="#">
						<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>SEE MORE</a>
				    </a>
				</div>
			</div>
		</div>
	</div>
	<div class="jumbotron-fluid somos">
		<div class="container">
			<div class="row">
				<div class="col-12 center-block">
				   <h1 class="display-4 center-block">SERVICES</h1>
				   <p class="lead">We are characterized by responsibility and professionalism.</p>
				   <hr class="my-4">
				   <p class="lead">REMODELING SERVICES</p>
					<ul>
              <li class="lead btn-outline-light">Plumbing</li>
							<li class="lead btn-outline-light">Electricity</li>
							<li class="lead btn-outline-light">Locksmith</li>
							<li class="lead btn-outline-light">Showers installation</li>
							<li class="lead btn-outline-light">Home appliances</li>
							<li class="lead btn-outline-light">Sanitary</li>
					</ul>
                    <p class="lead">DESIGN SERVICES</p>
					<ul>
						<li class="lead btn-outline-light">Design and installation of integral kitchens</li>
						<li class="lead btn-outline-light">Design and installation of embedded closets</li>
					</ul>
					<p class="lead">DEPOSIT SERVICES</p>
					<ul>
						<li class="lead btn-outline-light">Scaffolding rental</li>
						<li class="lead btn-outline-light">Stairs rental</li>
						<li class="lead btn-outline-light">Rental of hand tools</li>
						<li class="lead btn-outline-light">Rent of Electric Tools</li>
		    		</ul>

				</div>
			</div>
		</div>
	 </div>
	 <nav aria-label="Page navigation example">
		<ul class="pagination justify-content-end  bg-light">
		  <li class="page-item btn btn-outline-light "><a class="page-link" href="addproductes.html">1</a></li>
		  <li class="page-item btn btn-outline-light "><a class="page-link" href="aboutUs.html">2</a></li>
		  <li class="page-item btn btn-outline-light "><a class="page-link" href="Login.html">3</a></li>
		  <li class="page-item btn btn-outline-light">
			<a class="page-link" href="register.html">Next</a>
		  </li>
		</ul>
	  </nav>

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