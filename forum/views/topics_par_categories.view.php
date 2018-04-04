<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Topics du forum par catégories</title>
</head>
<body>
	<h1>Les topics du forum</h1>
	<table class="forum">
		<tr class="header">
			<th>Sujet</th>
			<th>Messages</th>
			<th>Dernier message</th>
			<th>Création</th>
		</tr>
<!-- on va récuperer toutes les entrées de la table f_topic(forum topic) et les stoquer dans la variable $topic -->
		<?php while ($topics=$topic->fetch()){ ?>
		<tr>
			<td>
				<a href="">
				<?= $topics['sujet']; ?>
				</a>	
			</td>
			<td>22 réponses</td>
			<td>Time et auteur de la dernière réponse</td>
			<td><?= $topics['created_at']; ?></td>	
		
		</tr>

		<?php } ?>

   

	</table>

</body>
</html>