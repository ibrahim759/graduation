
<?php
// Check if form data is set before accessing it
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $offer1 = $_POST['off1'] ?? '';
    $offer2 = $_POST['off2'] ?? '';
    $offer3 = $_POST['off3'] ?? '';
    $offer4 = $_POST['off4'] ?? '';
    $offer5 = $_POST['off5'] ?? '';
    $offer6 = $_POST['off6'] ?? '';
    $_name = $_POST['_name'] ?? ''; // Corrected variable name
    

    echo "Debugging - Form data received: ";
    var_dump($_POST);

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'table3');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO table3 (offer1, offer2, offer3, offer4, offer5, offer6, _name) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $offer1, $offer2, $offer3, $offer4, $offer5, $offer6, $_name);
        $execval = $stmt->execute();

        if ($execval) {
            echo "Registration successful...";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "Error: Form data not set.";
}

// council.php
$rejectedFromFirstPage = $_GET['rejected'] ?? '';

if ($rejectedFromFirstPage == 'yes') {
    // Application was rejected on the first page, handle accordingly
} else {
    // Application was not rejected on the first page, normal flow
}
?>