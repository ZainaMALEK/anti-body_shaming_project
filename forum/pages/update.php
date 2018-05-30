<?php
session_start();
require __DIR__.'/../models/TopicManager.php';
require __DIR__.'/../models/CategoryManager.php';
echo $_SESSION['id'];

if (isset($_GET['id_topic'])) {
	$get_id=htmlspecialchars($_GET['id_topic']);
	$id_createur=htmlspecialchars($_SESSION['id']);
	$topic=TopicManager::SelectTopic($get_id);

	$sujet=$topic['sujet'];
	$contenu=$topic['contenu'];

	if (isset($_POST['topic_update']))  
	{
		
	
	TopicManager::Update($get_id,$sujet,$contenu,$id_createur);
	echo "Topic édité";
	}	
	else
	{
		echo "Une erreur s'est produite";
	
	}	

	if (isset($_POST['topic_delete'])) 
	{
		TopicManager::Delete($get_id);
		echo "suppression réussie";
	}
}

require __DIR__.'/../views/update.view.php';
