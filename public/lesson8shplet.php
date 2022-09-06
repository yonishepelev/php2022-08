<?php
require_once('./helpers.php');
$response = file_get_contents('https://dummyjson.com/products');
$response = json_decode($response, true);
//print_rr($response ['products']);

//printImage($response);
//$data = indexByCategory($response);
//print_rr($data);
//$categoryBrends = indexdByBCategoryBrand($response);
//print_rr($categoryBrends);
//$brends = indexdByBrand($response);
//print_rr($brends);
function indexdByBrand($response)
{
    $indexProduct = [];
    foreach ($response['products'] as $product) {
        $brand = (strtolower($product['brand']));

        if (isset($indexProduct[$brand]) === false) {
            $indexProduct[$brand] = [];
        }
        $indexProduct[$brand][] = $product;
    }
    return $indexProduct;
}

$appleArr = [];
$samsungArr = [];


extractAppleSamsung($response, $appleArr, $samsungArr);


function extractAppleSamsung($response, array &$appleArray, array &$samsungArray)
{
    foreach ($response['products'] as $product) {
        $brand = (strtolower($product['brand']));
        if ($brand === 'apple') {
            $appleArray[] = $product;
        }
        if ($brand === 'samsung') {
            $samsungArray[] = $product;
        }
    }
}

function indexdByBCategoryBrand($response)
{
    $index = [];
    foreach ($response['products'] as $product) {
        $category = (strtolower($product['category']));
        $brand = (strtolower($product['brand']));

        if (isset($index[$category]) === false) {
            $index[$category] = [];
        }
        if (isset($index[$category][$brand]) === false) {
            $index[$category][$brand] = [];
        }
        $index[$category][$brand][] = $product;
    }
    return $index;
}

// function indexByCategory($response)
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