<!doctype html>
<html lang="fr">

  <head>
	<!-- <title>Bienvenue sur Aformac !</title> -->
	<title><?php echo (isset($_GET['section']) && !empty($_GET['section'])) ? $_GET['section'] : 'Accueil'; ?></title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- Script Personnel -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>

  <body>

	<!-- header -->
	<header>

		<nav id="nav1" class="navbar navbar-expand-sm navbar-dark bg-dark text-white fixed-top">

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

		  <div class="justify-content-center collapse navbar-collapse" id="navbarNavDropdown">

			<ul class="navbar-nav">

			  <li class="nav-item">
				<a class="nav-link lien" href="#sec-1">Accueil <span class="sr-only">(current)</span></a>
			  </li>

			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Présentation
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item lien" href="#sec-2">Formation</a>
				  <a class="dropdown-item lien" href="#sec-3">Métiers</a>
				  <a class="dropdown-item lien" href="#sec-4">Équipe</a>
				</div>
			  </li>

			  <li class="nav-item">
				<a class="nav-link lien" href="#sec-5">Galerie</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link lien" href="#sec-6">Adresse</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link lien" href="#sec-7">Contact</a>
			  </li>

			</ul>

		  </div>

		</nav>
	<!-- <?php //require_once "./inc/nav.inc.php";?> -->

	</header>

	<!-- Container principal -->
	<div id="onePage" class="container-fluid justify-content-center">

		<!-- Section 1 - Accueil -->
		<section class="container" id='sec-1'>
			<div class="row justify-content-center">
				<?php require_once "./inc/accueil.inc.php";?>
			</div>
		</section>
		
		<!-- Section 2 - Présentation Formation -->
		<section class="container" id='sec-2'>
			<div class="row justify-content-center my-4">
				<h1>Présentation de la Formation</h1>
			</div>
			<?php require_once "./inc/presFormation.inc.php"; ?>
		</section>

		<!-- Section 3 - Présentation Métiers -->
		<section class="container" id='sec-3'>
			<div class="row justify-content-center my-4">
				<h1>Métiers</h1>
			</div>
			<?php require_once "./inc/presMetiers.inc.php"; ?>
			<hr>
			<div id="titleTechnos" class="row justify-content-center my-4">
				<h1>Technos</h1>
			</div>
			<?php require_once "./inc/presTechnos.inc.php"; ?>
		</section>

		<!-- Section 4 - Présentation Equipe -->
		<section class="container" id='sec-4'>
			<div class="row justify-content-center my-4">
				<h1>Présentation de l'Équipe</h1>
			</div>
			<?php require_once "./inc/presEquipe.inc.php"; ?>
		</section>

		<!-- Section 5 - Galerie -->
		<section class="container" id='sec-5'>
			<div class="row justify-content-center my-4">
				<h1>Galerie</h1>
			</div>
			<div class="row justify-content-center">
				<?php require_once "./inc/slide.inc.php";?>
			</div>
		</section>

		<!-- Section 6 - Adresse -->
		<section class="container" id='sec-6'>
				<?php require_once "./inc/maps.inc.php"; ?>	
		</section>

		<!-- Section 7 - Contact -->
		<section class="container" id='sec-7'>
			<div class="row justify-content-center my-4">
				<h1>Contact</h1>
			</div>
				
				<div class="row justify-content-center">

					<form id="contact" class="col-sm-8 px-4 py-2 bg-dark text-white rounded">

						  <div class="form-group row justify-content-center">
							<label for="labelNotice" class="text-center">* Champs Obligatoires</label>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelNom" class="col-sm-2 col-form-label text-right">*Nom :</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control rounded" id="inputNom">
							</div>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelPrenom" class="col-sm-2 col-form-label text-right">*Prénom :</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control rounded" id="inputPrenom">
							</div>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelEmail" class="col-sm-2 col-form-label text-right">*Mail :</label>
							<div class="col-sm-8">
							  <input type="email" class="form-control rounded" id="inputEmail">
							</div>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelPhone" class="col-sm-2 col-form-label text-right">Téléphone :</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control rounded" id="inputPhone">
							</div>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelObjet" class="col-sm-2 col-form-label text-right">*Sujet :</label>
							<div class="col-sm-8">
							  <input type="text" class="form-control rounded" id="inputObjet">
							</div>
						  </div>

						  <div class="form-group row justify-content-center">
							<label for="labelMessage" class="col-12 text-center">*Message :</label>
							<textarea class="col-sm-10 form-control rounded" id="inputMessage" rows="3"></textarea>
						  </div>

					  <div class="form-row justify-content-center">
						<input id="envoi" class="btn btn-lg" type="submit" name="Envoi" value="Envoi" style="background-color: #000000; color:white">
					  </div>

					  <div id="statusFormulaire"></div>

					</form>

				</div>
			</div>
		</section>

	</div>

	<!-- footer -->
	<footer class="container-fluid bg-dark text-white">
		<div class="row text-center justify-content-around">
			<p class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Aformac Vichy</p>
			<p class="col-lg-3 col-md-3 col-sm-12 col-xs-12">&copy; Fatal-Error 2017</p>
			<p class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Maxime, Lucie &amp; Daniel</p>
		</div>
	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<!-- script Personnel -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdExR2YLhz94p7zedVkV2cYgLGPBKrv0U&callback=initMap"
    async defer></script>
	<script type="text/javascript" src="./js/script.js"></script>

  </body>
</html>