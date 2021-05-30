<?php

namespace crud1\connection;

use PDO;

private $host = DB_HOST;
private $user = DB_USER;
private $pass = DB_PASS;
private $dbes = DB_BASE;

$username = 'root';
$password = '';
$dbname = 'crud_poo';
$host = 'localhost';

class Conn {

    public $Conn = false;

    function getConn() {
        try {

            $dsn = 'mysql:dbname='.$dbname, ';host=' . $host;

            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->Conn = conn;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }

        return $this->Conn;
    }

}

?>