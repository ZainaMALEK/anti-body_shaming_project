<?php
session_start();
require __DIR__ .'/../models/user.php';

if (isset($_POST['formconnexion'])) 
	{
    	if (!empty($_POST['mailconnect']) AND !empty($_POST['mdpconnect']))
		{
         $mailconnect= htmlspecialchars($_POST['mailconnect']);
		 $mdpconnect= sha1($_POST['mdpconnect']);

		 //verifier si l'utilisateur existe ($requete_user=requete sur l'utilisateur)
		 $requete_user= User::connectUser($mailconnect, $mdpconnect);
		 $userexist =$requete_user->rowCount();
		 

			if ($userexist==1) 
			{
			 	$userinfo = $requete_user->fetch();
			 	$_SESSION['id'] = $userinfo['id'];
			 	$_SESSION['username'] = $userinfo['username'];
			 	$_SESSION['email'] = $userinfo['email'];
			 	//header("Location: profil.php?id=".$_SESSION['id']);
			 	header("Location: ../index.php?id=".$_SESSION['id']);
			}
			else
			{
			 	$erreur= "Erreur d'identification";
			}

		}
		else
		{
			$erreur="Veuillez remplir tous les champs";
		}


	
	}

	if(isset($erreur))
	{
     echo $erreur;
	}

require ('../views/connexion.view.php');