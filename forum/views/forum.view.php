<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The anti body shaming forum</title>
</head>
<body>
	<h1>Page d'accueil du forum</h1><br>
	<a href="connexion.php">Se connecter</a><br>
	<a href="inscription.php">S'inscrire</a><br>
	<a href="topics_list.php">Voir tous les topics</a><br><br>
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

				<h4><a href=""><?= $c['name'] ?></a></h4>
			</td>
			<td class="sub-info">Nombres de topics</td>
			<td class="sub-info">05.03.2018 à 17h18</td>
			
		</tr>
	  <?php }?>

	</table>

</body>
</html>