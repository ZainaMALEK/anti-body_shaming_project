<?php
require('config.php');

//requête sur les topics
$topic = $bdd->query('SELECT * FROM f_topics ORDER BY id DESC');
//requête sur les catégories
$categorie = $bdd->query('SELECT * FROM categories');

/*if (isset($_GET['categorie']) AND !empty($_GET['categorie'])) 
{
	$categorie = htmlspecialchars($_GET['categorie']);


}
else
{
	die('Erreur: Aucune catégorie séléctionnée');
}
*/

require('../views/forum_topic.view.php');