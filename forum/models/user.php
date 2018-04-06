<?php


class user

{
	
	public static function initializePdo() 
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
	$pdo = self::initializePdo();
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
		return $pdoStatement;
	}
	}
	
	public static function insert_user($pseudo, $mail, $mdp)

	{   
	try
	{
		$pdo_statement = self::prepareStatement('INSERT INTO users (username, email, password) VALUES (:username,:email,:password)');

		
		$pdo_statement->bindparam(':username', $pseudo) &&
		$pdo_statement->bindparam(':email', $mail) &&
		$pdo_statement->bindparam(':password', $mdp)&&
		$pdo_statement->execute();
	}
	catch(PDOException $e)
	{ $e->getMessage();
	} 

		return $pdo_statement;
	}
		
	

	public static function profil_user()

	{

	$getid = intval($_GET['id']);
	$requete_user = self::prepareStatement('SELECT * FROM users WHERE id =?');
	$requete_user->execute(array($getid));
	$user_info = $requete_user->fetch();
	return $user_info;
	
	}

	public static function connect_user()

	{   
		$mailconnect= htmlspecialchars($_POST['mailconnect']);
		$mdpconnect= sha1($_POST['mdpconnect']);
		$requete_user = self::prepareStatement('SELECT * FROM users WHERE email=? AND password=?');

		$requete_user->execute(array($mailconnect, $mdpconnect));
		return $requete_user;
	}

} 