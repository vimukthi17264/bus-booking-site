<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Sign Up</h2>
    <form action="signup-process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Log in here</a>.</p>
</div>

<?php
include('../includes/footer.php');
?>