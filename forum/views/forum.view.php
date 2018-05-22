<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Stop body shaming forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	



	<div class="container-fluid home_page">
		<div class="row">

			<nav class=" col-sm-1 nav flex-column home_nav">
			  <a class="nav-link active" href="pages/connexion.php">Se connecter</a>
			  <a class="nav-link" href="pages/inscription.php">S'inscrire</a>
			  <a class="nav-link" href="pages/topics_list.php">Les derniers topics</a>
			  <a class="nav-link" href="#">Les catégories</a>
			</nav>


			<section class="col-sm-2 present_forum">
				<h4>Pourquoi ce forum?</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			</section>
			<section class="col-sm-9 home_img">

				<!--div id="myCarousel" class="carousel slide" data-ride="carousel">

					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>

					 
					  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="../css/img/melanie-wasser-233297-unsplash.jpg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="../css/img/kat-j-525336-unsplash.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="../css/img/matthew-henry-566317-unsplash.jpg" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div-->
				<button class="btn home_btn center">Accédez au forum</button>
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