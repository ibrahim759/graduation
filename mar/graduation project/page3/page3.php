<?php
include('db_connection.php'); // Include your database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $travelFrom = $_POST['travelFrom'];
    $travelTo = $_POST['travelTo'];
    $months = $_POST['months'];
    $expense1 = $_POST['expense1'];
    $expense2 = $_POST['expense2'];
    $expense3 = $_POST['expense3'];
    $expense4 = $_POST['expense4'];
    $expense5 = $_POST['expense5'];
    $ministryApprovalDate = $_POST['ministryApprovalDate'];
    $committeeApprovalDate = $_POST['committeeApprovalDate'];
    $publicAdministrationApprovalDate = $_POST['publicAdministrationApprovalDate'];
    $facultyMemberLastTravelDate = $_POST['facultyMemberLastTravelDate'];
    $lastContribution = $_POST['lastContribution'];
    $currency = $_POST['currency'];

    // Insert data into the database
    $query = "INSERT INTO faculty_travel (travelFrom, travelTo, months, expense1, expense2, expense3, expense4, expense5, ministryApprovalDate, committeeApprovalDate, publicAdministrationApprovalDate, facultyMemberLastTravelDate, lastContribution, currency)
              VALUES ('$travelFrom', '$travelTo', $months, '$expense1', '$expense2', '$expense3', '$expense4', '$expense5', '$ministryApprovalDate', '$committeeApprovalDate', '$publicAdministrationApprovalDate', '$facultyMemberLastTravelDate', $lastContribution, '$currency')";

    // Check if the query was successful
    if ($conn->query($query) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>