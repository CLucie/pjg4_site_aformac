<?php

	$ligue = $_POST['ligue'];
	$email = $_POST['email'];
	$envoi = $_POST['envoi'];
	$message = "";

	//test la ligue demandée
	if($ligue == 'Ligue1') { $message = 'PSG'; }
	elseif ($ligue == 'Ligue2') { $message = 'CLERMONT'; }

	//test l'envoi par mail
	if($envoi == 'yes') {
		
		$monRegex = "/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/";

		//test si l'adresse email est valide
		if(preg_match($monRegex, $email)) {

			$headers = 	'From: d.leger@aformac-vichy.fr' . "\r\n" .
			'Reply-To: d.leger@aformac-vichy.fr' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			$destinataire = $email;
			$sujet = 'Résultats de Ligues';
			$message = 'Le resultat de Ligue que vous avez demandé : ' . $message;

			if (mail($destinataire, $sujet, $message, $headers)) {
				$message = 'Résultats envoyés sur votre boite mail';    
				} else {
					$message = "Impossible d'envoyer votre mail";
				}

		} else {
			$message = "Votre adresse email n'est pas correctement renseignée !";
		}

	} else {
		$message = 'Resultats : ' . $message;
	}

	echo $message;

?>