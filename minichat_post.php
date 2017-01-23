<?php
if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['message']))
{
	//Creation de cookie
	setcookie('nom',htmlspecialchars($_POST['pseudo']),time() + 365*24*3600);
	header('Location:minichat.php');
	
	//Connexion BD
	try
	{
		$bdd=new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Ecxeption $e)
	{
		die('Erreur :'.$e->getMessage());
	}
	
	//Requete insertion donnees
	$req=$bdd->prepare('INSERT INTO minichat(pseudo,message,date_creation) VALUES(:pseudo,:message,NOW())');
	$req->execute(array(
	'pseudo'=>htmlspecialchars( ucfirst(strtolower($_POST['pseudo']))),
	'message'=>htmlspecialchars(ucfirst($_POST['message']))));
	
	//Redirection page
	header('Location:minichat.php');
	$req->closeCursor();
}
else
{
	header('Location:minichat.php');
}
?>
