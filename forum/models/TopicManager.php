<?php

class TopicManager
{

	public static function initializePdo() 
	{
	    
	    try 
	    {
	      require __DIR__ .'/config.php';
	      $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
	    } catch (PDOException $e) 
	    {
	      echo 'erreur : ' . $e->getMessage();
	      $bdd = null;
	    }
	    return $bdd;
	}


	public static function prepareStatement($sql)

	{
		$bdd = self::initializePdo();

		if($bdd)
		{
		
			try 
			{
				$pdoStatement = $bdd->prepare($sql);
			}
			catch(PDOException $e)
			{
				echo 'erreur : ' . $e->getMessage();
				
			}
			return $pdoStatement;
		}
	}


	/*public static function getTopic ()
	{
	
		
		$getTopic = $bdd->query('SELECT * FROM f_topics ORDER BY id DESC');
		return $getTopic;
	}*/


	public static function SelectTopic()
	{
		
		$get_id = null;
		$topic = self::prepareStatement('SELECT * FROM f_topics WHERE id=?');
		$topic->execute(array($get_id));
		$topic= $topic->fetch();

		return $topic;
	}

	public static function getTopicsList($categorie)
	{
		
		$getTopicsList = self::prepareStatement('SELECT * FROM f_topics, categories, users WHERE f_topics.id_categorie=categories.id AND f_topics.id_createur=users.id ORDER BY f_topics.id_categorie DESC');
		$getTopicsList->execute(array($categorie));

		return $getTopicsList;

	}

	public static function topicsParCategorie($categorie)
	{
		
		$getTopicsList =  self::prepareStatement('SELECT * FROM f_topics, categories, users WHERE f_topics.id_categorie=categories.id AND id_categorie=:id_categorie AND f_topics.id_createur=users.id');

		$getTopicsList->bindParam(
			':id_categorie',$categorie);
		$getTopicsList->execute();

		return $getTopicsList;
	}


	public static function InsertTopic($sujet, $contenu, $get_categorie,$idUser, $notif_mail)
	{

		$ins = self::prepareStatement('INSERT INTO f_topics(sujet,contenu,id_categorie,id_createur, notif_creator,created_at ) VALUES(?,?,?,?,?,NOW())');
		$ins->execute(array($sujet,$contenu,$get_categorie,$idUser,$notif_mail));
		return $ins;
	}

	public static function selectedTopic($topic_id, $get_categorie)
	{
	
		$topicselected= self::prepareStatement('SELECT * FROM f_topics WHERE id_topic=:id_topic AND id_categorie=:id_categorie');
		$topicselected->bindParam(':id_topic', $topic_id);
		$topicselected->bindParam(':id_categorie', $get_categorie);
		$topicselected->execute();
		$topic= $topicselected->fetch();
		
		return $topic;
	}
}