<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Login</h2>
    <form action="login-process.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
</div>

<?php
include('../includes/footer.php');
?>