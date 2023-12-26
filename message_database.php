<?php

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host, database: $dbname, username: $username, password: $password);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}