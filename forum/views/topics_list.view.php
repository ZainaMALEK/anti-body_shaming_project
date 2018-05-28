<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Topics du forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="_page">
	<header class="header_categories">
		<h1 class="gold-text">Stop Body Shaming Forum</h1>
	</header>
	
	<div class="container page">
	
		<h1 class="white">Les topics de la catégorie " <?= $topicList[1]['cat_name'];?> "</h1>
		<a href="nouveau_topic.php?id=<?=$_SESSION['id']?>&categorie=<?= $topicList[1]['id_categorie'];?>">Créer un nouveau topic</a>

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
					<td>Nombres de réponses</td>
					<td>Time et auteur de la dernière réponse</td>
					<td><?= $topics['created_at']; ?> par <?=$topics['username'];?></td>
					
				</tr>
			  <?php }?>

			</table>
		</div>	
	
	</div>	
</body>
</html>