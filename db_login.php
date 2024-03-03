<?php // Save this file as db_login.php

$host = 'localhost'; // Change as necessary
$data = 'test'; // Change as necessary
$user = 'root'; // Change as necessary
$pass = ''; // Change as necessary
$chrs = 'utf8mb4';
$attr = "mysql:host=$host;dbname=$data;charset=$chrs";
$opts =
[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];

try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    echo "Connection Failed: " . $e->getMessage();
}
?>
