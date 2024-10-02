<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm & Pay</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white shadow-md rounded-lg w-4/5 p-6">
            <h1 class="text-3xl font-bold mb-4">Confirm & Pay</h1>
            <p class="text-sm mb-6">
                Terms and conditions: I agree to the terms and conditions. I also agree to pay the total amount shown, which includes service fees.
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left section: Back and Confirm buttons -->
                <div>
                    <a href="back_to_booking.php" class="px-4 py-2 bg-gray-300 text-gray-800 rounded mr-2">Back</a>
                    <a href="payment-method.php" class="px-4 py-2 bg-blue-600 text-white rounded">Confirm and Pay</a>
                </div>

                <!-- Right section: Booking details -->
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Booking Details</h2>
                    <ul class="space-y-2">
                        <li><strong>Name:</strong> John Doe</li>
                        <li><strong>Mobile:</strong> +123 456 7890</li>
                        <li><strong>Email:</strong> johndoe@example.com</li>
                        <li><strong>Seats:</strong> 2</li>
                        <li><strong>Boarding:</strong> Station A</li>
                        <li><strong>Destination:</strong> Station B</li>
                        <li><strong>Ticket Fee:</strong> $100</li>
                        <li><strong>Discounts:</strong> $10</li>
                        <li><strong>Service Fee:</strong> $5</li>
                        <li><strong>Total:</strong> $95</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>