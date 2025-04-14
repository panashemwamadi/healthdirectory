<x-layout>
    <section class="panashe bg-blue-950 bg-center bg-cover pt-40" style="background-image: url(images/Glowbanner.jpg)">
    </section>
    <header class="bg-gray-100 border-b border-gray-300 w-full md:w-3/5 mx-auto">
        <div class="max-w-7xl py-10">
            <h1 class="text-3xl font-bold tracking-tight text-blue-900 text-center">GLOW TRACK AUCTIONS</h1>
        </div>
    </header>
    <main>
        <div class="bg-gray-100 w-full md:w-3/5 mx-auto pt-10">
            <div class="p-6 bg-white w-full">
                <div class="container mx-auto"></div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center py-10">What do you want to buy?</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 md:px-24 text-center">
                    At Glowtrack Auctions, we pride ourselves on providing unparalleled customer service to sellers and buyers alike. Our dedicated team of experienced staff is equipped with an extensive database of potential buyers, ensuring that your property reaches the right audience. With cutting-edge marketing strategies and a professional auctioneering team, we make the auction process seamless and rewarding for everyone involved.
                    Whether you are looking to sell valuable collectibles, real estate, vehicles, or estate items, Glowtrack Auctions offers multiple disposal options tailored to your needs, including commission sales, outright purchases, and advanced payments pending commission sales.
                    Our friendly staff is always ready to guide you through the auction process, whether you are a first-time buyer or a seasoned seller. Alternatively, you can follow our detailed step-by-step guide below to understand how everything works.
                </p>
                
                <div class="md:flex md:justify-between">
                    <ul class="flex flex-col space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0 w-full md:w-auto">
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-900 rounded-lg active w-full" data-tab="profile" aria-current="page">
                                BUY
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full" data-tab="dashboard">
                                SELL
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full" data-tab="contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-6 bg-gray-50 text-medium text-gray-500 rounded-lg w-full md:w-3/5 mt-4 md:mt-0 h-full">
                        <div id="profile" class="tab-item">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">BUYING</h3>
                            <p>Our auction house is open to the public, inviting everyone to explore our diverse range of items available for sale. We encourage potential buyers to familiarize themselves with our processes before making a purchase. Certain items are available for immediate sale—Out Of Hand*—which can include everything from vehicles to unique collectibles. If something catches your eye, our staff can provide you with an indicative price, subject to management approval. For items designated for auction, we offer scheduled viewing times, allowing you to inspect the items thoroughly before placing your bids.</p>
                        </div>
                        <div id="dashboard" class="tab-item hidden">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">SELLING</h3>
                            <p>As a seller, you can trust Glowtrack Auctions to maximize the value of your items. Simply fill out our online seller registration form to get started. Our team will guide you in preparing your items for auction, ensuring they are showcased effectively to attract potential buyers. We offer various selling options, from traditional auctions to online bidding, giving you the flexibility you need. Our team will handle all the logistics, from marketing to closing sales, providing you with a hassle-free experience.</p>
                        </div>
                        <div id="contact" class="tab-item hidden">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">CONTACT US</h3>
                            <p>If your bid is successful, you will receive a proforma invoice detailing the bid price, Purchases Levy*, and VAT*. Please ensure that the information provided during registration is accurate, as it will appear on the invoice. Payment can be made via cash, credit/debit card, EcoCash, or RTGS immediately after bidding concludes. Goods will be available for collection from our dispatch department upon full payment, so please adhere to the collection timeframes outlined in the auction's terms and conditions.</p>
                        </div>
                    </div>
                </div>    
                <script>
                    document.querySelectorAll('.tab-link').forEach(tab => {
                        tab.addEventListener('click', function(event) {
                            event.preventDefault();
                            const targetTab = this.getAttribute('data-tab');
        
                            // Hide all tab content
                            document.querySelectorAll('.tab-item').forEach(item => {
                                item.classList.add('hidden');
                            });
        
                            // Remove active class from all tabs
                            document.querySelectorAll('.tab-link').forEach(link => {
                                link.classList.remove('active', 'bg-blue-900', 'text-white');
                                link.classList.add('hover:bg-gray-100');
                            });
        
                            // Show the target tab content
                            document.getElementById(targetTab).classList.remove('hidden');
        
                            // Set the current tab as active
                            this.classList.add('active', 'bg-blue-900', 'text-white');
                            this.classList.remove('hover:bg-gray-100');
                        });
                    });
                </script>
            </div>
        </div>
    </main>
   
</x-layout>
