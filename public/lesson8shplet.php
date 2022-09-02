<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);

//print_rr($response);
//print_rr($response['products']);
//print_rr($response['skip']);
//print_rr($response['total']);
//print_rr($response['limit']);

//foreach ($response as $item){
//    print_rr($item);
//}
//printImages($response);
indexByCategory($response);

function indexByCategory($response){
    print_rr();
    $indexeProduct = [];


}



function printImages($response)
{
    foreach ($response['products'] as $item) {
        print_rr($item['id'] . ' ' . $item['title']);
        // print_rr($item['images'][0]);
        foreach ($item['images'] as $value)
            print_rr($value);
    }
}
