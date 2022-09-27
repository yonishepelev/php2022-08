<?php

use App\Http\Controllers\Categories;
use App\Tools\Router;

Router::setRoute ( '/', function () {
    echo 'Привет я главная страница';
} );
Router::setRoute ( "/categories", function () { //http://localhost:8000/categories
    //echo 'Привет я страница категорий';
    $controller = new Categories();
    $controller->getAllCategories ();
} );
Router::setRoute ( "/category/{categoryName}", function ($matches) { // http://localhost:8000/category/laptops
    //echo 'я страница конкретной категории ' . $matches[1];
    $controller = new Categories();
    $controller->getCategoryItems ($matches[1]);
} );

Router::setRoute ( "/product/{productId}", function ($matches) { // http://localhost:8000/product/11

    $controller = new Categories();
    $controller->getProduct ($matches[1]);
} );

