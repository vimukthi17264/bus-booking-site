<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions or need assistance, feel free to contact us using the form below:</p>
    <form action="contact-process.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send Message</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>