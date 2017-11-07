<?php

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$objet = htmlspecialchars($_POST['objet']);
	$message = htmlspecialchars($_POST['message']);

	// $nom = $_POST['inputNom'];
	// $prenom = $_POST['prenom'];
	// $email = $_POST['email'];
	// $phone = $_POST['phone'];
	// $objet = $_POST['objet'];
	// $message = $_POST['message'];

	echo "nom:" . $nom ;
	echo "prenom:" . $prenom ;
	echo "email:" . $email ;
	echo "phone:" . $phone ;
	echo "objet:" . $objet ;
	echo "message:" . $message ;

?>