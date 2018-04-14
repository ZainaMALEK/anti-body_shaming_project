<?php

function getTopic ()
{
try
	{
	/*require __DIR__.'/../config.php';*/

	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	
	}
catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}

$getTopic = $bdd->query('SELECT * FROM f_topics ORDER BY id DESC');
return $getTopic;
}


function selected_topic()
{
	try
	{
	/*require __DIR__.'/../config.php';*/

	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	
	}
catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	$get_id = null;

	$topic = $bdd->prepare('SELECT * FROM f_topics WHERE id=?');
	$topic->execute(array($get_id));
	$topic= $topic->fetch();
	return $topic;
}