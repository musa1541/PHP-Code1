<?php 
$servername = "localhost";
$username = "root";
$password = "123";

//Create connection
//$conn = new mysqli($servername, $username, $password);

//Check connection
/*if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully!";*/

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>