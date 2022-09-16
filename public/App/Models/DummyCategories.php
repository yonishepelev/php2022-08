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

}
