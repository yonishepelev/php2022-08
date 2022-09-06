<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);
//print_rr($response);
//print_rr($response['products']);
//print_rr($response['title']);

$dataBrand = indexByBrand($response);
//print_rr($dataBrand);

$appleArr = [];
$samsungArr = [];


extractAppleSamsung($response, $appleArr, $samsungArr);
print_rr($appleArr);
print_rr($samsungArr);

function extractAppleSamsung($response, array &$appleArray, array &$samsungArray)
{
    foreach ($response['products'] as $product) {
       // print_rr($product);
        if ($product['brand'] === 'Apple' || $product['brand'] === 'APPle' ){
           $appleArray [] = $product;
        }
        if ($product['brand'] === 'Samsung'){
            $samsungArray [] = $product;
        }
    }
}


function indexByBrand($response)
{
    $indexedBrandProduct = [];

    foreach ($response['products'] as $product) {

        $brand = ucfirst(strtolower($product['brand']));


        if (isset($indexedBrandProduct[$brand]) === false) {
            $indexedBrandProduct[$brand] = [];
        }
        $indexedBrandProduct[$brand][] = $product;
    }
    return $indexedBrandProduct;
}

$dataCategoryBrand = indexByCategoryBrand($response);
//print_rr($dataCategoryBrand);

function indexByCategoryBrand($response)
{
    $indexedByCategoryBrandProduct = [];
    foreach ($response['products'] as $product) {
        $category = $product['category'];
        if (isset($indexedProduct[$category]) === false) {
            $indexedProduct[$category] = [];
        }
        $indexedProduct[$category][] = $product;

    }

    return $indexedProduct;

}

$data = indexByCategory($response);
//print_rr($data);

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


//printImages($response);

function printImages($response)
{

    foreach ($response['products'] as $item) {

        //print_rr($item);
        //print_rr($item['id']);
        //printrr($item['title']);
        //print_rr($item['id'] .' ' . $item['title']);
        //print_rr($item['images'] [0]);

        foreach ($item['images'] as $image) {
            //print_rr($image);
        }


    }
}


