<!DOCTYPE html>
<html>
<head>
	<title>Profil de...</title>
</head>
<body>
	<h1>Profil de <?= $user_info['username']; ?></h1>
	<?php
	if ($user_info['id'] ==$_SESSION['id']) 	
	{
	?>
	<a href="#">Editer mon profil</a>	
	<!--a href="nouveau_topic.php?id=<?=$_SESSION['id']?>">Créer un topic</a-->	
	<a href="newTopic.php?id=<?=$_SESSION['id']?>">Créer un topic</a>
	<a href="deconnexion.php">Me déconnecter</a>

	<?php
	}
	?>

	


</body>
</html>