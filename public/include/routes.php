<?php

use App\Tools\Router;

Router::setRoute ('/', function (){
    echo 'Привет я главная страница';
});
Router::setRoute ('/categories', function (){
    echo 'Привет я страница категорий';
});

