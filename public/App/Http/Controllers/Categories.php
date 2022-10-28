<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DummyCategories;
use App\Models\Product;
use Jenssegers\Blade\Blade;


class Categories
{
    public function getAllCategories()
    {

        $blade = new Blade( 'views', 'cache' );
        $dbCategories = Category::getCategoriesList ();

        echo $blade->make ( 'categories', [
            'title' => 'Список категорий',
            'dbCategories' => $dbCategories
        ] )->render ();

    }

    public function getCategoryItems($selectedCategoryId)
    {
        $blade = new Blade( 'views', 'cache' );
        $dbCategoryItems = Product::categoryProducts ( $selectedCategoryId );
        $currentCategory = Category::getCategoryById ( $selectedCategoryId );

        echo $blade->make ( 'category-items', [
            'title' => 'Список товаров в категории ' . $currentCategory->title,
            'products' => $dbCategoryItems
        ] )->render ();


    }

    public function getProduct($productId)
    {
        $blade = new Blade( 'views', 'cache' );
        //$categories = new DummyCategories();
        //$product = $categories->product ( $productId );
        //print_rr ( $product );
        $dbProduct = Product::product ( $productId );
        if ($dbProduct) {
            echo $blade->make ( 'product', [
                'title' => $dbProduct->title,
                'product' => $dbProduct
            ] )->render ();
        } else {
            http_response_code (404);
            echo $blade->make ( 'product', [
                'title' => 'Товар не найден',
                'product' => false
            ] )->render ();
        }
    }

    public function getAllProducts()
    {
        $limit = 30;
        $blade = new Blade( 'views', 'cache' );
//        $categories = new DummyCategories();
        if (isset( $_GET['page'] ))
            $currentPage = $_GET['page'];
        else
            $currentPage = 1;

        if (isset( $_GET['limit'] ))
            $limit = (int)$_GET['limit'];

        $skip = ($currentPage - 1) * $limit;
//        $response = $categories->allProductsPaged ( $limit, $skip );

        $responseDb = Product::allProducts ($limit, $skip);

        $total_pages = ceil ( $responseDb['total'] / $limit );

        echo $blade->make ( 'all-products', [
            'title' => 'Все товары',
            'products' => $responseDb['products'],
            'total_pages' => $total_pages,
            'currentPage' => $currentPage,
            'limit' => $limit
        ] )->render ();
    }
}
