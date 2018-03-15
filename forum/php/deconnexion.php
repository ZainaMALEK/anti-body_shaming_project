<?php
session_start();
$_SESSION = array();//vider les variables de sessions
session_destroy();//detruire la session
header("Location: connexion.php");
?>
