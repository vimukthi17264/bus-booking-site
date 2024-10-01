<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Book a Bus Ticket</h2>
    <form action="booking-process.php" method="post">
        <label for="route">Select Route:</label>
        <select id="route" name="route">
            <option value="Route 1">Route 1: City A to City B</option>
            <option value="Route 2">Route 2: City B to City C</option>
            <option value="Route 3">Route 3: City C to City D</option>
        </select>
        <br>
        <label for="date">Travel Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="seat">Select Seat:</label>
        <input type="number" id="seat" name="seat" required>
        <br>
        <button type="submit">Book Now</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>