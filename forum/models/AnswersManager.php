<?php

class AnswersManager
{
	private static function initializePdo() 
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

    public static function createAnswer($user_id,$topic_id,$topic_answer)
    {

		$ins = self::prepareStatement('INSERT INTO answers (author_id, topic_id, answer, created_at) VALUES (:author_id, :topic_id, :answer, NOW())');

        
            $ins->bindParam(':author_id', $user_id);
            $ins->bindParam(':topic_id', $topic_id);
            $ins->bindParam(':answer', $topic_answer);
            $ins->execute();

        return $ins;
        
        
    }

    public static function getAllAnswers ($topic_id)
    {
    	
    	$answers = self::prepareStatement('SELECT * FROM answers WHERE topic_id= :topic_id');
    	$answers->bindParam(':topic_id', $topic_id);
    	$answers->execute();
    	$ans= $answers->fetchAll();
        
    	return $ans;
    }

}



