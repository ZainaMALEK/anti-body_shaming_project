<?php
session_start();
require __DIR__.'/../models/user.php';





if (isset($_GET['id']) AND $_GET['id'] > 0) 
{
	$user_info = user::profil_user();

}
require ('../views/profil.view.php');