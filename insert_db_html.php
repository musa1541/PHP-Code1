<?php
require_once 'db_login.php';

try {

    $first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;

    $stmt = $pdo->prepare('INSERT INTO students (firstname, lastname, age, email, reg_date, course) VALUES(?,?,?,?,?,?)');
    $stmt->bindParam(1, $first_name, PDO::PARAM_STR, 30);
    $stmt->bindParam(2, $_POST['last_name'], PDO::PARAM_STR, 30);
    $stmt->bindParam(3, $_POST['age'], PDO::PARAM_INT, 40);
    $stmt->bindParam(4, $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(5, $_POST['reg_date'], PDO::PARAM_STR, 50);
    $stmt->bindParam(6, $_POST['course'], PDO::PARAM_STR, 30);

    $stmt->execute();

    printf("%d Row inserted.\n", $stmt->rowCount());
}
catch(PDOException $e) {
    die ("ERROR" . $e->getMessage());

}


?>