<?php

namespace libs;

use PDO, PDOException;

require_once(realpath($_SERVER['DOCUMENT_ROOT']) . '\STARBUCKS\dashboard\libs\config.php');

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Lidhja me DB deshtoi " . $e->getMessage();
        }
    }

    public function prepare($sql)
    {
        return $this->connectDB()->prepare($sql);
    }
}
