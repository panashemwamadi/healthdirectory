

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow Track</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .panashe{

            height: 80vh;
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
    </style>
</head>
<body class="h-full bg-gray-100">
    <style>
        .parallelogram {
           /* background-color: #3b82f6;  Tailwind's blue-500 */
           
           
            transform: skew(-20deg);
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s;
        }

        .parallelogram:hover {
            background-color: #2563eb; /* Tailwind's blue-600 */
        }
    </style>
<div class="min-h-full">

  
    <nav class="bg-blue-900 h-24 p-5 fixed w-full navbar" style="background: linear-gradient(135deg, white 20%, rgb(4, 4, 126) 20%);">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                   <a href="/" ><div class="shrink-0">
                        <img class="w-20 h-20 rounded-full" src="/images/fereris.png" alt="Your Company">
                    </div></a>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-navbar-link href="/buy" :active="request()->is('buy')">Buy</x-navbar-link>
                            <x-navbar-link href="/sell" :active="request()->is('sell')">Sell</x-navbar-link>
                            <x-navbar-link href="/about" :active="request()->is('about')">About</x-navbar-link>
                            <x-navbar-link href="/more" :active="request()->is('more')">More</x-navbar-link>
                            <x-navbar-link href="/contact" :active="request()->is('contact')">Contact</x-navbar-link>
                           
                        </div>
                    </div>
                </div>
                
                <div class="-mr-2 flex md:hidden">
                    <button type="button" id="mobile-menu-toggle" class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-white  hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="sm:hidden xs:hidden md:hidden bg-blue-900/65 rounded-md" id="mobile-menu" class="hidden" >
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3" style="z-index: 1000px;">
    
                <a href="/buy" :active="request()->is('buy')" class="block rounded-md bg-gray-900 px-3 py-2 text-xs font-medium text-white" aria-current="page">Buy</a>
                <a href="/sell" :active="request()->is('sell')" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sell</a>
                <a href="/about" :active="request()->is('about')" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="/more" :active="request()->is('more')" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">More</a>
                <a href="/contact" :active="request()->is('contact')" class="block rounded-md px-3 py-2 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                
            </div>
          
        </div>
    </nav>
     
        
   

    {{ $slot }}
   
<script>
   document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden'); // Make it visible
    } else {
        mobileMenu.classList.add('hidden'); // Hide it
    }
});
</script>

     


    
   

  
   
  
<footer class="bg-blue-900 ">
    <div class="mx-auto  max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Buy</h2>
            <ul class="text-white dark:text-gray-400 font-medium">
            
                <li class="mb-4">
                    <a href="/auctions" class="hover:underline">Auctions</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Contact Us</h2>
            <ul class="text-white dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="https://wa.me/263772582201" target="_blank" class="hover:underline">Whatsapp</a>
                </li>
               
                <li class="mb-4">
                    <a href="https://www.facebook.com/profile.php?id=100039214670751" class="hover:underline">Facebook</a>
                </li>
                
            </ul>
        </div>
        <div>
           
        </div>
       
    </div>
    
      </div>
    </div>
</footer>



  
</body>
</html>