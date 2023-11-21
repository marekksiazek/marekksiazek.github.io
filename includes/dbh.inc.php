<?php

$host = "mariadb1011.server129059.nazwa.pl:3306";
$dbname = "server129059_kurs";
$dbusername = "server129059_kurs";
$dbpassword = "Kurs9fGYGuGU!!";

$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);
$mysqli->set_charset("utf8mb4");

// try {
//     // $pdo = new PDO('mysql:url=$host;dbname=$dbname', $dbusername, $dbpassword);
//     // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
};
