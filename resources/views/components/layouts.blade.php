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
                        
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="-mr-2 flex md:hidden">
                  
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        
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
   

    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hiden'); // Toggle the hidden class
        });
    </script>
</body>
</html>
