
<!DOCTYPE html>

<html>
<head>
	<title>Exercice3</title>
</head>
<body>
	<p>
		<form action="user.php" method="GET" >
			<input type="text" name="nom">Nom</></br></br>
			<input type="text" name="prenom">Prénom</>
			<input type="submit" value="Valider" />

		</form>

		<?php 

		echo 'Bonjour '.$_GET['prenom'].' - '.$_GET['nom'].' !';

		?>
	</p>


</body>
</html>