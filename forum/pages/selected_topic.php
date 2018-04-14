<?php

if (isset($_GET['sujet'],$_GET['id']) AND !empty($_GET['sujet']) AND !empty($_GET['id']))
{	
	$get_id = htmlspecialchars($_GET['id']);
	$get_sujet = htmlspecialchars($_GET['sujet']);

	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	$titleselected= $bdd->prepare('SELECT sujet FROM f_topics WHERE id=?');
	$titleselected->execute(array($get_id));
	$title_selected= $titleselected->fetch()['sujet'];

	if ($get_sujet==$title_selected) 

	{
		
		$topic = $bdd->prepare('SELECT * FROM f_topics WHERE id=?');
		$topic->execute(array($get_id));
		$topic= $topic->fetch();
	require __DIR__.'/../views/selected_topic.view.php';
	}
	else
	 {
	 	echo "erreur";
	 }
}

else

{
	die("Ce topic n'existe pas");

}
