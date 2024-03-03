<?php
require_once 'db_login.php';

try {

    $first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
    $last_name = !empty($_POST['last_name']) ? $_POST['last_name'] : NULL;
    $age = !empty($_POST['age']) ? $_POST['age'] : NULL;
    $email = !empty($_POST['email']) ? $_POST['email'] : NULL;
    $reg_date = !empty($_POST['reg_date']) ? $_POST['reg_date'] : NULL;
    $course = !empty($_POST['course']) ? $_POST['course'] : NULL;
    

    $stmt = $pdo->prepare('INSERT INTO students (firstname, lastname, age, email, reg_date, course) VALUES(?,?,?,?,?,?)');
    $stmt->bindParam(1, $first_name, PDO::PARAM_STR, 30);
    $stmt->bindParam(2, $last_name, PDO::PARAM_STR, 30);
    $stmt->bindParam(3, $age, PDO::PARAM_INT, 40);
    $stmt->bindParam(4, $email, PDO::PARAM_STR);
    $stmt->bindParam(5, $reg_date, PDO::PARAM_STR, 50);
    $stmt->bindParam(6, $course, PDO::PARAM_STR, 30);

    $stmt->execute();

    
    header("location: form.php?message=Data Saved Successfully!");
}
catch(PDOException $e) {
    die ("ERROR" . $e->getMessage());

}
?>
