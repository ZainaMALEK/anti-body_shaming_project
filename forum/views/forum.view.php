<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>The anti body shaming forum</title>
</head>
<body>

	<header>
		<div class="header-title">
		</div>
	</header>
	<div class="header_forum">
	<h1>Page d'accueil du forum "Parfaitement imparfaits!"</h1><br>
	<a href="pages/connexion.php">Se connecter</a><br>
	<a href="pages/inscription.php">S'inscrire</a><br>
	<a href="pages/topics_list.php">Voir tous les topics</a><br>
	<br>
    </div>
	<table class="forum">
		<tr class="header">
			<th class="main">Catégories</th>
			<th class="sub-info">Nombre de topics</th>
			<th class="sub-info">Dernière réponse</th>
		</tr>
<!-- on va récuperer toutes les entrées de la table catégories et les stoquer dans la variable $c -->
		<?php while ($c=$categories->fetch()) {?>
		<tr>
			<td class="main">

				<h4><a href="pages/topics_list.php?id_categorie=<?=$c['id']?>"><?= $c['cat_name'] ?></a></h4>
			</td>
			<td class="sub-info">Nombres de topics</td>
			<td class="sub-info">05.03.2018 à 17h18</td>
			
		</tr>
	  <?php }?>

	</table>

</body>
</html>