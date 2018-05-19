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
		<div id="en_tete">
		</div>
	</header>

	<h1>Page d'accueil du forum "Parfaitement imparfaits!"</h1><br>


	<div class="container">
		<div class="row">

			<nav class=" col nav flex-column home_nav">
			  <a class="nav-link active" href="pages/connexion.php">Se connecter</a>
			  <a class="nav-link" href="pages/inscription.php">S'inscrire</a>
			  <a class="nav-link" href="pages/topics_list.php">Les derniers topics</a>
			  <a class="nav-link" href="#">Les catégories</a>
			</nav>


			<section class="col-10">
				<h4>Pourquoi ce forum?</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>

				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. <br>

				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. .</p>
			</section>
		</div>
	</div>

	<!--div class="header_forum">
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
<!- on va récuperer toutes les entrées de la table catégories et les stoquer dans la variable $c ->
		<?php while ($c=$categories->fetch()) {?>
		<tr>
			<td class="main">

				<h4><a href="pages/topics_list.php?id_categorie=<?=$c['id']?>"><?= $c['cat_name'] ?></a></h4>
			</td>
			<td class="sub-info">Nombres de topics</td>
			<td class="sub-info">05.03.2018 à 17h18</td>
			
		</tr>
	  <?php }?>

	</table-->

</body>
</html>