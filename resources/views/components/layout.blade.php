<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Track</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .panashe {
            height: 100vh;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure it appears above other content */
            background-color: white; /* Change as needed */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: adds shadow */
        }

        /* Add padding to the body content to avoid overlap with the navbar */
        .body-content {
            padding-top: 6rem; /* Match the height of the navbar (h-24 = 6rem) */
        }

        .parallelogram {
            transform: skew(-20deg);
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s;
        }

        .parallelogram:hover {
            background-color: #2563eb; /* Tailwind's blue-600 */
        }

        .hiden {
            display: none;
        }
    </style>
</head>
<body class="h-full bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-900 h-24 p-5 fixed w-full navbar" style="background: linear-gradient(135deg, white 20%, rgb(4, 4, 126) 20%);">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <!-- Logo -->
                    <a href="/">
                        <div class="shrink-0">
                            <img class="w-20 h-20 rounded-full" src="/images/fereris.png" alt="Your Company">
                        </div>
                    </a>

                    <!-- Navigation Links (Desktop) -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-navbar-link href="/buy" :active="request()->is('buy')">Buy</x-navbar-link>
                            <x-navbar-link href="/sell" :active="request()->is('sell')">Sell</x-navbar-link>
                            <x-navbar-link href="/about" :active="request()->is('about')">About</x-navbar-link>
                            <x-navbar-link href="/more" :active="request()->is('more')">More</x-navbar-link>
                            <x-navbar-link href="/contact" :active="request()->is('contact')">Contact</x-navbar-link>
                            
                            <button type="button" class="flex items-center justify-center text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-4 py-2 transition duration-300 ease-in-out transform hover:scale-105">
                                <a href="/register" class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                    Sign Up
                                </a>
                            </button>

                            <button type="button" class="flex items-center justify-center text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm p-3 transition duration-300 ease-in-out transform hover:scale-105">
                                <a href="/auctions" class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M13 10V3a1 1 0 00-1-1h-1a1 1 0 00-1 1v7h4zm6 0V3a1 1 0 00-1-1h-1a1 1 0 00-1 1v7h4zm-9 0V3a1 1 0 00-1-1H8a1 1 0 00-1 1v7h4zm12 2H3a1 1 0 00-1 1v8a1 1 0 001 1h18a1 1 0 001-1v-8a1 1 0 00-1-1z"/>
                                    </svg>
                                    Bidding
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" id="mobile-menu-toggle" class="relative inline-flex items-center justify-center p-2 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="bg-blue-900 rounded-md hiden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="/buy" class="block rounded-md bg-gray-900 px-3 py-2 text-xs font-medium text-white" aria-current="page">Buy</a>
                <a href="/sell" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sell</a>
                <a href="/about" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="/more" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">More</a>
                <a href="/contact" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Body Content -->
    <div class="body-content">
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900">
        <div class="mx-auto max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Buy</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4">
                            <a href="/auctions" class="hover:underline">Auctions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Contact Us</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4">
                            <a href="https://wa.me/263772582201" target="_blank" class="hover:underline">Whatsapp</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://www.facebook.com/profile.php?id=100039214670751" class="hover:underline">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fixed Buttons -->
    <div class="fixed bottom-20 left-4">
        <button type="button" class="flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm p-3 transition duration-300 ease-in-out transform hover:scale-105">
            <a href="https://www.facebook.com/profile.php?id=100039214670751" class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047v-2.642c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.234 2.686.234v2.953h-1.514c-1.491 0-1.956.926-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                Facebook
            </a>
        </button>
    </div>

    <div class="fixed bottom-20 left-36">
        <button type="button" class="flex items-center justify-center text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm p-3 transition duration-300 ease-in-out transform hover:scale-105">
            <a href="https://wa.me/263772582201" class="flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.507 14.307l-.009.075c-.213 1.141-1.159 2.098-2.301 2.309l-.075.009c-.178.023-.357.035-.536.035-2.661 0-4.83-2.168-4.83-4.83 0-2.661 2.168-4.83 4.83-4.83 2.661 0 4.83 2.168 4.83 4.83 0 .179-.012.358-.035.536l-.009.075c-.211 1.142-1.168 2.088-2.309 2.301zM12 0C5.373 0 0 5.373 0 12c0 2.572.693 4.98 1.898 7.053L.066 23.315c-.088.38.032.78.308 1.056.276.276.676.396 1.056.308l4.262-1.832A11.917 11.917 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/>
                </svg>
                WhatsApp
            </a>
        </button>
    </div>

    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hiden'); // Toggle the hidden class
        });
    </script>
</body>
</html>