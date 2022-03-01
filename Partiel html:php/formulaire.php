<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="formulaire.css">
	<title>Jazz Manouche</title>
</head>
<body>
	<nav>
		<ul>
			<li><img src="img/logoM.png"></li>
			<li id="espace"><a href="index.php">ACCUEIL</a></li>
			<li class="navspace"><a href="#">FAQ</a></li>
			<li class="navspace"><a href="#">CONTACT</a></li>
		</ul>
	</nav>

	<main>
		<div id="background">
			<img id="feuille" src="img/feuille.png">
			<img id="instru" src="img/instruments.png">
		</div>

		<h1>Jazz Manouche</h1>
		<h2>Musique Festival</h2>
		<h3>Préinscription :</h3>

		<form action="info.php" method="POST">
			<div>
				<label>Nom <span>*</span></label>
				<input type="text" name="nom">
			</div>
			<div>
				<label>Prénom <span>*</span></label>
				<input type="text" name="prenom">
			</div>
			<div>
				<label>Mail <span>*</span></label>
				<input type="email" name="mail">
			</div>
			<div>
				<label>Téléphone <span>*</span></label>
				<input type="tel" name="tel">
			</div>
			<div>
				<label>Numéro et rue<span>*</span></label>
				<input type="text" name="adresse">
			</div>
			<div>
				<label>Ville <span>*</span></label>
				<input type="text" name="ville">
			</div>
			<div>
				<label>Code Postal <span>*</span></label>
				<input type="text" name="cp">
			</div>
			<div>
				<input id="bouton" type="submit" name="" value="JE M'ENREGISTRE">
			</div>
			<p><span>*</span> champs obligatoires</p>
		</form>

		<p id="condi">Chaque concert est sur préinscription et sous réserve de disponibilité du 01/02/2022 au 01/07/2022 auprès de New Morning club de jazz situé dans le 10ème arrondissement de la ville de Paris</p>
	</main>

	<footer>
		<div>
			<a href="instagram.com"><img src="Réseaux/insta.png"></a>
			<a href="facebook.com"><img src="Réseaux/facebook.png"></a>
			<a href="twitter.com"><img src="Réseaux/twitter.png"></a>
			<a href="whatsapp.com"><img src="Réseaux/whatsapp.png"></a>
		</div>
		<div>
			<a href="#">Contact</a>
			<a href="#">FAQ</a>
			<a href="#">Mentions légales</a>
			<a href="#">CGU</a>
		</div>
		<img id="feuille1" src="img/feuille.png">
		<img id="feuille2" src="img/feuille.png">
	</footer>
</body>
</html>