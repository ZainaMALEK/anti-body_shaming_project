<?php


class User

{
	
	private static function initializePdo() 
	{
	    
	    try 
	    {
	      require __DIR__ .'/config.php';
	      $pdo = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password);
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
	
	public static function insertUser($pseudo, $mail, $mdp)

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
		
	

	public static function userInfo($user_id)

	{

		$requete_user = self::prepareStatement('SELECT * FROM users WHERE id =:user_id');
		$requete_user->bindParam(':user_id',$user_id);
		$requete_user->execute();
		$user_info = $requete_user->fetch();
		return $user_info;
	
	}

	public static function connectUser($mailconnect, $mdpconnect)

	{   
	
		$requete_user = self::prepareStatement('SELECT * FROM users WHERE email=:email AND password=:password');
		$requete_user->bindParam('email', $mailconnect)&&
		$requete_user->bindParam('password', $mdpconnect)&&
		$requete_user->execute();
		return $requete_user;
	}

	public static function username($topic_id)

	{

		$requete_user = self::prepareStatement("SELECT username FROM users LEFT JOIN f_topics ON f_topics.id_createur=users.id ");

		$requete_user->execute();
		$user_info = $requete_user->fetch();
		return $user_info;
	
	}


} 
