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

    public function allProducts($limit, $skip = 0)
    {
        $url = 'https://dummyjson.com/products?skip='.$skip.'&limit='.$limit;
        $data = file_get_contents ( $url );
        return json_decode ($data);
    }

}
