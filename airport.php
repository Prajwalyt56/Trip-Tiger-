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
$nameair = $_POST['nameair'];
$phoneair = $_POST['phoneair'];
$triptype = $_POST['triptype'];
$airportname = $_POST['airportname'];
$address = $_POST['address'];
$airdate = $_POST['airdate'];
$airtime = $_POST['airtime'];



// Insert into DB
$sql = "INSERT INTO airportpick_drop ( Name_Air, Phone_Air, Trip_Type,	AirportName, Address_Air, Date_Air,	Time_Air)
        VALUES ( '$nameair', '$phoneair','$triptype', '$airportname', '$address', '$airdate','$airtime')";

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