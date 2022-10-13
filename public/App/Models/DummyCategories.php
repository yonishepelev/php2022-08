<?php

namespace App\Models;

class DummyCategories
{
    public function getAllCategories()
    {
        $url = 'https://dummyjson.com/products/categories';
        $data = file_get_contents ( $url );
        return json_decode ($data);


    }

    public function categoryItems($selectedCategory){
        $url = 'https://dummyjson.com/products/category/'.$selectedCategory;
        $data = file_get_contents ( $url );
        return json_decode ($data);

    }

    public function product($productId)
    {
        $url = 'https://dummyjson.com/products/'.$productId;
        $data = file_get_contents ( $url );
        return json_decode ($data);

    }

    public function allProductsPaged($limit, $skip = 0)
    {
        $url = 'https://dummyjson.com/products?skip='.$skip.'&limit='.$limit;
        $data = file_get_contents ( $url );
        return json_decode ($data);
    }

    public static function allProducts(): array
    {
        $dummyCategories = new self();
        $skip = 0;
        $limit = 30;

        $response = $dummyCategories->allProductsPaged ( $limit, $skip );
        $products = $response->products;
        $totalAmount = $response->total;
        while (count ( $products ) < $totalAmount) {
            $skip = $skip + $limit;
            $response = $dummyCategories->allProductsPaged ( $limit, $skip );
            $products = array_merge ( $products, $response->products );
        }

        //print_rr ( $totalAmount );
        //print_rr ( $products );
        return $products;
    }

}
