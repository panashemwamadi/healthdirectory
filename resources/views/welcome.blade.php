<x-layout>
    <section class="panashe bg-blue-950 dark:bg-gray-900 bg-center bg-cover pt-40" style="background-image: url(images/GlowBanner.jpg)">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
           
        <h1 class='text-xl h-20 md:text-6xl text-blue-800 font-serif font-extrabold'>WELCOME TO GLOW TRACK AUCTIONS</h1>
            </div>
            <div class="carousel h-80 lg:w-2/5 mx-auto py-1 mt-10">
                <div class="carousel-inner justify-items-center">
                  <div class="carousel-item active justify-stretch">
                <div class="grid grid-cols-1 md:mx-auto">
                   
              
                  <div class="card h-72 bg-cover bg-center rounded-md  text-white text-center  border-red-700 border-2 animate__animated animate__zoomIn" style="background-image: url(images/interior.jpg)";>
                     <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 ">
                        
                    
                        <div class="grid grid-cols-1 p-5 gap-5">
                           
                            <div type="button" class="parallelogram mt-5 font-extralight focus:outline-none text-white bg-red-700/90 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 w-full">Vehicles</div>

                            @guest

                           <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">Sign Up</a></div>
                           <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/login">Log In</a></button>

                           @endguest
                           
                           @auth
                           <!--<div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/auctions">search vehicles</a></div>-->
                           <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/auctions">View Auctions</a></button>  
                           @endauth
                        </p>

                        
                     </div>
                     </div>
                      </div>
                
                </div>
                  </div>
                  <div class="carousel-item">
                      <div class="grid grid-cols-1">
              
                        <div class="card h-72 bg-cover bg-center rounded-md text-white text-center border-blue-700 border-2 animate__animated animate__zoomIn" style="background-image: url(images/mansion.jpg)";>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                               
                           
                                <div class="grid grid-cols-1 p-5 gap-5">
                           
                                    <div type="button" class="mt-5 parallelogram font-extralight focus:outline-none text-white bg-yellow-700/90 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">HOUSES</div>
    
                                    @guest

                                    <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">Sign Up</a></div>
                                    <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/login">Log In</a></button>
         
                                    @endguest
                                    
                                    @auth
                                    <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">search houses</a></div>
                                    <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/auctions">View Auctions</a></button>  
                                    @endauth
                                </p>
    
                           
                            </div>
                            </div>
                             </div>
                      
                        
                        </div>
                  </div>
                  <div class="carousel-item ">
                      <div class="grid grid-cols-1 md:grid-cols-1">
              
              
                        <div class="card h-72 bg-cover bg-center rounded-md text-white text-center border-blue-700 border-2 animate__animated animate__zoomIn" style="background-image: url(images/laptop.jpg)";>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                               
                           
                                <div class="grid grid-cols-1 p-5 gap-5">
                           
                                    <div type="button" class="mt-5 parallelogram font-extralight focus:outline-none text-white bg-black/90 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">GADGETS</div>
    
                                    @guest

                                    <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">Sign Up</a></div>
                                    <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/login">Log In</a></button>
         
                                    @endguest
                                    
                                    @auth
                                    <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">search gadgets</a></div>
                                    <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/auctions">View Auctions</a></button>  
                                    @endauth
                                </p>
    
                           
                            </div>
                            </div>
                             </div>
                             <br>
                             <br>
                             <br>
                             <br>
                             <br>
                             <br>
                             <br>
                          
                        </div>
                  </div>
                  <div class="carousel-item ">
                    <div class="grid grid-cols-1 lg:grid-cols-1">
            
            
                        <div class="card h-72 bg-cover bg-center rounded-md text-white text-center border-blue-700 border-2 animate__animated animate__zoomIn" style="background-image: url(images/iphone.jpg)";>
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                               
                           
                           <div class="grid grid-cols-1 p-5 gap-5">
                            <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-black bg-white/90 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">GADGETS</div>

                           @guest

                           <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">Sign Up</a></div>
                           <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/login">Log In</a></button>

                           @endguest
                           
                           @auth
                           <div type="button" class="mt-5 font-extralight parallelogram focus:outline-none text-white bg-black/50 border-white border hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/register">search electronics</a></div>
                           <button type="button" class="mt-1 focus:outline-none parallelogram text-white bg-black/50 border-white border-2 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"><a href="/auctions">View Auctions</a></button>  
                           @endauth
                                
                            </p>
    
                        
                            </div>
                            </div>
                             </div>
                        
                      </div>
                </div>
                </div>
                <button class="carousel-btn prev animate__animated animate-spin"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg></button>
                <button class="carousel-btn next animate__animated animate-spin"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                </svg></button>
                </div> 
                <div class="grid grid-cols-1 ml-2 md:w-2/3 md:mx-auto lg:w-1/4">
                  
               <button type="button" class="mt-2 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"> <a href="/auctions">VIEW UPCOMING AUCTIONS</a></button>
              <button type="button" class="mt-2 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900"> <a href="/about">VIEW MORE ABOUT US</a></button>
                </div>

              
                
    </section>
   
    <h1 class="text-3xl text-center text-blue-900 font-extrabold py-10"><br><br><br>Our Valued Clients</h1>

    <div class="overflow-x-auto whitespace-nowrap py-4">
        <div class="flex space-x-8">
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (1).png" alt="Client 1" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (2).png" alt="Client 2" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (3).png" alt="Client 3" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (4).png" alt="Client 4" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (22).png" alt="Client 5" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (7).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (8).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (9).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (10).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (11).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (12).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (13).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (14).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (15).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (16).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (23).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (18).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (19).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (20).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
            <div class="flex items-center justify-center w-24 h-24">
                <img src="images/logo (21).png" alt="Client 6" class="object-contain h-full w-full" />
            </div>
        </div>
    </div>
    
    <style>
        /* Optional styling for smooth scrolling */
        .overflow-x-auto {
            scroll-behavior: smooth;
        }
    </style>
    <x-carousel-css>
    </x-carousel-css>
    <x-carousel>
    </x-carousel>
    <x-script>
    </x-script> 
    
    <h1 class="font-extrabold text-blue-900 text-3xl text-center mt-5 py-10">You can buy the items below before auction</h1>
    
    <div id="default-carousel" class="relative w-full md:w-4/5 md:mx-auto" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative  overflow-hidden rounded-lg ">
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 justify-items-center gap-2">
                    
                    
                  @foreach ($auctions as $auction)
                  <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow  ">
                    <a href="#">
                        <div class="rounded-t-lg bg-cover bg-center h-72"  style="background-image: url('/storage/{{$auction->coverphoto }}')"></div>

                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $auction->product }}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $auction->starting_bid }}</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</a>
                        </div>
                    </div>
                </div>

                  @endforeach
                    
                    

                    
                </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 /30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 /30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <div class="grid grid-cols-1 ml-2 md:mx-auto md:w-1/4">
                  
                             <br>
        <button type="button" class="mt-2 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 my-10"><a href="/auctions"> SHOW MORE</a></button>
        </div>
    <script>
    
             document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('[data-carousel-item]');
            const indicators = document.querySelectorAll('[data-carousel-slide-to]');
            const prevButton = document.querySelector('[data-carousel-prev]');
            const nextButton = document.querySelector('[data-carousel-next]');
            let currentIndex = 0;
            let interval;
    
            function showSlide(index) {
                items.forEach((item, i) => {
                    item.classList.add('hidden');
                    indicators[i].setAttribute('aria-current', 'false');
                });
                items[index].classList.remove('hidden');
                indicators[index].setAttribute('aria-current', 'true');
                currentIndex = index;
            }
    
            function nextSlide() {
                currentIndex = (currentIndex + 1) % items.length;
                showSlide(currentIndex);
            }
    
            function prevSlide() {
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                showSlide(currentIndex);
            }
    
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    showSlide(index);
                    resetInterval();
                });
            });
    
            prevButton.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
    
            nextButton.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
    
            function resetInterval() {
                clearInterval(interval);
                interval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
            }
    
            // Initialize the carousel by showing the first slide and starting the interval
            showSlide(currentIndex);
            interval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
        });
    
        </script>
    
        <h1 class="text-3xl text-center text-blue-900 font-extrabold py-10">CUSTOMER TESTIMONIALS</h1>
    
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm  md:mb-12 md:grid-cols-2 bg-white  md:w-4/5 mx-auto">

        @foreach ($testimonials as $testimonials)
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e  ">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Easy to make transcations after winning</h3>
                <p class="my-4">{{ $testimonials->testimonial }}</p>
            </blockquote>
            <figcaption class="flex items-center justify-center ">
                <img class="rounded-full w-9 h-9" src="/storage/{{ $testimonials->user->profile_photo }}" alt="profile picture" style="object-fit: cover;">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>{{ $testimonials->User->name }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 ">{{ $testimonials->User->email }}</div>
                </div>
            </figcaption>    
        </figure>
        @endforeach
        

        
    </div>
    
    <div class="grid grid-cols-1 ml-2 md:mx-auto md:w-1/4">
                  
        <button type="button" class="mt-2 focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 my-10">SHOW MORE</button>
        </div>
    </div>
    

   
</x-layout>
