<?php
require __DIR__.'/../models/User.php';
require __DIR__.'/../models/TopicManager.php';
require __DIR__.'/../models/AnswersManager.php';
$topic_id=null;

$allTopics= TopicManager::getAllTopics();
//$answersNum=AnswersManager::getAnswersNumber($topic_id); 
$userInfo=User::username($topic_id);


require __DIR__.'/../views/allTopics.view.php';
