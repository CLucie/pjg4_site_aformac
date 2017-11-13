<?php

	//ouverture de la database
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=client','adminclient','lZNlB1VEdBQu05XU');
	}

	catch(Exception $e) {
		die('Erreur sur Database: ' . $e->getMessage());
	}

	//procédure de suppression
	// // Initialisation de la requête
	$req = "DELETE from t_messages WHERE id_contact = " . $_GET['id_contact'] . ";";
	echo 'Requete: ' . $req . '<br>';

	// Requête non préparée
	$reponse = $bdd->exec($req);
	echo 'Reponse: ' . $reponse . '<br />';

?>