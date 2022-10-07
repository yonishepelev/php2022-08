<?php

namespace App\Tools;

use PDO;

class Db
{
    private static self $instance;
    private $connection;


    private function __construct()
    {
        $hostname = 'db';
        $username = 'root';
        $password = 'password';
        $database = 'our_shop';
        $port = 3306;
        $conn = new PDO( "mysql:host=$hostname;dbname=$database;port=$port", $username, $password );
        $conn->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $this->connection = $conn;


    }

    private function __clone()
    {
    }

    public static function connect()
    {
        if (isset( self::$instance ))
            return self::$instance;

        self::$instance = new self();
        return self::$instance;
    }

    public function query($sql, $params = [])
    {
        if (count ( $params ) === 0)
            return $this->connection->query ( $sql )->fetchAll ( PDO::FETCH_CLASS );
        $sth = $this->connection->prepare ( $sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY] );
        $sth->execute ( $params );
        return $sth->fetchAll ( PDO::FETCH_CLASS );
    }


}
