<?php

define("HOST", "localhost");
define("DBNAME", "pay");
define("USERNAME", "root");
define("PASSWORD", "");

$conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";", USERNAME, PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($conn == true) {
    echo "connection is a success";
} else {
    echo "error";
}