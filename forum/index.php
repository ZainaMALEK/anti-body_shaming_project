<?php

require __DIR__.'/models/CategoryManager.php';

$categories = CategoryManager::getCategory();


require __DIR__.'/views/forum.view.php';


