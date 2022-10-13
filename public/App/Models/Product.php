<?php

namespace App\Models;

use App\Tools\Db;

class Product
{
    public static function createProducts()
    {
        $con = Db::connect ();
        $categories = Category::createCategories ();
        $allProducts = DummyCategories::allProducts ();

        foreach ($allProducts as $product) {
            $categoryId = $categories[$product->category];
            $sql = "SELECT COUNT(*) as count FROM products WHERE title = :title";
            $result = $con->query ( $sql, [
                'title' => $product->title
            ] );
            if ($result[0]->count == 0) {

                $sql = "INSERT INTO products
            (id, title, description, price, discountPercentage, rating, stock,
             brand, categoryId, thumbnail)
             VALUES (
                :id, 
                :title, 
                :description,
                :price,
                :discountPercentage,
                :rating,
                :stock,
                :brand,
                :categoryId,
                :thumbnail
                );";
                $con->query ( $sql, [
                    'id' => $product->id,
                    'title' => $product->title,
                    'description' => $product->description,
                    'price' => $product->price,
                    'discountPercentage' => $product->discountPercentage,
                    'rating' => $product->rating,
                    'stock' => $product->stock,
                    'brand' => $product->brand,
                    'categoryId' => $categoryId,
                    'thumbnail' => $product->thumbnail,
                ] );

            }
        }
    }
}
