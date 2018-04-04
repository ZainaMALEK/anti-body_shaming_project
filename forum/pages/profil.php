<?php
session_start();
require __DIR__.'/../models/DBConnect.php';
$bdd = DBConnect();


if (isset($_GET['id']) AND $_GET['id']>0) 
{
	$getid = intval($_GET['id']);//intval va convertir l'id en chiffre si il n'en est pas un.C'est pour securiser l'id.
	$requete_user= $bdd->prepare('SELECT * FROM users WHERE id =?');
	$requete_user->execute(array($getid));
	$user_info = $requete_user->fetch();


}
require ('../views/profil.view.php');