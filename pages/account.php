<?php
// Start the session
session_start();

// Mock user data for demonstration purposes
$_SESSION['username'] = 'JohnDoe'; // Simulated logged-in user
$_SESSION['email'] = 'johndoe@example.com'; // Simulated email
$_SESSION['profile_picture'] = 'assets/images/profile-placeholder.png'; // Simulated profile picture path

include('../includes/header.php');
include('../includes/navbar.php');

// Fetching mock user data from the session
$userName = $_SESSION['username'] ?? 'User';
$userEmail = $_SESSION['email'] ?? 'user@example.com';
$userProfilePicture = $_SESSION['profile_picture'] ?? 'assets/images/profile-placeholder.png';
?>

<div class="container account-container">
    <h2>Your Account</h2>
    <div class="profile-section">
        <img src="<?php echo htmlspecialchars($userProfilePicture); ?>" alt="Profile Picture" class="profile-pic">
        <p class="welcome-message">Welcome, <strong><?php echo htmlspecialchars($userName); ?></strong>!</p>
    </div>
    <ul class="account-actions">
        <li><a href="booking.php" class="btn btn-action">Make a New Booking</a></li>
        <li><a href="account-settings.php" class="btn btn-action">Account Settings</a></li>
        <li><a href="reset-password.php" class="btn btn-action">Reset Password</a></li>
        <li><a href="logout.php" class="btn btn-danger">Log Out</a></li>
    </ul>
    <div class="user-info">
        <h3>User Information</h3>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($userEmail); ?></p>
    </div>
</div>

<?php
include('../includes/footer.php');
?>