<?php
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container">
    <h2>Payment</h2>
    <form action="payment-process.php" method="post">
        <label for="card_name">Name on Card:</label>
        <input type="text" id="card_name" name="card_name" required>
        <br>
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required>
        <br>
        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
        <br>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>
        <br>
        <button type="submit">Pay Now</button>
    </form>
</div>

<?php
include('../includes/footer.php');
?>