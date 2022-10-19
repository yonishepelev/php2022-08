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
        $dbCategoryItems = Product::categoryProducts ($selectedCategoryId);
        $currentCategory = Category::getCategoryById ($selectedCategoryId);

        echo $blade->make ( 'category-items', [
            'title' => 'Список товаров в категории ' . $currentCategory->title,
            'products' => $dbCategoryItems
        ] )->render ();


    }

    public function getProduct($productId)
    {
        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        $product = $categories->product ( $productId );
        print_rr ( $product );
        echo $blade->make ( 'product', [
            'title' => $product->title,
            'product' => $product
        ] )->render ();
    }

    public function getAllProducts()
    {
        $limit = 30;
        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        if (isset( $_GET['page'] ))
            $currentPage = $_GET['page'];
        else
            $currentPage = 1;

        if (isset($_GET['limit']))
            $limit = (int) $_GET['limit'];

        $skip = ($currentPage - 1) * $limit;
        $response = $categories->allProductsPaged ( $limit, $skip );
        $total_pages =  ceil ( $response->total / $limit );

        echo $blade->make ( 'all-products', [
            'title' => 'Все товары',
            'products' => $response->products,
            'total_pages' => $total_pages,
            'currentPage' => $currentPage,
            'limit'=> $limit
        ] )->render ();
    }
}
