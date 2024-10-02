<?php
// Database connection
include('../includes/db_connection.php'); // Include your database connection here

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $route = $_POST['route'];
    $date = $_POST['date'];
    $seat = $_POST['seat'];

    // Validate the data
    if (!empty($route) && !empty($date) && !empty($seat) && is_numeric($seat)) {
        // Check if the seat is already booked for the selected route and date
        $checkQuery = "SELECT * FROM bookings WHERE route = '$route' AND date = '$date' AND seat = '$seat'";
        $checkResult = mysqli_query($conn, $checkQuery);
        
        if (mysqli_num_rows($checkResult) > 0) {
            echo "Sorry, seat $seat on $route for $date is already booked. Please choose another seat.";
        } else {
            // Insert the booking into the database
            $insertQuery = "INSERT INTO bookings (route, date, seat) VALUES ('$route', '$date', '$seat')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "Your seat has been successfully booked! You booked seat $seat on $route for $date.";
            } else {
                echo "There was an error processing your booking. Please try again.";
            }
        }
    } else {
        echo "Please fill in all fields and ensure the seat number is valid.";
    }
}
?>