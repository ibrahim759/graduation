<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// تأكد من تعديل المسار ليتناسب مع موقع مكتبة PHPMailer على جهازك
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GraduationProject";

$conn = new mysqli('localhost', 'root', '', 'GraduationProject');

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
        // الكود الخاص بإرسال البريد الإلكتروني
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->username       = 'mariam.sayed.com';                     // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->email   = 'mariam@gmail .com';               // SMTP username
            $mail->national_id   = '123456';                  // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email, $username);     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'تم تسجيلك بنجاح';
            $mail->Body    = 'مرحبًا، تم تسجيلك بنجاح. شكرًا لاستخدام خدماتنا.';

            $mail->send();
            echo "تم تسجيل المستخدم بنجاح، وتم إرسال بريد ترحيبي.";
        } catch (Exception $e) {
            echo "خطأ في إرسال البريد: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}  

$conn->close();
?>
