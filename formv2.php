<?php 
require_once 'db_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php isset($_GET['id']) ? printf("Edit Record Form") : printf("Add Record Form") ?></title>
</head>
<body>
<?php 

if (isset($_GET['message'])) {

  echo "<p>" . $_GET['message'] . "</p>";
}

if (isset($_GET['id'])) {
    try {
        $query = "SELECT * FROM Students WHERE id=" . $_GET['id'];
        $result = $pdo->query($query);
        $row = $result->fetch();
    }
    catch (PDOException $e){
        echo "ERROR: " . $e->getMessage();
    }
}
?>

<br />

<p><a href="select.php">Student List</a></p>
<form action=<?php isset($_GET['id']) ? printf('edit.php?id=' . $row['id']) : printf('save.php') ?> method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName" value=<?php isset($_GET['id']) ? printf($row['firstname']) : "" ?>>
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName" value=<?php isset($_GET['id']) ? printf($row['lastname']) : "" ?>>
    </p>
    <p>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age"  value=<?php isset($_GET['id']) ? printf($row['age']) : "" ?>>
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress" value=<?php isset($_GET['id']) ? printf($row['email']) : "" ?>>
    </p>

    <p>
        <label for="course">Course</label>
        <select name="course" id="course">
            <option value="IT" <?php isset($_GET['id']) ? $row['course'] == 'IT' ? printf("selected") : "" : "" ?>>IT</option>
            <option value="english" <?php isset($_GET['id']) ? $row['course'] == 'english' ? printf("selected") : "" : "" ?>>English</option>
            <option value="business_mng" <?php isset($_GET['id']) ? $row['course'] == 'business_mng' ? printf("selected") : "" : "" ?>>Business Management</option>
            <option value="accounts" <?php isset($_GET['id']) ? $row['course'] == 'accounts' ? printf("selected") : "" : "" ?>>Accounting</option>
          </select>
    </p>
    <p>
        <label for="reg_date">Registration Date</label>
        <input type="date" id="reg_date" name="reg_date" value=<?php isset($_GET['id']) ? printf($row['reg_date']) : "" ?>>
    </p>
    <input type="submit" value=<?php isset($_GET['id']) ? printf("Update Details") : printf("Add Student") ?>>
</form>
</body>
</html>
