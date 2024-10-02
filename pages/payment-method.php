<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded-lg w-4/5 p-6">
            <h1 class="text-3xl font-bold mb-6">Select Payment Method</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left section: Payment method buttons -->
                <div class="space-y-4">
                    <button class="w-full px-4 py-2 bg-gray-200 rounded-lg text-gray-700 text-lg flex items-center justify-center">
                        <img src="https://img.icons8.com/color/48/visa.png" alt="Visa/MasterCard" class="mr-2"> Visa/MasterCard
                    </button>
                    <button class="w-full px-4 py-2 bg-gray-200 rounded-lg text-gray-700 text-lg flex items-center justify-center">
                        <img src="https://img.icons8.com/color/48/amex.png" alt="American Express" class="mr-2"> American Express
                    </button>
                </div>

                <!-- Right section: Card details form -->
                <form action="process_payment.php" method="POST" class="bg-gray-100 p-6 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Enter Card Details</h2>

                    <div class="mb-4">
                        <label for="card_name" class="block text-sm font-medium text-gray-700">Name on Card</label>
                        <input type="text" name="card_name" id="card_name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="mb-4">
                        <label for="card_number" class="block text-sm font-medium text-gray-700">Card Number</label>
                        <input type="text" name="card_number" id="card_number" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="expiry_date" class="block text-sm font-medium text-gray-700">MM/YY</label>
                            <input type="text" name="expiry_date" id="expiry_date" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div class="w-1/2">
                            <label for="cvv" class="block text-sm font-medium text-gray-700">CVV</label>
                            <input type="text" name="cvv" id="cvv" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>

                    <button type="submit" class="mt-6 w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Pay
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>