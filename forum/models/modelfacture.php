<?php

/*function getBdd() {
  $base = new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8', 'root', 'root',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $base;
}*/

function createUneFacture($pseudo, $mail, $mdp)
{
 $base = new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8', 'root', 'root');
  $facture = $base->prepare('INSERT INTO users (username, email, password) VALUES (:username,:email,:password)');
   
    $facture->bindParam(':username', $pseudo, PDO::PARAM_STR);
    $facture->bindParam(':email', $mail, PDO::PARAM_STR);
    $facture->bindParam(':password', $mdp, PDO::PARAM_STR);
    $facture->execute();
    return $facture;
}
 
 


