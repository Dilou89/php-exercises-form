##Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.
<!DOCTYPE html>
<html>
<head>

	<title>ex5</title>
</head>
<body>
	<p><?php 
		if(empty($_POST)): ?>
		<div id="formulaire">
			<form id="formulaire" action="user.php" method="POST" >
				<select name="civil" type="text">
					<option value="Madame">Madame</option>
					<option value="Monsieur">Monsieur</option>

				</select>
				<input type="text" name="nom">
				<input type="text" name="prenom"></br>
				<input type="file" name="fichier"/>

				<input type="submit" name="EnvoyerDonnees" value="Envoyer"   />
			</form>
		</div>
	<?php else:

	echo "Merci de votre inscription ".'</br>';
	echo $_POST['civil']." "
	echo $_POST['prenom']." ";
	echo $_POST['nom'].'</br>';

	echo $_POST['fichier'];
	?>

<?php endif; ?>

</p>

</body>

</html>