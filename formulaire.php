
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bob;charset=utf8', 'root', '');
	
	
}
catch (Exception $e)
{
        die('Quoi de neuf docteur: ' . $e->getMessage());

}


 $age=25;

$prenom = $_POST['prenom']; 
$nom = $_POST['nom'];
$email = $_POST['email']; 
$message = $_POST['message'];
$to="babacar.s@codeur.online";
$subject="Demande de congé " ;
$message1=" Votre prenom:$prenom \n Votre nom:$nom \n Votre email:$email \n Votre message:$message";


$req = $bdd->prepare('INSERT INTO info(nom, prenom, email, age, message) VALUES(:nom, :prenom, :email, :age,  :message)');

$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'email' => $email,
	'age' => $age,
	'message' => $message
	));



print("<center>Bonjour $prenom $nom votre message a été envoyer a la base de donnée</center>"); 
//print("<center>votre email est $email <br> Le message ecrit est $message</center>");
// EnvoyerEmail($to,$subject,$message);
// $message='La demande a bien été envoyée ! ';

 //    $headers = 'From: babslegrands.bs@gmail.com' . "\r\n" .'Reply-To: babslegrands.bs@gmail.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
 //if (mail($to, $subject, $message1, $headers)){echo ("$prenom $nom votre message a bien été envoyé ");}
 //else{
//echo ("$prenom $nom votre message n'a pas été envoyé ");}




?> 
