	<?php
			//ouverture de la database
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=client','adminclient','lZNlB1VEdBQu05XU');
			}

			catch(Exception $e) {
				die('Erreur sur Database: ' . $e->getMessage());
			}

			// // Initialisation de la requête
			$req = 'SELECT id_contact, message FROM t_messages WHERE 1;';
			// echo 'Requete: ' . $req . '<br>';

			// Requête non préparée
			$reponse = $bdd->query($req);
			// echo 'Reponse: ' . $reponse . '<br />';

			// Requête préparée pour la non injection
			// $reponse = $bdd->prepare("SELECT nom FROM t_messages where valid=?");
			// $reponse->execute(array($valid));

			while ($donnees = $reponse->fetch()) {
				echo 	'<div class="col-2 text-center bg-secondary my-1">' .
						'<a title="Effacer le message" class="btn btn-primary"' .
						'href="./effacerligne.php?id_contact='. $donnees['id_contact'] . '"' .
						'role="button">Effacer la Ligne</a>' .
					 	'</div>' .
				 		'<div class="col-10 bg-light rounded text-left my-1">' .
				 		'<p>' . $donnees['message'] . '</p>' .
				 		'</div>';
			}

			$reponse->closeCursor();
	?>