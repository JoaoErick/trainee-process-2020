<?php 

    require_once "Router.php";
    require_once "DB/Connection.php";
    require_once "models/User.php";
    require_once "controllers/UserController.php";
    require_once "controllers/HomeController.php";

    $router = new Router();
    $router->start($_GET);

