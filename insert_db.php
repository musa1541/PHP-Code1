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
$query = "INSERT INTO myguests VALUES(NULL, 'Lion', 'Leo', 'test@test.com', NULL)";
$result = $pdo->query($query);

echo "Data Entered Successfully!";
?>