<?php
require __DIR__.'/../models/TopicManager.php';
require __DIR__.'/../models/CategoryManager.php';


$topic = getTopic();

$categorie = getCategory();

/*if (isset($_GET['categorie']) AND !empty($_GET['categorie'])) 
{
	$categorie = htmlspecialchars($_GET['categorie']);


}
else
{
	die('Erreur: Aucune catégorie séléctionnée');
}
*/

require('../views/topics_list.view.php');