<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Contact {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "contact"; // Update the database name here
    public $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }

    public function contact_us($data) {
        $fullname = $this->mysqli->real_escape_string($data['fullname']);
        $email = $this->mysqli->real_escape_string($data['email']);
        $message = $this->mysqli->real_escape_string($data['message']);

        $q = "INSERT INTO contact_us (fullname, email, message) VALUES ('$fullname', '$email', '$message')";
        $data = $this->mysqli->query($q);

        if ($data == true) {
            $body = "One message received from hubbunch contact us. Details are below..<br> Fullname: $fullname, Email: $email, message: $message";
            return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
        }
    }

    public function sent_mail($to, $subject, $body) {
        $mailFromName = "HubBunch";
        $mailFrom = "info@hubbunch.com";

        // Mail Header
        $mailHeader = 'MIME-Version: 1.0' . "\r\n";
        $mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
        $mailHeader .= "Reply-To: $mailFrom\r\n";
        $mailHeader .= "Return-Path: $mailFrom\r\n";
        $mailHeader .= 'X-Mailer: PHP' . phpversion() . "\r\n";
        $mailHeader .= 'Content-Type: text/html; charset=utf-8' . "\r\n";

        // Email to Admin
        if (mail($to, $subject, $body, $mailHeader)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
