<!DOCTYPE html>
<html>
<head>
	<title>Nouveau topic</title>
</head>
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