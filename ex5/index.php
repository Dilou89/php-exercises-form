<!-- ##Exercice 2
	Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **POST**. -->
	<!DOCTYPE html>
	<html>
	<head>
		<title>ex5</title>
	</head>
	<body>
		<p>

			<form action="index.php" method="POST">
				<select name="civil" type="text">
					<option value="Madame">Madame</option>
					<option value="Monsieur">Monsieur</option>
					
				</select>
				<input type="text" name="nom">
				<input type="text" name="prenom">
				<input type="submit" value="Valider" />
			</form>


			<?php

			echo $_POST['civil']." </br>";
			echo $_POST['prenom']."</br>";
			echo $_POST['nom'];
			?>
		</p>

	</body>
	</html>