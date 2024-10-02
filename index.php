<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelWheels</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="flex items-center">
                <div class="bg-gray-300 w-12 h-12 flex items-center justify-center">
                    <span class="text-lg font-bold">LOGO</span>
                </div>
                <h1 class="ml-4 text-xl font-bold">TravelWheels</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">About Us</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Services</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Portfolio</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact Us</a></li>
                </ul>
            </nav>
            <div class="flex items-center space-x-2">
                <span class="text-sm font-semibold">Hello, Username</span>
                <img src="user-icon.png" alt="User Icon" class="w-8 h-8 rounded-full bg-gray-300">
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="feature1.png" alt="Feature 1" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold">Feature 1</h3>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="feature2.png" alt="Feature 2" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold">Feature 2</h3>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="feature3.png" alt="Feature 3" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-lg font-semibold">Feature 3</h3>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>

    <!-- Bus Search Section -->
    <section class="bg-gray-800 py-8">
        <div class="container mx-auto px-6 text-white">
            <h2 class="text-center text-2xl font-bold mb-6">Search Bus Time Table</h2>
            <form class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <select class="p-3 rounded bg-gray-700 text-white">
                    <option value="">From</option>
                    <!-- PHP logic to dynamically populate options -->
                </select>
                <select class="p-3 rounded bg-gray-700 text-white">
                    <option value="">To</option>
                    <!-- PHP logic to dynamically populate options -->
                </select>
                <input type="time" class="p-3 rounded bg-gray-700 text-white" placeholder="Start Time">
                <input type="time" class="p-3 rounded bg-gray-700 text-white" placeholder="End Time">
                <select class="p-3 rounded bg-gray-700 text-white">
                    <option value="">Bus Type</option>
                    <!-- PHP logic to dynamically populate options -->
                </select>
                <button type="submit" class="md:col-span-5 bg-blue-500 hover:bg-blue-600 p-3 rounded text-white font-semibold">Search</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h4 class="text-lg font-bold mb-4">Logo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#"><img src="facebook.png" alt="Facebook" class="w-6"></a>
                    <a href="#"><img src="instagram.png" alt="Instagram" class="w-6"></a>
                    <a href="#"><img src="linkedin.png" alt="LinkedIn" class="w-6"></a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Solution</h4>
                <ul>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Marketing</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Analytics</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Commerce</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Insights</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Support</h4>
                <ul>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Pricing</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Documentation</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Guides</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">API Status</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Company</h4>
                <ul>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">About</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-gray-600 hover:text-blue-500">Jobs</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-blue-500">Press</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-10">
            <p class="text-gray-600">© 2024 TravelWheels. All rights reserved.</p>
            <p class="mt-2">
                <a href="#" class="text-blue-500 hover:underline">Terms & Conditions</a> | 
                <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a>
            </p>
        </div>
    </footer>

</body>
</html>