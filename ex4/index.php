<!-- ##Exercice 2
	Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**. -->
	<!DOCTYPE html>
	<html>
	<head>
		<title>formulaire2</title>
	</head>
	<body>
		<p>
			<form action="user.php" method="POST">
				<input type="text" name="nom">
				<input type="text" name="prenom">
				<input type="submit" value="Valider" />
			</form>
			<?php 


			echo 'Bonjour ,'.$_POST['prenom'].' '.$_POST['nom'].' !';

			?>
		</p>

	</body>
	</html>