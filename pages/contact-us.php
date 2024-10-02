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
    <title>Contact Us - Bus Booking Service</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Contact Us</h2>
        <p>If you have any questions or need further information, feel free to get in touch with us using the form below.</p>
        
        <form action="contact-process.php" method="POST" class="form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject of your message" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Enter your message here" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h3>Our Contact Information</h3>
            <p><strong>Email:</strong> support@busbookingservice.com</p>
            <p><strong>Phone:</strong> +1 800-123-4567</p>
            <p><strong>Address:</strong> 1234 Main St, City, Country</p>
        </div>
    </div>
</body>
</html>

<?php
// Include the footer
include('../includes/footer.php');
?>