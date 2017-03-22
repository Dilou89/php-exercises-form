<!-- ##Exercice 6
Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  
Utiliser qu'une seule page. -->
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
				<input type="text" name="prenom">
				<input type="submit" name="EnvoyerDonnees" value="Envoyer"   />
			</form>
		</div>
	<?php else:

	echo "Merci de votre inscription ".'</br>';
	echo $_POST['civil']." </br>";
	echo $_POST['prenom']."</br>";
	echo $_POST['nom'];
	?>

<?php endif; ?>

</p>

</body>

</html>