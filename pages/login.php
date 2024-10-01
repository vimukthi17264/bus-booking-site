<?php
// Include the header and navbar
include('../includes/header.php');
include('../includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bus Booking Service</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Login to Your Account</h2>
        <form action="login-process.php" method="POST" class="form">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="form-footer">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            <p><a href="reset-password.php">Forgot your password?</a></p>
        </div>
    </div>
</body>
</html>

<?php
// Include the footer
include('../includes/footer.php');
?>