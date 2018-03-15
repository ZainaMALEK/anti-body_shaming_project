<?php

require('config.php');


$categories = $bdd->query('SELECT * FROM categories');

require('../views/forum.view.php');

?>