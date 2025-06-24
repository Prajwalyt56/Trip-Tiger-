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
$package = $_POST['package'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$people = isset($_POST['people']) ? $_POST['people'] : 1;
$vehicle = $_POST['vehicle'];
$email = $_POST['email'];
$package = $_POST['package'];
$date = $_POST['date'];   
$time = $_POST['time'];
$location = $_POST['location'];

// Insert into DB
$sql = "INSERT INTO fomr_booking (	name, phone, email,	location, people, TripPackage,	VehicleP, date,	time)
        VALUES ('$name','$phone','$email',	'$location',	'$people',	'$package', '$vehicle',	'$date',	'$time')";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}


if ($stmt->execute()) {
    // Send Email
    $subject = "Trip Tiger Booking Confirmation";
    $message = "Hello $name,\n\nThank you for booking a trip with Trip Tiger!\n\n".
               "📦 Package: $package\n".
               "📞 Phone: $number\n".
               "👪 People: $people\n".
               "🚗 Vehicle: $vehicle\n".
               "📅 Date: $date\n".
               "🕒 Time: $time\n".
               "📍 Pickup: $pickup\n\n".
               "We'll contact you shortly.\n\nTrip Tiger Team";
    $headers = "From: trip@tiger.com";

    mail($email, $subject, $message, $headers);
    header("Location:packagebooking.php"); // redirect back
} else {
    echo "Error: " . $stmt->error;
}
$conn->close();
?>