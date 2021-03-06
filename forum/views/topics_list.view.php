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

	
	<div class="container page">
	
		<h1 class="white">Les topics de la catégorie " <?= $topicList[1]['cat_name'];?> "</h1>

		<?php if(isset($_SESSION['id'])){?>
		<a href="nouveau_topic.php?id=<?=$_SESSION['id']?>&categorie=<?= $_GET['id_categorie'];?>">Créer un nouveau topic</a>
        <?php }?>
		<div class="container table-responsive">
			<table class="table table-bordered table-striped forum_topics">
				<tr class="header">
					<th>Sujet</th>
					<th>Nombre de réponses</th>
					<th>Dernière réponse</th>
					<th>Création</th>
				</tr>

				<?php 
				
				
				foreach ($topicList as $topics) 
				
				{?>
				<tr>
					<td>
						<!--a href="selected_topic.php?sujet=<?=$topics['sujet'];?>&id=<?=$topics['id'];?>"-->
						<!--a href="selected_topic.php?user=<?=$user_id?>&categorie=<?=$categorie?>&topic_id=<?=$topics['id_topic'];?>"-->
						<a href="selected_topic.php?categorie=<?=$categorie?>&topic_id=<?=$topics['id_topic']?>">



						<?= $topics['sujet'] ;?>
						</a>
					</td>
					<?php $topicId = $topics['id_topic'];
					$answerNum=AnswersManager::getAnswersNumber($topicId);?>

					<td><?=$answerNum?></td>
					<td>Time et auteur de la dernière réponse</td>
					<td><?= $topics['created_at']; ?> par <?=$topics['username'];?></td>
					
				</tr>
			  <?php }?>

			</table>
		</div>	
	
	</div>	
</body>
</html>