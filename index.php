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

		<nav id="nav1" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
		  
		  <div class="container collapse navbar-collapse justify-content-center" id="navbarNavDropdown">

			<ul class="navbar-nav">

			  <li class="nav-item">
				<a class="nav-link text-white lien" href="#sec-1">Accueil <span class="sr-only">(current)</span></a>
			  </li>

			  <li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Présentation
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item lien" href="#sec-2">Formation</a>
				  <a class="dropdown-item lien" href="#sec-3">Métiers</a>
				  <a class="dropdown-item lien" href="#sec-4">Équipe</a>
				</div>
			  </li>

			  <li class="nav-item">
				<a class="nav-link text-white lien" href="#sec-5">Galerie</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link text-white lien" href="#sec-6">Adresse</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link text-white lien" href="#sec-7">Contact</a>
			  </li>

			</ul>

		  </div>

		</nav>
		<?php require_once "./inc/nav.inc.php";?>

	</header>

	<!-- Container principal -->
	<div id="onePage" class="container-fluid justify-content-center">

		<!-- Section 1 - Accueil -->
		<section class="container-fluid" id='sec-1'>
			<!-- <div class="text-center"><h1>Accueil</h1></div> -->
			<div class="row justify-content-center">
				<?php require_once "./inc/accueil.inc.php";?>
			</div>
			
		</section>
		
		<!-- Section 2 - Présentation Formation -->
		<section class="container-fluid" id='sec-2'>
			<div class="text-center"><h1>Présentation de la Formation</h1></div>
			<?php require_once "./inc/presFormation.inc.php"; ?>
		</section>

		<!-- Section 3 - Présentation Métiers -->
		<section class="container-fluid" id='sec-3'>
			<div class="text-center"><h1>Métiers</h1></div>
			<?php require_once "./inc/presMetiers.inc.php"; ?>
			
			<div class="text-center"><h1>Technos</h1></div>
			<?php require_once "./inc/presTechnos.inc.php"; ?>
		</section>

		<!-- Section 4 - Présentation Equipe -->
		<section class="container-fluid" id='sec-4'>
			<div class="text-center"><h1>Présentation de l'Équipe</h1></div>
			<?php require_once "./inc/presEquipe.inc.php"; ?>
		</section>

		<!-- Section 5 - Galerie -->
		<section class="container-fluid" id='sec-5'>
			<div class="text-center"><h1>Galerie</h1></div>
				<?php require_once "./inc/slide.inc.php";?>
		</section>

		<!-- Section 6 - Adresse -->
		<section class="" id='sec-6'>
			<!-- <div class="text-center"><h1>Adresse</h1></div> -->
				<?php require_once "./inc/maps.inc.php"; ?>			
		</section>

		<!-- Section 7 - Contact -->
		<section class="container-fluid bg-info" id='sec-7'>
			<div class="container bg-danger">
				<?php
					//Apple du fichier contenant les fonctions de traitement du formulaire
					require_once './inc/functions_inc.php';

					//si le formulaire est posté, on traite les données
					if(!empty($_POST['inputNom'])){
						$nom = htmlspecialchars($_POST['inputNom']);
						$prenom = htmlspecialchars($_POST['inputPrenom']);
						$email = htmlspecialchars($_POST['inputEmail']);
						$objet = htmlspecialchars($_POST['inputObjet']);
						$message = htmlspecialchars($_POST['inputMessage']);

						$nom     = format_nom($nom);
						$prenom  = format_prenom($prenom);
						$email   = format_email($email);
						$objet   = format_objet($objet);
						$message = format_message($message);

						//Si toutes les variables sont définies, on envoie le mail
						if($nom != null && $email != null && $objet != null && $message != null) {
							//envoiMail($email,$objet,$message,$nom);
							echo ("envoi du mail");
						}
					}
				?>
	 			<!-- 1° Vérifier avec JS que le formulaire est correctement rempli -->
				<!-- 2° Envoyer en AJAX au PHP -->
				<!-- 3° Vérifier dans PHP que le formulaire est correct -->
				<!-- 4° Envoyer le mail -->

				
				<h1 class="text-center">Contact</h1>
				
				<div class="row bg-primary">

						<form id="contact" class="px-5 py-2 bg-dark rounded">

						  <div class="form-group text-center m-0 row">
							<label for="labelNotice" class="text-white text-center">* Champs Obligatoires</label>
						  </div>

						  <div class="form-group row">
							<label for="labelNom" class="col-form-label text-white text-right">*Nom :</label>
							<div class="">
							  <input type="text" class="form-control rounded" id="inputNom">
							</div>
						  </div>

						  <div class="form-group row">
							<label for="labelPrenom" class="col-form-label text-white text-right">*Prénom :</label>
							<div class="">
							  <input type="text" class="form-control rounded" id="inputPrenom">
							</div>
						  </div>

						  <div class="form-group row">
							<label for="labelEmail" class="col-form-label text-white text-right">*Mail :</label>
							<div class="">
							  <input type="email" class="form-control rounded" id="inputEmail">
							</div>
						  </div>

						  <div class="form-group row">
							<label for="labelPhone" class="col-form-label text-white text-right">Téléphone :</label>
							<div class="">
							  <input type="text" class="form-control rounded" id="inputPhone">
							</div>
						  </div>

						  <div class="form-group row">
							<label for="labelObjet" class="col-form-label text-white text-right">*Sujet :</label>
							<div class="">
							  <input type="text" class="form-control rounded" id="inputObjet">
							</div>
						  </div>

						  <div class="form-group text-center">
							<label for="labelMessage" class="text-white text-center">*Message :</label>
							<textarea class="form-control rounded" id="inputMessage" rows="3"></textarea>
						  </div>

						  <div class="form-group m-0 text-center">
							<input id="envoi" class="btn btn-lg text-white" type="submit" name="Envoi" value="Envoi" style="background-color: #000000">
						  </div>
						
						</form>

						<div id="statusFormulaire"></div>

					</div>
				</div>
		</section>

	</div>

	<!-- footer -->
	<footer class="bg-dark text-white">
		<div class="text-center">
			<p>Ceci est le footer</p>
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