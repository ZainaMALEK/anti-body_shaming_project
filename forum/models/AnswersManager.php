<?php

class AnswersManager
{
	
	

	private static function createStatement($sql)
    {
        try 
        {
            require __DIR__.'/../config.php';
            $bdd = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password );
            $pdo_statement = $bdd->prepare($sql);
        } 
        catch (PDOException $e) 
        {
            echo 'erreur : ' . $e->getMessage();
            $pdo_statement = null;
        }
       
        return $pdo_statement;
    }


    public static function createAnswer($user_id,$topic_id,$topic_answer)
    {


    	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');

		$ins = $bdd->prepare('INSERT INTO answers (author_id, topic_id, answer, created_at) VALUES (:author_id, :topic_id, :answer, NOW())');

        
            $ins->bindParam(':author_id', $user_id);
            $ins->bindParam(':topic_id', $topic_id);
            $ins->bindParam(':answer', $topic_answer);
            $ins->execute();

            return $ins;
        
        
    }

    public static function getAllAnswers ($topic_id)
    {
    	$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');
    	$answers = $bdd->prepare('SELECT * FROM answers WHERE topic_id= :topic_id');
    	$answers->bindParam(':topic_id', $topic_id);
    	$answers->execute();
    	$ans= $answers->fetchAll();
    	return $ans;
    }

}



