<?php
session_start();

require __DIR__.'/../models/CategoryManager.php';


if (isset($_GET['categorie']) AND !empty($_GET['categorie']))
{
	$get_categorie=htmlspecialchars($_GET['categorie']);

	$category = CategoryManager::selectCategory($get_categorie);

    $catExist=$category->rowCount();
	
	$cat =$category->fetch();


	if ($catExist==1) 
	{
		

		$categorie= $cat['cat_name'];

		if (isset($_GET['id']) AND !empty($_GET['id']))
		{
			require('../views/nouveau_topic.view.php');

			if (isset($_GET['id'])==$_SESSION['id']) 
			{

				
				require __DIR__.'/../models/TopicManager.php';
				
				$idUser = $_GET['id'];

				if(isset($_POST['topic_submit']))
				{
					if(isset($_POST['topic_sujet'], $_POST['topic_contenu']))
					{

						$sujet=htmlspecialchars($_POST['topic_sujet']);
						$contenu=htmlspecialchars($_POST['topic_contenu']);

						if (strlen($sujet) <=100) 
						{
						

							if( isset($_POST['topic_mail'])){
								$notif_mail = 1;
							}else {
								$notif_mail = 0;
							}
							// fonction pr insertion

							TopicManager::insertTopic($sujet, $contenu, $get_categorie,$idUser, $notif_mail);

						}
						else 
						{
							$topic_error = "Votre titre ne peut dépasser 100 caractères";
						}
					}
				}
	
			}
		
		}
		else
		{
			echo "Vos devez vous connecter pour pouvoir poster un topic";
		}

	}
	else
	{
		echo "Cette catégorie n'existe pas";
	}
	
}
else
{
	echo "Aucune catégorie définie";
}
