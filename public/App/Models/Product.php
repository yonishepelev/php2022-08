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

    public static function categoryProducts($categoryId)
    {
        $con = Db::connect ();
        $sql = "SELECT p.*, c.title as categoryName FROM products as p
LEFT JOIN categories as c ON p.categoryId = c.id
WHERE p.categoryId = :categoryId";
        $result = $con->query ( $sql, [
            'categoryId' => $categoryId
        ] );
        foreach ($result as $product) {
            $productId = $product->id;
            $images = Image::productImages ( $productId );
            $imagesUrls = [];
            foreach ($images as $image) {
                $imagesUrls[] = $image->url;

            }
            $product->images = $imagesUrls;
        }
        return $result;

    }

    public static function product($productId)
    {
        $con = Db::connect ();

        $sql = "SELECT p.*, c.title as category, GROUP_CONCAT(i.url) as images
FROM products as p
         LEFT JOIN categories as c ON p.categoryId = c.id
         LEFT JOIN images as i ON p.id = i.productId
WHERE p.id = :productId
GROUP BY p.id";
        $result = $con->query ( $sql, [
            'productId' => $productId
        ] );
        if (!$result)
            return false;
        $item = $result[0];
        $item->images = explode ( ',', $item->images );

        return $item;

    }

    private static function totalProducts(): int
    {
        $con = Db::connect ();
        $sql = "SELECT COUNT(*) as total FROM products";
        $total = $con->query ( $sql );
        return (int) $total[0]->total;
    }

    public static function allProducts($limit, $offset)
    {
        $result = [];
        $con = Db::connect ();
        $sql = "SELECT p.*, c.title as category, GROUP_CONCAT(i.url) as images
FROM products as p
         LEFT JOIN categories as c ON p.categoryId = c.id
         LEFT JOIN images as i ON p.id = i.productId
GROUP BY p.id
LIMIT :limit OFFSET :offset";
        $con->emulatePrepares ( false );
        $resultItems = $con->query ( $sql, [
            'limit' => $limit,
            'offset' => $offset
        ] );
        foreach ($resultItems as $item) {
            $item->images = explode ( ',', $item->images );
        }
        $result['products'] = $resultItems;
        $result['total'] = self::totalProducts ();
        $result['skip'] = $offset;
        $result['limit'] = count($resultItems);

        return $result;

    }
}
