<?php

namespace App\Http\Controllers;

use App\Models\DummyCategories;

class Categories
{
        public function get(){
            print_rr ( 'Я контроллер категорий');
            $categories = new DummyCategories();
            $arrayAllCategories = $categories->getAllCategories ();

        }
}
