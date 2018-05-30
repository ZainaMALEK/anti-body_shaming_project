<?php
session_start();
require __DIR__.'/../models/AnswersManager.php';
require __DIR__.'/../models/User.php';
require __DIR__.'/../models/TopicManager.php';

//$user_id = htmlspecialchars($_GET['user']);
$topic_id = htmlspecialchars($_GET['topic_id']);

$answers = AnswersManager::getAllAnswers($topic_id);


        


if (isset($_SESSION['id'])) 
	

{
	
	if (isset($_POST['topic_answer'],$_POST['topic_answer_submit']) AND !empty($_POST['topic_answer'])) 
	{
		
		$topic_answer = htmlspecialchars($_POST['topic_answer']);

    	AnswersManager::createAnswer($_SESSION['id'],$topic_id,$topic_answer);    

	}
	
}
else
{
	$answer_msg = "Veuillez vous connecter pour pouvoir répondre à un topic";
}


	
	$get_categorie = htmlspecialchars($_GET['categorie']);
	$topic_id = htmlspecialchars($_GET['topic_id']);
	
    $topic= TopicManager::selectedTopic($get_categorie, $topic_id);


	


require __DIR__.'/../views/selected_topic.view.php';
