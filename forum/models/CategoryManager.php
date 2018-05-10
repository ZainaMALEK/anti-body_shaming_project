<?php

class CategoryManager 
{
	
	


    public static function getCategory()
    
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


	public static function selectCategory($get_categorie)
    
    {	try
	    	{
	    	/*require __DIR__.'/../config.php';*/

	    	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
	    	
	    	}
		catch(Exception $e)
			{
			    die('Erreur : '.$e->getMessage());
			}

		$req = $bdd->prepare('SELECT * FROM categories WHERE id=?');
		
		$req->execute(array($get_categorie));
		//$category_exist=$req->rowCount();
	
	    //$category =$req->fetch();

		return $req;

		
	}
}	
	