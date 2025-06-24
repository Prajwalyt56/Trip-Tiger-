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
$Lpickup = $_POST['Lpickup'];
$Ldrop = $_POST['Ldrop'];
$Ldate = $_POST['Ldate'];
$Ltime = $_POST['Ltime'];
$namelocal = $_POST['namelocal'];
$phonelocal = $_POST['phonelocal'];



// Insert into DB
$sql = "INSERT INTO  local_cab ( localName, 	localPhone, localpickup, localdrop, localdate, `localtime`)
        VALUES ( '$namelocal', '$phonelocal','$Lpickup', '$Ldrop', '$Ldate', '$Ltime' )";

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