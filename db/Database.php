<?php

class Database
{
    private PDO $connection;
    public function __construct($dbtype, $host, $dbname, $user, $password)
    {
        try {
            $this->connection = new PDO("$dbtype:host=$host;dbname=$dbname", $user, $password);
            echo "Connection established";
        } catch (PDOException $error) {
            echo 'Connection failed: ' . $error->getMessage();
        }
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}