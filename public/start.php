<?php

use App\Tools\Router;

require_once './include/common_function.php';
require_once './include/routes.php';
$currentUri = $_SERVER['REQUEST_URI'];
$router = Router::getRouter ();
$router->goRoute ( $currentUri );
