<?php
session_start();

require __DIR__.'/../models/TopicManager.php';
require __DIR__.'/../models/CategoryManager.php';


if (isset($_GET['id_categorie']) AND !empty($_GET['id_categorie'])) 
{
	$categorie = htmlspecialchars($_GET['id_categorie']);
	$topicsList=TopicManager::topicsParCategorie($categorie);
	$topicList= $topicsList->fetchAll();


}
	
else
{
	die('Erreur: Aucune catégorie séléctionnée');
}


require('../views/topics_list.view.php');