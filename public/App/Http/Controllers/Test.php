<?php

namespace App\Http\Controllers;

use App\Tools\Db;

class Test
{
    public function get(){
        $db = Db::connect ();
        print_rr ($db->query ('SELECT * FROM categories'));
        //phpinfo ();
    }

}
