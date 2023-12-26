<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";
}
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

if(empty($name)||empty($email)) {
    echo "Name and email are mandatory!";
    exit;
}
if(empty($subject)) {
    $subject = "No subject";
}
if(empty($message)) {
    $message = "No message";
}

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host, database: $dbname, username: $username, password: $password);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "INSERT INTO message (name, email, subject, message) 
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
    die();
} else {
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $subject, $message);
    mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "<script>
    alert('Message submitted!');
    setTimeout(function(){window.location.href='index.php';}, 1);
    </script>";