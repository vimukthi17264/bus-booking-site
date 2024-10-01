<?php
include('../includes/header.php');
include('../includes/navbar.php');

// Admin authentication logic can go here
?>

<div class="container">
    <h2>Admin Dashboard</h2>
    <ul>
        <li><a href="manage-users.php">Manage Users</a></li>
        <li><a href="manage-bookings.php">Manage Bookings</a></li>
        <li><a href="route-map.php">Manage Routes</a></li>
        <li><a href="payment.php">View Payments</a></li>
    </ul>
</div>

<?php
include('../includes/footer.php');
?>