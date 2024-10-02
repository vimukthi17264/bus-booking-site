<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto px-6">
            <h1 class="text-2xl font-bold">Contact Us</h1>
        </div>
    </header>

    <!-- Contact Form -->
    <section class="py-10 px-6">
        <div class="container mx-auto bg-white p-8 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-6">Get in Touch</h2>
            <form action="submit_contact.php" method="POST">
                <div class="grid grid-cols-1 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700">Name</label>
                        <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-gray-700">Message</label>
                        <textarea name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg" required></textarea>
                    </div>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-3 rounded-lg font-semibold">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 TravelWheels. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>