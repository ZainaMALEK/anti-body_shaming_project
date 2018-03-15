<?php
session_start();
require ('config.php');
require('../views/nouveau_topic.view.php');

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

			$ins = $bdd->prepare('INSERT INTO f_topics(sujet, contenu, notif_creator, created_at ) VALUES(?,?,?,NOW())');
			$ins ->execute(array($sujet,$contenu,$notif_mail));
		}
		else {
			$topic_error = "Votre titre ne peut dépasser 100 caractéres";
		}
	}
}


?>