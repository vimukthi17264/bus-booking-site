<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Bus Registration</h2>
    <form action="registration-process.php" method="post">
        <label for="bus_number">Bus Number:</label>
        <input type="text" id="bus_number" name="bus_number" required>
        <br>
        <label for="route">Route:</label>
        <input type="text" id="route" name="route" required>
        <br>
        <label for="driver_name">Driver's Name:</label>
        <input type="text" id="driver_name" name="driver_name" required>
        <br>
        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>
        <br>
        <button type="submit">Register Bus</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>