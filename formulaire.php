<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Formulaire</title>
</head>
<body>



<?php
 

$prenom = $_POST['prenom']; 
$nom = $_POST['nom'];
$email = $_POST['email']; 
$message = $_POST['message'];
$to="babacar.s@codeur.online";
$subject="Demande de congé " ;
$message1=" Votre prenom:$prenom \n Votre nom:$nom \n Votre email:$email \n Votre message:$message";


print("<center>Bonjour $prenom $nom</center>"); 
print("<center>votre email est $email <br> Le message ecrit est $message</center>");
// EnvoyerEmail($to,$subject,$message);
// $message='La demande a bien été envoyée ! ';

     $headers = 'From: babslegrands.bs@gmail.com' . "\r\n" .'Reply-To: babslegrands.bs@gmail.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
 if (mail($to, $subject, $message1, $headers)){echo ("$prenom $nom votre message a bien été envoyé ");}
 else{
echo ("$prenom $nom votre message n'a pas été envoyé ");}
?> 
</body>

</html>