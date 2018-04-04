<?php

require ('../models/user.php');

if (isset($_POST['forminscription'])) 
{
	if(!empty($_POST['username']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		$pseudo = htmlspecialchars($_POST['username']);
		$mail = htmlspecialchars($_POST['mail']);
		$mdp = sha1($_POST['mdp']);
		$mdp2 = sha1($_POST['mdp2']);

		$pseudolength = strlen($pseudo);
		if ($pseudolength <= 255) 
		{
			if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
			{
				
			

				if ($mdp==$mdp2)
				{
					
					user::insert_user($pseudo, $mail, $mdp);
	

					$erreur="Votre compte a bien été créé";


				}
				else
				{
					$erreur = "Vos mots de passe ne sont pas identiques";
				}
			}
			else
			{
				$erreur = "Votre adresse mail n'est pas valide!";
			}
		}
		else 
		{
			$erreur ="Votre pseudo ne doit pas dépasser les 255 caractères";
		}
	}
	else 
	{
		$erreur = "Tous les champs doivent étre complétés";
	}
}

if (isset ($erreur))
{
	echo $erreur;
}
require ('../views/inscription.view.php');

