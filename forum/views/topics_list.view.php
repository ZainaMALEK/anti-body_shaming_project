<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Topics du forum</title>
</head>
<body>
	
	
	
	<h1>Les topics de la catégorie " <?= $topicList[0]['cat_name'];?> "</h1>

	
	<table class="forum">
		<tr class="header">
			<th>Sujet</th>
			<th>Nombre de réponses</th>
			<th>Dernière réponse</th>
			<th>Création</th>
		</tr>

		<?php 
		var_dump($topicList);
		
		foreach ($topicList as $topics) 
		
		{?>
		<tr>
			<td>
				<!--a href="selected_topic.php?sujet=<?=$topics['sujet'];?>&id=<?=$topics['id'];?>"-->
				<a href="selected_topic.php?categorie=<?=$categorie?>&id=<?=$topics['id_topic'];?>">
				<?= $topics['sujet'] ;?>
				</a>
			</td>
			<td>Nombres de réponses</td>
			<td>Time et auteur de la dernière réponse</td>
			<td><?= $topics['created_at']; ?> par <?=$topics['username'];?></td>
			
		</tr>
	  <?php }?>

	</table>
	<a href="nouveau_topic.php?id=<?=$_SESSION['id']?>&categorie=<?= $topicList[0]['id_categorie'];?>">Créer un nouveau topic</a>

</body>
</html>