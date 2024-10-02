<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-blue-800 text-white py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Admin Dashboard - TravelWheels</h1>
            <button class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md text-white">Log out</button>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto py-10 px-6">
        <div class="grid grid-cols-3 gap-6">
            <!-- Administrator Account -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Administrator Account</h2>
                <div class="flex items-center">
                    <div class="mr-4">
                        <img src="https://via.placeholder.com/50" alt="Admin" class="rounded-full">
                    </div>
                    <div>
                        <p class="font-bold">Admin Name</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in lacus...</p>
                    </div>
                </div>
            </div>

            <!-- System Overview -->
            <div class="bg-white p-6 shadow-lg rounded-lg col-span-1">
                <h2 class="text-xl font-semibold mb-4">System Overview</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in ligula vehicula, tempus metus nec, dapibus justo.</p>
            </div>

            <!-- Financial Database -->
            <div class="bg-white p-6 shadow-lg rounded-lg col-span-1">
                <h2 class="text-xl font-semibold mb-4">Financial Database</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in ligula vehicula, tempus metus nec, dapibus justo.</p>
            </div>
        </div>

        <!-- Manage Users and Booking Schedule Tables -->
        <div class="grid grid-cols-2 gap-6 mt-10">
            <!-- Manage Users -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Manage Users</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left">User ID</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Username</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch users from database (replace with your DB logic)
                        $connection = new mysqli("localhost", "root", "", "bus_booking");
                        $result = $connection->query("SELECT * FROM users");

                        while($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td class='py-2 px-4 border'>{$row['id']}</td>
                                    <td class='py-2 px-4 border'>{$row['username']}</td>
                                    <td class='py-2 px-4 border'>{$row['email']}</td>
                                    <td class='py-2 px-4 border'>
                                        <a href='edit_user.php?id={$row['id']}' class='text-blue-500 hover:underline'>Edit</a> |
                                        <a href='delete_user.php?id={$row['id']}' class='text-red-500 hover:underline'>Delete</a>
                                    </td>
                                </tr>";
                        }

                        $connection->close();
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Booking Schedule List -->
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold mb-4">Booking Schedule List</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left">Booking ID</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Bus No.</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Passenger Name</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch bookings from database (replace with your DB logic)
                        $connection = new mysqli("localhost", "root", "", "bus_booking");
                        $result = $connection->query("SELECT * FROM bookings");

                        while($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td class='py-2 px-4 border'>{$row['booking_id']}</td>
                                    <td class='py-2 px-4 border'>{$row['bus_no']}</td>
                                    <td class='py-2 px-4 border'>{$row['passenger_name']}</td>
                                    <td class='py-2 px-4 border'>
                                        <a href='edit_booking.php?id={$row['booking_id']}' class='text-blue-500 hover:underline'>Edit</a> |
                                        <a href='delete_booking.php?id={$row['booking_id']}' class='text-red-500 hover:underline'>Delete</a>
                                    </td>
                                </tr>";
                        }

                        $connection->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 TravelWheels Admin. All rights reserved.</p>
            <a href="#" class="text-gray-300 hover:underline">Terms & Conditions</a> | 
            <a href="#" class="text-gray-300 hover:underline">Privacy Policy</a>
        </div>
    </footer>

</body>
</html>