<?php
require __DIR__.'/../models/TopicManager.php';
require __DIR__.'/../models/CategoryManager.php';


//$topic = getTopic();
if (isset($_GET['categorie']) AND !empty($_GET['categorie']) )
{

	$categoryselected=htmlspecialchars($_GET['categorie']);

	$classified_topics=$bdd->prepare(req);
	
}
else
{
	die('Erreur: Aucune catégorie séléctionnée...');
}

require __DIR__.'/../views/topics_par_categories.view.php';
