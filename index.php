<?php
// Include the header and navbar
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking Site - Home</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Bus Booking Service</h1>
        <p>Book your bus tickets easily with our user-friendly platform. Explore routes, check availability, and make reservations in just a few clicks.</p>

        <!-- Call to action buttons -->
        <div class="cta-buttons">
            <a href="booking.php" class="btn btn-primary">Book Now</a>
            <a href="signup.php" class="btn btn-secondary">Sign Up</a>
        </div>
    </div>

    <!-- Add other home page content like offers, popular routes, etc. -->

    <?php
    // Include the footer
    include('includes/footer.php');
    ?>
</body>
</html>