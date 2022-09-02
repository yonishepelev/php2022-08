<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);
//print_rr($response ['products']);

//printImage($response);
$data = indexByCategory($response);
print_rr($data);

function indexdByBrand($response){

}
function indexdByBCategoryBrand($response){

}

function indexByCategory($response)
{
    $indexedProduct = [];
    //print_rr($response['products']);

    foreach ($response['products'] as $product) {
        $category = $product['category'];

        if (isset($indexedProduct[$category]) === false) {
            $indexedProduct[$category] = [];
        }

        $indexedProduct[$category][] = $product;
        //  print_rr($indexedProduct);
        //  print_rr($product);

    }
   // print_rr($indexedProduct);
    return $indexedProduct;

}


function printImage($response)
{
    foreach ($response ['products'] as $item) {
        print_rr($item['id'] . ' ' . $item['title']);
        //print_rr($item);
        //print_rr($item['images'][0]);
        foreach ($item ['images'] as $image) {
            print_rr($image);
        }
    }

}