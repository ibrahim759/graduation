<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $national_id = $_POST["national_id"];

    $query = "SELECT `id`, `username`, `email`, `national_id`, `user_role`, `created_at` FROM `users` WHERE national_id ='$national_id' and username='$username'";

    $result = $conn->query($query);

    if ($result !== FALSE && $result->num_rows > 0) {
        // User exists
        $row = $result->fetch_assoc();
        echo "User with ID: " . $row["id"] . " and username: " . $row["username"] . " exists.";
    } else {
        echo "User not found or query error: " . $conn->error;
    }
}

$conn->close();
?>
