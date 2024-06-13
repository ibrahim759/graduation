<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli('localhost', 'root', '', 'users');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $national_id = $_POST["national_id"];
    $user_role = $_POST["user_role"];

    $sql = "INSERT INTO users (username, email, national_id, user_role) 
            VALUES ('$username', '$email', '$national_id', '$user_role')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}  

$conn->close();

?>