<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Topics du forum</title>
</head>
<body>
	<h1>Les topics du forum</h1>
	<table class="forum">
		<tr class="header">
			<th>Sujet</th>
			<th>Catégorie</th>
			<th>Nombre de réponses</th>
			<th>Dernière réponse</th>
			<th>Création</th>
		</tr>
<!-- on va récuperer toutes les entrées de la table f_topic(forum topic) et les stoquer dans la variable $topic -->
		<?php while (($topics=$topic->fetch()) && ($categories = $categorie->fetch()))

		{?>
		<tr>
			<td>
				<a href="selected_topic.php?sujet=<?=$topics['sujet'];?>&id=<?=$topics['id'];?>">
				<?= $topics['sujet'] ;?>
				</a>	
			</td>
			<td><?= $categories['name']; ?></td>
			<td>Nombres de réponses</td>
			<td>Time et auteur de la dernière réponse</td>
			<td><?= $topics['created_at']; ?></td>
			
		</tr>
	  <?php }?>

	</table>

</body>
</html>