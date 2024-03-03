<?php
require_once 'db_login.php';

try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    echo "Connection Failed: " . $e->getMessage();
}
$query = "INSERT INTO Students VALUES(NULL, 'Lion', 'Leo', 20, 'test@test.com', NULL, 'IT')";
$result = $pdo->query($query);

echo "Data Entered Successfully!";
?>
