<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;

class ImportData
{
    public function getImportData()
    {
        Product::createProducts ();
        Image::createImages ();
        echo "All done!";
    }
}
