<?php

$prenom = $_POST["user_firstname"];
$nom = $_POST["user_lastname"];
$sujet = $_POST["mail_subject"];
$mail = $_POST["user_email"];
$tel = $_POST["user_phone_number"];
$message = $_POST["user_message"];

echo "Merci $prenom $nom de nous avoir contacté à propos de “$sujet\”. </br>

Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $tel dans les plus brefs délais pour traiter votre demande : </br>

$message";
