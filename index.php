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
    <div class="background-image">
        <div class="container">
            <h1>Welcome to Our Bus Booking Service</h1>
            <p>Book your bus tickets easily with our user-friendly platform. Explore routes, check availability, and make reservations in just a few clicks.</p>

            <!-- Call to action buttons -->
            <div class="cta-buttons">
                <a href="booking.php" class="btn btn-primary">Book Now</a>
                <a href="signup.php" class="btn btn-secondary">Sign Up</a>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="booking-form">
            <h2>Quick Booking</h2>
            <form action="booking-process.php" method="post">
                <label for="route">Select Route:</label>
                <select id="route" name="route" required>
                    <option value="Route 1">Route 1: City A to City B</option>
                    <option value="Route 2">Route 2: City B to City C</option>
                    <option value="Route 3">Route 3: City C to City D</option>
                </select>
                <br>
                <label for="date">Travel Date:</label>
                <input type="date" id="date" name="date" required>
                <br>
                <label for="seat">Select Seat:</label>
                <input type="number" id="seat" name="seat" required min="1" max="50">
                <br>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>
    </div>

    <?php
    // Include the footer
    include('includes/footer.php');
    ?>
</body>
</html>