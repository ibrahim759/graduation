<?php
// Check if form data is set before accessing it
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $InfoUse = $_POST['data_validation_1'] ?? '';
    $travelcond = $_POST['data_validation_2'] ?? '';
    $RightToTravel = $_POST['data_validation_3'] ?? '';
    $returneddephead = $_POST['data_validation_4'] ?? '';
    $rejected = $_POST['data_validation_5'] ?? '';
    $Namedephead= $_POST['Namedephead'] ?? '';

    echo "Debugging - Form data received: ";
    var_dump($_POST);

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'testt');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO heddep (InfoUser, travelCond, RightToTravel, returneddephead, rejected, Namedephead) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $InfoUse, $travelcond, $RightToTravel, $returneddephead, $rejected, $Namedephead);
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
?>
