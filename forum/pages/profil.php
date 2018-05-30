<?php
session_start();
require __DIR__.'/../models/User.php';





//if (isset($_GET['user_id']) AND $_GET['user_id'] > 0) 
if (isset($_SESSION['id']) ){
	


	$user_id=$_SESSION['id'];
	$user_info = User::userInfo($user_id);


}
require ('../views/profil.view.php');