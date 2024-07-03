<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
