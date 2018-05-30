<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body class="container-fluid">
	<header class="header_page">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="categories.php">Catégories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Citations Inspirantes</a>
      </li>
      <li class="nav-item">
        <?php if (isset($_SESSION['id'])) 
          {?>
          
        <a class="nav-link" href="profil.php?id=".<?=$_SESSION['id'];?>.'"''>Mon Profil</a>
      <?php  } 
      else {?>
        <li class="nav-item active">
        <a class="nav-link" href="connexion.php">Connexion/Inscription</a>
        </li>
      <?php } ?>
      </li>
    </ul>
    <span class="navbar-text">
      Stop Body Shaming Forum
    </span>
  </div>
</nav>
</header>
<body>
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

				<h4><a href="topics_list.php?id=<?=$_SESSION['id']?>&id_categorie=<?=$c['id']?>"><?= $c['cat_name'] ?></a></h4>
			</td>
			<td class="sub-info">Nombres de topics</td>
			<td class="sub-info">05.03.2018 à 17h18</td>
			
		</tr>
	  <?php }?>

	</table>


</body>
</html>