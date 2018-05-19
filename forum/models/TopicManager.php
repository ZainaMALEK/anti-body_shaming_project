<?php

class TopicManager
{

	public static function getTopic ()
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


	public static function SelectTopic()
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

	public static function getTopicsList($categorie)
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

	$getTopicsList = $bdd->prepare('SELECT * FROM f_topics, categories, users WHERE f_topics.id_categorie=categories.id AND f_topics.id_createur=users.id ORDER BY f_topics.id_categorie DESC');
	$getTopicsList->execute(array($categorie));
	return $getTopicsList;

	}

	public static function topicsParCategorie($categorie)
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
 	
	$getTopicsList = $bdd->prepare('SELECT * FROM f_topics, categories, users WHERE f_topics.id_categorie=categories.id AND id_categorie=:id_categorie AND f_topics.id_createur=users.id');

	$getTopicsList->bindParam(
		':id_categorie',$categorie);
	$getTopicsList->execute();
	return $getTopicsList;
	}


	public static function InsertTopic($sujet, $contenu, $get_categorie,$idUser, $notif_mail)
	{
		

		$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');

		$ins = $bdd->prepare('INSERT INTO f_topics(sujet,contenu,id_categorie,id_createur, notif_creator,created_at ) VALUES(?,?,?,?,?,NOW())');
		$ins->execute(array($sujet,$contenu,$get_categorie,$idUser,$notif_mail));
		return $ins;
	}

	public static function selectedTopic($topic_id, $get_categorie)
	{
	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	$topicselected= $bdd->prepare('SELECT * FROM f_topics WHERE id_topic=:id_topic AND id_categorie=:id_categorie');
	$topicselected->bindParam(':id_topic', $topic_id);
	$topicselected->bindParam(':id_categorie', $get_categorie);
	$topicselected->execute();
	//$topicselected->execute(array($topic_id,$get_categorie));
	$topic= $topicselected->fetch();
	return $topic;
	}
}