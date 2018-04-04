<?php


    function getCategory()
    
    {	try
	    	{
	    	/*require __DIR__.'/../config.php';*/

	    	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	    	
	    	}
		catch(Exception $e)
			{
			    die('Erreur : '.$e->getMessage());
			}

		$req = $bdd->query('SELECT * FROM categories');

		return $req;
	}
	
	
	