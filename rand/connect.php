<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'rand';

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die($conn->connect_error);
}
