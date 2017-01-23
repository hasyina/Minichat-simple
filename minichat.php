<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="style.css"/>
		<title>Mini-chat</title>
	</head>
	<body>
		<div class="corps">
		
			<!--Formulaire -->
			<div id="formulaire">
				<h1>Mini-Chat</h1>
				<h3>		
					<a href="minichat.php">Rafraichir la page</a>
				</h3>
				<form method="POST" action="minichat_post.php">
					<fieldset>
						<legend>Votre message</legend>
						<label for="pseudo">Pseudo: </label>
						<input type="text" name="pseudo" id="pseudo"  /><br/><br/>
						<label for="message">Message:</label>
						<input type="text" name="message" id="message"/><br/><br/>
						<input type="submit" value="Envoyer"/>
					</fieldset>
				</form>
			</div>
					
	</body>
</html>