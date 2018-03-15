<?php
 
try {
$bdd= new PDO('mysql:host=localhost;dbname=body_shaming_forum;charset=utf8','root','root');

	} catch (PDOException $e) {
     echo 'ERREUR : '. $e->getMessage();
     $bdd = null;
   }

   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);










?>