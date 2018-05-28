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
<body class="_page">
	
	<header class="header_categories">
		<h1 class="gold-text">Stop Body Shaming Forum</h1>
	</header>

<div class="container table-responsive categories_table ">
	<div class="row">
		<div class="col">

			<h1>Les catégories du forum</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-12">

			<table class=" table table-bordered ">
				<tr class="header header_categories_table">
					<th class="main gold-text">Catégories</th>
					<th class="sub-info gold-text">Nombre de topics</th>
					<th class="sub-info gold-text">Dernière réponse</th>
				</tr>
		<!-- on va récuperer toutes les entrées de la table catégories et les stoquer dans la variable $c -->
				<?php while ($c=$categories->fetch()) {?>
				<tr>
					<td class="main">

						<h4><a href="topics_list.php?id_categorie=<?=$c['id']?>"><?= $c['cat_name'] ?></a></h4>
					</td>
					<td class="sub-info">Nombres de topics</td>
					<td class="sub-info">05.03.2018 à 17h18</td>
					
				</tr>
			  <?php }?>

			</table>
		</div>
	</div>
</div> 




	
</body>
</html>