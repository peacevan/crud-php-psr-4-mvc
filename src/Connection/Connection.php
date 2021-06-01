<?php

namespace app\Connection;

use PDO;

class Connection {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbes = DB_BASE;
    public $Conn = false;

    function getConn() {
        try {

            $dsn = 'mysql:dbname=' .$this->dbes. ';host='.$this->host;

            $conn = new PDO($dsn, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->Conn = $conn;
        } catch (PDOException $e) {
            die('ERROR:' . $e->getMessage());
        }


        return $this->Conn;
    }

}

?>