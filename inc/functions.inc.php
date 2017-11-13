<?php

//Vérification du nom ou prénom
function format_nom($name) {
  $name = trim(ucwords(strtolower($name)));
  return (strlen($name)>2) ? $name : null;
}

//Vérification de l'mail
function format_email($email) {
  $email = trim($email);
  return (isEmail($email)) ? $email : null;
}

//Vérification de l'objet
function format_objet($obj) {
  $obj = trim(ucfirst(strtolower($obj)));
  return (strlen($obj)>2) ? $obj : null;
}

//Vérification du message
function format_message($message) {
  $message = trim($message);
  return (strlen($message)>3) ? $message : null;
}

//Flag d'envoi (non utilisé)
function isEmail($email) {
  return true;
}

//Fonction d'envoi de mail
function envoiMail($mail, $obj, $contenu, $sender) {
  $headers =  'From: d.leger@aformac-vichy.fr' . "\r\n" .
              'Reply-To: d.leger@aformac-vichy.fr' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  //$destinataire = $mail;
  //$sujet = $obj;
  $message = "vous avez reçu un message de : " . "\r\n" .
              $sender . "\r\n" .
              $obj . "\r\n" .
              $contenu;

  if (mail($mail, $obj, $message, $headers)) {
    echo 'Votre mail a bien été envoyé';    
    } else {
      echo "Impossible d'envoyer votre mail";
    }
}


//Fonction d'enregistrement de mail en base de donnée
function recordMail($nom, $prenom, $email, $phone, $sujet, $message) {

  try{
    $bdd = new PDO('mysql:host=localhost;dbname=client','adminclient','lZNlB1VEdBQu05XU');
  }

  catch(Exception $e) {
    die('Erreur dans MySql : '.$e->getMessage());
  }

  $req = "INSERT INTO t_messages(id_contact, nom, prenom, email, phone, sujet, message) VALUES(NULL, '$nom', '$prenom', '$email', '$phone', '$sujet', '$message');";

  echo $req . "<br>";

  $bdd->exec($req);

}

?>