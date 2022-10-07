<?php

namespace App\Http\Controllers;

use App\Models\DummyCategories;
use App\Tools\Db;

class Test
{
    private function createCategories()
    {
        $con = Db::connect ();
        //$con->query ("TRUNCATE categories;");
        $dummyCategories = new DummyCategories();
        $allCategories = $dummyCategories->getAllCategories ();
        foreach ($allCategories as $category) {
            $sql = "SELECT COUNT(*) as count FROM categories WHERE title = '$category'";
            $result = $con->query ( $sql );
            if ($result[0]->count == 0) {
                $sql = "INSERT INTO categories (title, description) VALUES ('$category', '');";
                $con->query ( $sql );
            }

        }
        $sql = "SELECT * FROM categories";
        $dbCategories = $con->query ( $sql );
        $result = [];
        foreach ($dbCategories as $category) {
            $result[$category->title] = $category->id;
        }
        return $result;
    }

    private function getAllProducts()
    {
        $dummyCategories = new DummyCategories();
        $skip = 0;
        $limit = 30;

        $response = $dummyCategories->allProducts ( $limit, $skip );
        $products = $response->products;
        $totalAmount = $response->total;
        while (count ( $products ) < $totalAmount) {
            $skip = $skip + $limit;
            $response = $dummyCategories->allProducts ( $limit, $skip );
            $products = array_merge ( $products, $response->products );
        }

        //print_rr ( $totalAmount );
        //print_rr ( $products );
        return $products;
    }

    public function get()
    {
        $con = Db::connect ();
        $categories = $this->createCategories ();
        $allProducts = $this->getAllProducts ();
        foreach ($allProducts as $product) {
            $categoryId = $categories[$product->category];
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


        //phpinfo ();
    }

}
