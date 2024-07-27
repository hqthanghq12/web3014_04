<?php
require_once 'env.php';
require_once 'models/Database.php';
require_once 'models/Category.php';
require_once 'controllers/CategoryController.php';
$cateCon = new CategoryController();
$cateCon->index();