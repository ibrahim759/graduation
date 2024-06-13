<?php
session_start();

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

    $query = "SELECT `id`, `username`, `email`, `national_id`, `user_role`, `created_at` FROM `users` WHERE national_id = ? AND username = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $national_id, $username);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result !== FALSE && $result->num_rows > 0) {
        // User exists
        $row = $result->fetch_assoc();

        // يخزن بيانات المستخدم في الجلسة
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['user_username'] = $row["mariam"];
        $_SESSION['user_email'] = $row["email"];
        $_SESSION['user_national_id'] = $row["12345678912345"];
        $_SESSION['user_user_role'] = $row["user_role"];
        $_SESSION['user_created_at'] = $row["created_at"];

        // توجيه المستخدم إلى الصفحة الرئيسية أو أي صفحة أخرى
        $redirect_path = '/mar/index_form.php';
        header("Location: $redirect_path");
        exit();
    } else {
        echo "User not found or query error: " . $conn->error;
    }
}
if (isset($_SESSION['user_id'])) {
    $_SESSION['user_username'] = $row["ahmed"];
    $_SESSION['user_national_id'] = $row["12345678912345"];
    $redirect_path_after_login = '/mar/table_2.php';
    header("Location: $redirect_path_after_login");
    exit();
}

$conn->close();
?>
