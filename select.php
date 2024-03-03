<!DOCTYPE html>
<?php
	require 'db_login.php';
	session_start();
 
	if(!ISSET($_SESSION['user'])){
		header('location:login.php');
	}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registered Stuents</title>
    </head>
    <body>

        <h1>Registered Students:</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>! </p>
        <p><a href="formv2.php">Add new Student</a></p>
        <p><a href="logout.php">Logout</a></p>
        <?php

        
        if (isset($_GET['message'])) {

            echo "<p>" . $_GET['message'] . "</p>";
        }
        try
        {
            $query = "SELECT * FROM Students";
            $result = $pdo->query($query);

            while ($row = $result->fetch()){

                echo 'Firstname: ' . htmlspecialchars($row['firstname']) . "<br>";
                echo 'Lastname: ' . htmlspecialchars($row['lastname']) . "<br>";
                echo 'Age: ' . htmlspecialchars($row['age']) . "<br>";
                echo 'Email: ' . htmlspecialchars($row['email']) . "<br>";
                echo 'Registration Date: ' . htmlspecialchars($row['reg_date']) . "<br>";
                echo 'Course: ' . htmlspecialchars($row['course']) . "<br>";
                echo '<a style="margin-right: 5px" href=form.php?id=' . $row['id'] . '>Edit</a>';
                echo '<a href=delete.php?id=' . $row['id'] . ' onclick="return confirm(\'Are you sure?\')">Delete</a>';
                echo '<hr>';
            }
        }
        catch(PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }

        ?>
    </body>
</html>