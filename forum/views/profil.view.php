<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Stop body shaming forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">

	
</head>
<body>
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
      <li class="nav-item active">
         <a class="nav-link" href="">Mon Profil</a>
      </li>
    </ul>
    <span class="navbar-text">
      Stop Body Shaming Forum
    </span>
  </div>
</nav>
</header>
	<h1>Profil de <?= $user_info['username']; ?></h1>
	<?php
	if ($user_info['id'] ==$_SESSION['id']) 	
	{
	?>
	<a href="#">Editer mon profil</a>	
	
	<a href="deconnexion.php">Me déconnecter</a>
	

	<?php
	}
	?>

	


</body>
</html>