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
    $national_id = $_POST["national_id"];

    $query = "SELECT `id`, `username`, `email`, `national_id`, `user_role`, `created_at` FROM `users` WHERE national_id ='$national_id' and username='$username'";

    if ($conn->query($query) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}  

$conn->close();

?>
