<?php
if (isset($_GET['titre'] AND $_GET['id']) AND !empty($_GET['titre']) AND !empty($_GET['id'])) 
{	
	$get_id = htmlspecialchars($_GET['id']);
	$get_titre = htmlspecialchars($_GET['titre']);
	require __DIR__.'/../views/selected_topic.view.php';
}
else{
	die("Ce topic n'existe pas");
}
