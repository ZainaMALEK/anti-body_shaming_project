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