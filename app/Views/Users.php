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
	<link rel="icon" type="image/png" href="../vista1/img/ferreteria.png" />
	<title>USERS</title>
</head>
<body class="body4">
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
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Clients')?>"><span class="icon-home3"></span>CLIENTS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Products')?>"><span class="icon-home3"></span>PRODUCTS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/Users')?>"><span class="icon-home3"></span>USERS</a>
                            </a> 
                            <a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?= base_url('public/About')?>"><span class="icon-home3"></span>ABOUT</a>
							</a> 
						</nav>
					</div>
				</div>
			</div>
   </header>
   <main>
        <br><br><br><br><br>
		<div class="jumbotron">
			<h1 class="display-4">LOGIN SESSION</h1>
			<p class="lead">In this session of our online store you will find information about our products.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">A In this session you can log in with your username and password.</li>
				<li class="lead btn-outline-dark">You can access the products session</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-light" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-light" href="register.html" role="button">REGISTER</a>
        </div>
        <div class="container">
			<div class="row">
				<div class="col-12 col-md-12">
					<div class="card text-white bg-dark mb-3" style="max-width: 67rem;">
						<div class="card-header">USERS NEW</div>
						<div class="card-body">
						  <img src="" alt="">
						  
						  <form class="mt-5 pb-5" action="<?php echo(base_url('public/Users/Add'))?>" method="POST">
							<div class="form-row">
							  <div class="form-group col-md-6">
								<label for="Username">User name</label>
								<input type="text" class="form-control" id="Username">
							  </div>
							  <div class="form-group col-md-6">
								<label for="Name">Name</label>
								<input type="text" class="form-control" id="Name">
							  </div>
							</div>
							<div class="form-group">
							  <label for="password">Password</label>
							  <input type="password" class="form-control" id="password" >
							</div>
							<div class="form-group">
							  <label for="email">Email</label>
							  <input type="email" class="form-control" id="email">
							</div>
							
							<button type="submit" name="Register" class="btn btn-outline-light">REGISTER</button>
						  </form>
						</div>
					</div>
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