<?php
require_once 'db_login.php';

try {

    
    $id = intval($_GET['id']);

    $stmt = $pdo->prepare('DELETE FROM students WHERE id = ?');

    $stmt->bindParam(1, $id, PDO::PARAM_STR);
    
    $stmt->execute();

    
    header("location: select.php?message=Data Deleted Successfully!");
}
catch(PDOException $e) {
    die ("ERROR" . $e->getMessage());

}
?>
