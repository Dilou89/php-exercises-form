<!-- ##Exercice 1
	Créer un formulaire demandant **le nom** et **le prénom**. Ce formulaire doit rediriger vers la page **user.php** avec la méthode **GET**. -->
	<!DOCTYPE html>

	<html>
	<head>
		<title>Formulaire</title>
	</head>
	<body>
		<p>
			<form action="user.php" method="GET">
				<input type="text" name="nom">Nom</></br></br>
				<input type="text" name="prenom">Prénom</>
				<input type="submit" value="Valider" />

			</form>
		</p>


	</body>
	</html>