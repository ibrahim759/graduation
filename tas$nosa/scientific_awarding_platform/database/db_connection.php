<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scientific_awarding_platform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

session_start();

// echo "<h3>Connected successfully</h3>";