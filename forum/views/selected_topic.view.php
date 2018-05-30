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
	<h1>Topic selectionné</h1>


    	<div class="container">
    		<div class="row">

				<table>
				
					<thead>
					<tr>
						<th>Sujet: <?=$topic['sujet']; ?></th>
					</tr>
					</thead>
					
					<tr>
						<td><?=$topic['contenu']; ?></td>
					</tr>
					
				</table>
				<?php if (isset($_SESSION['id']) AND $_SESSION['id']=$topic['id_createur']) {?>	
				<a href="update.php?id_topic=<?=$topic['id_topic']?>">Modifier ce topic</a>
				<a href="">Supprimer ce topic</a>
				<?php } ?>
			</div>

			<div class="row">


					
				<form method="POST" action="" >
					<textarea placeholder="Votre réponse" name="topic_answer"></textarea><br>
					<input type="submit" name="topic_answer_submit" value="Envoyer ma réponse">
				

				<?php 
				if (isset($answer_msg))
				{
					echo $answer_msg;
				}
				?>
				</form>
			</div>
			
			<div class="row">
			
				
		

				<table class="table table-responsive ">
				<?php	foreach ($answers as $answer) { ?>
					<tr><?php 

						$user_id= $answer['author_id'];
						$user_info = User::userInfo($user_id);?>

						<td><?=$user_info['username'];?> a répondu : <br><?=$answer['answer'];?></td>

						<?php if (isset($_SESSION['id']) AND $_SESSION['id']=$answer['author_id']) {?>
						<td><a href="">Modifier ma réponse</a></td>
						<td><a href="">Supprimer ma réponse</a></td>
						
					<?php	} ?>
					</tr>
					<?php } ?>
					
						
					
				</table>
			

				
			</div>
		</div>
</body>
</html>