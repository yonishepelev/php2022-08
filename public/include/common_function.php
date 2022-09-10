<?php

define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']);


require_once SERVER_ROOT.'/lessons/helpers.php';
//echo 'I am common function';
function phpLessonAutoloader($class){
    $classPath = str_replace('\\', '/', $class);
    $classPath = SERVER_ROOT.'/'.$classPath.'.php';

    require_once $classPath;
}
spl_autoload_register('phpLessonAutoloader');


