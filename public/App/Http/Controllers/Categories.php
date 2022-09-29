<?php

namespace App\Http\Controllers;

use App\Models\DummyCategories;
use Jenssegers\Blade\Blade;


class Categories
{
    public function getAllCategories()
    {

        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        $arrayAllCategories = $categories->getAllCategories ();
        //print_rr ( 'Я контроллер категорий');
        //print_rr ($arrayAllCategories);
        echo $blade->make ( 'categories', [
            'title' => 'Список категорий',
            'arrayAllCategories' => $arrayAllCategories
        ] )->render ();

    }

    public function getCategoryItems($selectedCategory)
    {
        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        $categoryItems = $categories->categoryItems ($selectedCategory);
        print_rr ($categoryItems->products[0]);
        echo $blade->make ( 'category-items', [
            'title' => 'Список товаров в категории '.$selectedCategory,
            'products' => $categoryItems->products
        ] )->render ();


    }

    public function getProduct($productId)
    {
        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        $product = $categories->product ($productId);
        print_rr ($product);
        echo $blade->make ( 'product', [
            'title' => $product->title,
            'product' => $product
        ] )->render ();
    }

    public function getAllProducts()
    {
        $blade = new Blade( 'views', 'cache' );
        $categories = new DummyCategories();
        if(isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = 1;

        $skip = ($page-1)*30;
        $response = $categories->allProducts ($skip);

        echo $blade->make ( 'all-products', [
            'title' => 'Все товары',
            'products' => $response->products
        ] )->render ();
    }
}
