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

	<form method="POST" action="">
		<table>
			<tr class="header">
				<th>Editez votre topic</th>
				<th></th>
			</tr>
			<!--tr>
				<td>Categorie</td>
				<td><?=$categorie ?></td>
			</tr-->
			<tr>
				<td>Modifier le sujet</td>
				<td><input type="text" name="topic_sujet" maxlength="100" placeholder="<?=$topic['sujet'];?>"></td>
			</tr>
		
			<tr>
				<td>Modifier le contenu</td>
				<td><textarea name="topic_contenu"><?=$topic['contenu'];?></textarea></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="topic_update" value="Editer ce topic"></td>
				<td colspan="2"><input type="submit" name="topic_delete" value="Supprimer ce topic"></td>
			</tr>

			<?php if(isset($error)) 
			   { ?>

			<tr>
				<td colspan="2">
					<?= $topic_error ?>
				</td>
			
			</tr>
				<?php } ?>

		</table>
	</form>

</body>
</html>