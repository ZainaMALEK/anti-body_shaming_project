<?php 
session_start();
require __DIR__.'/../models/CategoryManager.php';

$categories = CategoryManager::getCategory();
require __DIR__.'/../views/categories.view.php';