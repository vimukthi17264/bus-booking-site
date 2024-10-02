<nav class="navbar">
    <div class="navbar-left">
        <!-- Logo -->
        <a href="index.php" class="navbar-logo">
            <img src="assets/images/logo.png" alt="Bus Booking Logo" class="logo">
        </a>

        <!-- Main Navigation Links -->
        <ul class="navbar-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <li><a href="booking.php">Book a Ticket</a></li>
            <li><a href="route-map.php">Route Map</a></li>
        </ul>
    </div>

    <div class="navbar-right">
        <!-- Register and Login Links or Profile/Logout based on session status -->
        <ul class="navbar-links">
            <?php
            session_start(); // Start the session to access session variables

            // Check if the user is logged in
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                // User is logged in
                echo '<li><a href="user-account.php">My Account</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>'; // Link to logout
            } else {
                // User is not logged in
                echo '<li><a href="signup.php">Sign Up</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>