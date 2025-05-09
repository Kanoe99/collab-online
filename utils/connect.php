<?php

include path("./db/Database.php");


$dbtype = getenv("DB_TYPE");
$host = getenv("PMA_HOST");
$dbname = "users";
$user = "root";
$password = getenv("MYSQL_ROOT_PASSWORD");


error_reporting(E_ALL);
ini_set('display_errors', 1);

(new Database($dbtype, $host, $dbname, $user, $password))->getConnection();