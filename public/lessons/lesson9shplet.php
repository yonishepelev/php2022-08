<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);