<?php
// Check if form data is set before accessing it
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $InfoUse = $_POST['data_validation_1'] ?? '';
    $travelcond = $_POST['data_validation_2'] ?? '';
    $RightToTravel = $_POST['data_validation_3'] ?? '';
    $returneddephead = $_POST['data_validation_4'] ?? '';
    $rejected = $_POST['data_validation_5'] ?? '';
    $snumber = $_POST['data_validation_6'] ?? '';
    $datte = !empty($_POST['data_validation_7']) ? $_POST['data_validation_7'] : null;
    $nameDepCouncil = $_POST['data_validation_8'] ?? '';


    echo "Debugging - Form data received: ";
    var_dump($_POST);

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'table');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO ttable (InfoUser, travelCond, RightToTravel, returneddephead, rejected, snumber, datte, nameDepCouncil) VALUES (?, ?, ?, ?, ?, ?, STR_TO_DATE(?, '%Y-%m-%d'), ?)");
        $stmt->bind_param("ssssssss", $InfoUse, $travelcond, $RightToTravel, $returneddephead, $rejected, $snumber, $datte, $nameDepCouncil);
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

?>
