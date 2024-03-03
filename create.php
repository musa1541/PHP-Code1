<?php
	session_start();
	require_once 'db_login.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				// md5 encrypted
				$password = md5($_POST['password']);

                $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, username, password) VALUES (?,?,?,?)");
                $stmt->bindParam(1, $firstname, PDO::PARAM_STR, 50);
                $stmt->bindParam(2, $lastname, PDO::PARAM_STR, 50);
                $stmt->bindParam(3, $username, PDO::PARAM_STR, 30);
                $stmt->bindParam(4, $password, PDO::PARAM_STR, 12);

                $stmt->execute();

			}catch(PDOException $e){
				echo $e->getMessage();
			}

			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$pdo = null;

			header('location:login.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'register.php'</script>
			";
		}
	}
?>