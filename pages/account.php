<?php
include('../includes/header.php');
include('../includes/navbar.php');

// Assuming user authentication is already handled
?>

<div class="container">
    <h2>Your Account</h2>
    <p>Welcome, [User's Name]!</p>
    <ul>
        <li><a href="booking.php">Make a new booking</a></li>
        <li><a href="account-settings.php">Account Settings</a></li>
        <li><a href="reset-password.php">Reset Password</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</div>

<?php
include('../includes/footer.php');
?>