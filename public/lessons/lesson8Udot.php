<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);
//print_rr($response);

//printImage($response);
$data = indexByCategory($response);
//print_rr($data);
$br = indexByBrand($response);
$index3 = getIndexByCategoryBrand($response);

//print_rr($index3);
$appleArr = [];


$samsungArr = [];


extractAppleSamsung($response, $appleArr, $samsungArr);
print_rr($appleArr);
print_rr($samsungArr);

function extractAppleSamsung($response, array &$appleArray, array &$samsungArray)
{
        foreach ($response['products'] as $product){
            if($product['brand'] ===  'apple'|| $product['brand'] === 'APPle'){
                $appleArray []= $product;
                print_rr($appleArray);
            }
            if($product['brand'] === 'samsung'){
                $samsungArray [] =$product;
                print_rr($samsungArray);
            }
        }

}

function indexByBrand($response)
{
    $productBrand = [];
    foreach ($response['products'] as $product) {
        //print_rr($product);
        $brands = $product['brand'];
        //print_rr($brands);
        $productBrand[$brands][] = $product;

        //print_rr($productBrand);
    }
    //print_rr($productBrand);


    return $productBrand;
}


function getIndexByCategoryBrand($response)
{
    $productBrand = [];
    foreach ($response['products'] as $product) {
        $category = mb_strtolower($product['category'], 'utf8');
        $brands = mb_strtolower($product['brand'], 'utf8');
        if (isset($productBrand[$category]) === false) {
            $productBrand[$category] = [];
        }
        if (isset($productBrand[$category][$brands]) === false) {
            $productBrand[$category][$brands] = [];
        }
        $productBrand[$category][$brands][] = $product;

    }
    return $productBrand;
}


function indexByCategory($response)
{
    $indexedProduct = [];
    //print_rr($response['products']);

    foreach ($response['products'] as $product) {
        //print_rr($product);
        $category = $product['category'];
        //print_rr($category);

        if (isset($indexedProduct[$category]) === false) {
            $indexedProduct[$category] = [];
        }

        $indexedProduct[$category][] = $product;
        //print_rr($indexedProduct);
        //print_rr($product);

    }
    //print_rr($indexedProduct);
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
