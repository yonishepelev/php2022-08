<?php

namespace App\Http\Controllers;

use App\Models\DummyCategories;
use Jenssegers\Blade\Blade;


class Categories
{
        public function get(){

            $blade = new Blade('views', 'cache');
            $categories = new DummyCategories();
            $arrayAllCategories = $categories->getAllCategories ();
            //print_rr ( 'Я контроллер категорий');
            //print_rr ($arrayAllCategories);
            echo $blade->make('categories', [
                'title' => 'Список категорий',
                'arrayAllCategories'=> $arrayAllCategories
            ])->render();

        }
}
