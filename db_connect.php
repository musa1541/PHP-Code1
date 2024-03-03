<?php
require_once 'db_login.php';

try
{
$pdo = new PDO($attr, $user, $pass, $opts);
echo "Connected Successfully!";
}
catch (PDOException $e)
{
echo "Connection Failed: " . $e->getMessage();
}
?>