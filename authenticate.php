<?php
	session_start();
 
	require_once 'db_login.php';
 
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$stmt = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
			
            $stmt->bindParam(1, $username, PDO::PARAM_STR, 30);
            $stmt->bindParam(2, $password, PDO::PARAM_STR, 12);
			
            $stmt->execute();

			$row = $stmt->rowCount();
			$fetch = $stmt->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['user_id'];
                $_SESSION['username'] = $fetch['firstname'];
				header("location: select.php");

			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'login.php'</script>
			";
		}
	}
?>