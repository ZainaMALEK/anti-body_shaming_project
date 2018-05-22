<?php

class CategoryManager 
{
	public static function initializePdo() 
	{
	    
	    try 
	    {
	      require __DIR__ .'/config.php';
	      $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
	    } catch (PDOException $e) 
	    {
	      echo 'erreur : ' . $e->getMessage();
	      $bdd = null;
	    }
	    return $bdd;
	}


	public static function prepareStatement($sql)

	{
		$bdd = self::initializePdo();

		if($bdd)
		{
		
			try 
			{
				$pdoStatement = $bdd->prepare($sql);
			}
			catch(PDOException $e)
			{
				echo 'erreur : ' . $e->getMessage();
				
			}
			return $pdoStatement;
		}
	}
	
	


    public static function getCategory()
    
    {	
    	$bdd= self::initializePdo();
		$req = $bdd->query('SELECT * FROM categories');
		
		return $req;


	}


	public static function selectCategory($get_categorie)
    
    {	

		$req = self::prepareStatement('SELECT * FROM categories WHERE id=?');
		$req->execute(array($get_categorie));
		
		return $req;

		
	}
}	
	