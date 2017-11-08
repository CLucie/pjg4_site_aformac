<?php //vérification et envoi du mail

	//inclure des fonction annexes
	require_once './functions.inc.php';

	//si le formulaire est posté, on traite les données
	if(!empty($_POST['nom'])){
		
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$objet = htmlspecialchars($_POST['objet']);
		$message = htmlspecialchars($_POST['message']);

		//formatage
		$nom     = format_nom($nom);
		$prenom  = format_nom($prenom);
		$email   = format_email($email);
		$phone   = format_nom($phone);
		$objet   = format_objet($objet);
		$message = format_message($message);

		$monRegex = "/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/";

		//test si l'adresse email est valide
		if(preg_match($monRegex, $email)) {

			$headers = 	'From: d.leger@aformac-vichy.fr' . "\r\n" .
			'Reply-To: d.leger@aformac-vichy.fr' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

			$destinataire = $email;
			$sujet = $objet;
			$message = 'Le message posté : ' . $message . 'coordonnées de la personne:' . $phone;

			if (mail($destinataire, $sujet, $message, $headers)) {
				$message = 'Message bien pris en compte. Merci.';    
				} else {
					$message = "Impossible d'envoyer votre message";
				}

		} else {
			$message = "Votre adresse email n'est pas correctement renseignée !";
			}

	} else {
		$message = 'Message : ' . $message;
	}
	echo $message;

?>