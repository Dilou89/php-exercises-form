<!-- ##Exercice 8
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**.
-->
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
				<label>Nom</label><input type="text" name="nom" value="Michel">
				<label>Prénom</label><input type="text" name="prenom" value="Dupont"></br>
				<label for="fichier" >fichier pdf</label><input type="file" name="fichier"/>

				<input type="submit" name="EnvoyerDonnees" value="Envoyer"   />
			</form>
		</div>

		
	<?php else:

	echo "Merci de votre inscription ".'</br>';
	echo $_POST['civil']." ";
	echo $_POST['prenom']." ";
	echo $_POST['nom']."</br></br>";	
	if(explode(".",$_POST['fichier'])[1]==="pdf")
		{ echo"C'est bien un pdf";

}
else{
	echo "veuillez changer de format de fichier";
}
?>


<?php endif; ?>

</p>


</body>

</html>