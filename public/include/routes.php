<?php

use App\Http\Controllers\Categories;
use App\Tools\Router;

Router::setRoute ('/', function (){
    echo 'Привет я главная страница';
});
Router::setRoute ("/categories", function (){
    //echo 'Привет я страница категорий';
    $controller = new Categories();
    $controller->get ();
});
Router::setRoute ("/category/{categoryName}", function ($matches){ // http://localhost:8000/laptops
    echo 'я страница конкретной категории '.$matches[1];

});

