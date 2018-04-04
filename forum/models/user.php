<?php


class user

{
	
	public function initializePdo() 
	{
	    
	    try 
	    {
	      require __DIR__ .'/../config.php';
	      $pdo = new PDO(
	        "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
	      );
	    } catch (PDOException $e) 
	    {
	      echo 'erreur : ' . $e->getMessage();
	      $pdo = null;
	    }
	    return $pdo;
	}

	public static function prepareStatement($sql)

	{
	$pdo = initializePdo();
	if($pdo)
	{
	
		try 
		{
			$pdoStatement = $pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			echo 'erreur : ' . $e->getMessage();
			
		}
		return = $pdoStatement;
	}
	
	public static function insert_user($pseudo, $mail, $mdp)

	{   
		
		$pdo_statement = prepareStatement('INSERT INTO users (username, email, password) VALUES (:username,:email,:password)');

		
		$pdo_statement->bindparam(':username', $pseudo) &&
		$pdo_statement->bindparam(':email', $mail) &&
		$pdo_statement->bindparam(':password', $mdp)&&
		$pdo_statement->execute();
		return $pdo_statement;
		
	}

} 