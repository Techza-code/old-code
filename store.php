<?php
if (isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['uagent'])) {
    $latitude = $_GET['lat'];
    $longitude = $_GET['long'];
    $userAgent = $_GET['uagent'];

    // Email configuration
    $to = 'intrepidtechza@gmail.com'; // Your email address
    $subject = 'GPS Coordinates';
    $message = "Latitude: $latitude\nLongitude: $longitude\nUser Agent: $userAgent";
    $headers = 'From: no-reply@example.com' . "\r\n"; // Replace with a valid sender email

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
