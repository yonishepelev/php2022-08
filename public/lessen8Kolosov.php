<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response , true);
print_rr($response);
//print_rr($response['products']);
//print_rr($response['title']);

printImages($response);






function printImages($response){

    foreach ($response['products'] as $item){

        //print_rr($item);
        //print_rr($item['id']);
        //printrr($item['title']);
        print_rr($item['id'] .' ' . $item['title']);
        //print_rr($item['images'] [0]);

        foreach ( $item['images'] as $image){
            print_rr($image);
        }


    }
}

