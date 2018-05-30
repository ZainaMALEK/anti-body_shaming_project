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
      		
        <a class="nav-link" href="#">Mon Profil</a>
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
<body class="_page">
	<h3>Tous les topics</h3>
	
	
	
		
		<div class="container table-responsive">
			<table class="table table-bordered table-striped forum_topics">
				<tr class="header">
					<th>Sujet</th>
					<th>Nombre de réponses</th>
					
					<th>Création</th>
				</tr>

				<?php 
				
				
				foreach ($allTopics as $allTopic) 
				
				{?>
				<tr>
					<td>
						
						<a href="selected_topic.php?categorie=<?=$allTopic['id_categorie'];?>&topic_id=<?=$allTopic['id_topic']?>">



						<?= $allTopic['sujet'] ;?>
						</a>
					</td>
					<td><?php 
						$topic_id= $allTopic['id_topic'];
						$answersNum=AnswersManager::getAnswersNumber($topic_id); 
						?>
					<?=$answersNum;?></td>
					
					<?php 
					
					//$userInfo=User::username($topic_id);
					?>
					<td><?= $allTopic['created_at']; ?> par <?=$userInfo['username'];?></td>
					
					
				</tr>
			  <?php }?>

			</table>
		</div>	
	
	
</body>
</html>