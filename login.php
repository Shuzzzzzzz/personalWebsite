<?php

$host = "localhost";
$dbname = "admin_login";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account_info WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(empty($username) || empty($password)) {
        echo "<script>
            alert('Please fill in all fields!');
            setTimeout(function(){window.location.href='login.php';}, 1);
            </script>";
        exit();
    }

    if(mysqli_num_rows($result) == 1) {
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>
            alert('Incorrect username or password!');
            setTimeout(function(){window.location.href='login.php';}, 1);
            </script>";
    }
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login to check all messages</title>
</head>
<body>
    
    <div class="login-container">
        <h1>Login to check all messages</h1>
        <p>----Username: shu ---- Password: swen504----</p>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>
        <p>*!Credentials are stored in database and only provided for assessment purposes!*</p>
    </div>
    
</body>
</html>