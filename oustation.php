<?php
$host = "localhost";
$user = "root";
$pass = ""; // your MySQL password
$db = "book_db";

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Get form data  
$nameout = $_POST['nameout'];
$phoneout = $_POST['phoneout'];
$fromcityout = $_POST['fromcityout'];
$tocityout = $_POST['tocityout'];
$DepartureDate = $_POST['DepartureDate'];
$ReturnDate = $_POST['ReturnDate'];



// Insert into DB
$sql = "INSERT INTO outstation_trip ( name , phone_out,	FromCity, ToCity, Departure_Date, Return_Date)
        VALUES ( '$nameout', '$phoneout','$fromcityout', '$tocityout', '$DepartureDate', '$ReturnDate' )";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}



if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}


$stmt->close();
$conn->close();
?>