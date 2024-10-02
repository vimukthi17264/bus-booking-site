<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking - TravelWheels</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="logo.png" alt="TravelWheels" class="w-10 h-10">
                <a href="index.php" class="text-xl font-bold text-gray-700">TravelWheels</a>
            </div>
            <ul class="flex space-x-4 text-gray-700">
                <li><a href="index.php" class="hover:text-blue-600">Home</a></li>
                <li><a href="about_us.php" class="hover:text-blue-600">About Us</a></li>
                <li><a href="services.php" class="hover:text-blue-600 font-bold">Services</a></li>
                <li><a href="contact_us.php" class="hover:text-blue-600">Contact Us</a></li>
                <li><a href="faq.php" class="hover:text-blue-600">FAQ</a></li>
            </ul>
        </div>
    </nav>

    <!-- Bus Booking Form -->
    <div class="container mx-auto my-12 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center">Bus Booking Form</h1>

        <form class="grid grid-cols-2 gap-6">
            <!-- Bus Name and Route -->
            <div class="col-span-2">
                <label for="bus_name" class="block text-lg font-medium text-gray-700">Bus Name</label>
                <input type="text" id="bus_name"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Enter bus name">
            </div>
            <div class="col-span-2">
                <label for="route_no" class="block text-lg font-medium text-gray-700">Route No</label>
                <input type="text" id="route_no"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Enter route number">
            </div>
            <div class="col-span-2">
                <label for="total_fare" class="block text-lg font-medium text-gray-700">Total Fare</label>
                <input type="text" id="total_fare"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Enter fare">
            </div>

            <!-- From and To -->
            <div>
                <label for="from" class="block text-lg font-medium text-gray-700">From</label>
                <input type="text" id="from"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Enter start location">
            </div>
            <div>
                <label for="to" class="block text-lg font-medium text-gray-700">To</label>
                <input type="text" id="to"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                    placeholder="Enter destination">
            </div>
            <!-- Time and Date -->
            <div>
                <label for="time" class="block text-lg font-medium text-gray-700">Time</label>
                <input type="time" id="time"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="date" class="block text-lg font-medium text-gray-700">Date</label>
                <input type="date" id="date"
                    class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- View Seats Button -->
            <div class="col-span-2">
                <button type="submit"
                    class="mt-4 w-full bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-yellow-600">
                    View Seats
                </button>
            </div>
        </form>
    </div>

    <!-- Seat Selection -->
    <div class="container mx-auto my-12 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center">Select Your Seat</h1>

        <div class="grid grid-cols-4 gap-4">
            <!-- Loop through available seats -->
            <?php
            // For demo purpose: Let's assume 16 seats, where seats 5, 6, 10, 12 are booked.
            $seats = [
                1 => 'available',
                2 => 'available',
                3 => 'available',
                4 => 'available',
                5 => 'booked',
                6 => 'booked',
                7 => 'available',
                8 => 'available',
                9 => 'available',
                10 => 'booked',
                11 => 'available',
                12 => 'booked',
                13 => 'available',
                14 => 'available',
                15 => 'available',
                16 => 'available'
            ];

            foreach ($seats as $seat_no => $status) {
                $bg_color = $status === 'available' ? 'bg-green-500' : 'bg-red-500';
                echo "<div class='w-12 h-12 $bg_color text-white flex items-center justify-center rounded-lg'>$seat_no</div>";
            }
            ?>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-2">Legend:</h3>
            <div class="flex space-x-4">
                <div class="flex items-center space-x-2">
                    <div class="w-6 h-6 bg-green-500 rounded"></div>
                    <span>Available Seats</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-6 h-6 bg-red-500 rounded"></div>
                    <span>Booked Seats</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-6 h-6 bg-gray-300 rounded"></div>
                    <span>Not Provided</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 TravelWheels. All rights reserved.</p>
            <div class="mt-2">
                <a href="terms_conditions.php" class="text-gray-400 hover:text-white">Terms & Conditions</a> |
                <a href="privacy_policy.php" class="text-gray-400 hover:text-white">Privacy Policy</a>
            </div>
        </div>
    </footer>

</body>

</html>