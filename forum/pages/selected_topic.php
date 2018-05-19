<?php
session_start();
require __DIR__.'/../models/AnswersManager.php';
require __DIR__.'/../models/User.php';
require __DIR__.'/../models/TopicManager.php';

$user_id = htmlspecialchars($_GET['user']);
$topic_id = htmlspecialchars($_GET['topic_id']);
$answers = AnswersManager::getAllAnswers($topic_id);
$user_info = User::userInfo($user_id);
        

if ($_GET['user']==$_SESSION['id'])
{
	
	if (isset($_POST['topic_answer'],$_POST['topic_answer_submit']) AND !empty($_POST['topic_answer'])) {
		
		$topic_answer = htmlspecialchars($_POST['topic_answer']);

        AnswersManager::createAnswer($user_id,$topic_id,$topic_answer);    

	}
	else
	{
		$answer_msg = "Votre réponse ne peut pas être vide...";
	}
}
else
{
	$answer_msg = "Veuillez vous connecter pour pouvoir répondre à un topic";
}

if (isset($_GET['topic_id'], $_GET['categorie']) AND!empty($_GET['topic_id'])AND !empty($_GET['categorie']))
{	
	
	$get_categorie = htmlspecialchars($_GET['categorie']);
	
    $topic= TopicManager::selectedTopic($topic_id, $get_categorie);
	
	
}

else

{
	die("Ce topic n'existe pas");

}

require __DIR__.'/../views/selected_topic.view.php';
