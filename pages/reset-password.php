<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Reset Password</h2>
    <form action="reset-process.php" method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Reset Password</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>