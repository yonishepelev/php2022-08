<?php

namespace App\Models;

use App\Tools\Db;

class Image
{
    public static function createImages()
    {
        $con = Db::connect ();
        Product::createProducts ();
        $allDummyProducts = DummyCategories::allProducts ();
        foreach ($allDummyProducts as $product) {
            foreach ($product->images as $image) {
                $sql = "SELECT COUNT(*) as count FROM images WHERE url = :image_url ";

                $result = $con->query ( $sql, [
                    'image_url' => $image
                ] );
                if ($result[0]->count == 0) {
                    $sql = "INSERT INTO images (productId, url) VALUES (:id, :image_url);";
                    $con->query ( $sql, [
                        'id' => $product->id,
                        'image_url' => $image
                    ] );
                }
            }
        }
    }
}
