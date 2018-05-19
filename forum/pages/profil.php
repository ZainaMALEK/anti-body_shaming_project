<?php
session_start();
require __DIR__.'/../models/User.php';





if (isset($_GET['id']) AND $_GET['id'] > 0) 
{	
	$user_id = intval($_GET['id']);
	$user_info = User::userInfo($user_id);

}
require ('../views/profil.view.php');