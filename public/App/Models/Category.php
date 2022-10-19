<?php

namespace App\Models;

use App\Tools\Db;

class Category
{
    public static function createCategories(): array
    {
        $con = Db::connect ();
        //$con->query ("TRUNCATE categories;");
        $dummyCategories = new DummyCategories();
        $allCategories = $dummyCategories->getAllCategories ();
        foreach ($allCategories as $category) {
            $sql = "SELECT COUNT(*) as count FROM categories WHERE title = :category";
            $result = $con->query ( $sql, [
                'category' => $category
            ] );
            if ($result[0]->count == 0) {
                $sql = "INSERT INTO categories (title, description) VALUES (:category, '');";
                $con->query ( $sql, [
                    'category' => $category
                ] );
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

    public static function getCategoriesList()
    {
        $con = Db::connect ();
        $sql = "SELECT c.* FROM categories as c";
        return $con->query ( $sql );

    }

    public static function getCategoryById($categoryId)
    {
        $con = Db::connect ();
        $sql = "SELECT * FROM categories as c
where c.id = :id";
        $result =  $con->query ( $sql, [
            'id' => $categoryId
        ] );
        if (count($result) > 0)
            return $result[0];
        else
            return false;

    }
}
