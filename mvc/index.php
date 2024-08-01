<?php
session_start();
require_once 'env.php';
//require_once 'models/Database.php';
//require_once 'models/Category.php';
//require_once 'controllers/CategoryController.php';
require_once 'vendor/autoload.php';
require_once 'common/route.php';
//use App\Controllers\CategoryController;
//$cateCon = new CategoryController();
//$cateCon->index();
// điều hướng
//$url = isset($_GET['url'])?$_GET['url']:"/";
//switch ($url){
//    case '/':
//        $cateCon = new CategoryController();
//        $cateCon->index();
//        break;
//    case 'create':
//        $cateCon = new CategoryController();
//        $cateCon->create();
//        break;
//    default:
//        $cateCon = new CategoryController();
//        $cateCon->index();
//        break;
//}