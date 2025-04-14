<x-layout>

    <section class="panashe bg-blue-950 dark:bg-gray-900 bg-center bg-cover pt-40" style="background-image: url(images/fereri.png)">
    </section>
    <header class="bg-gray-100 border-b border-gray-300 w-full md:w-3/5 mx-auto">
        <div class="max-w-7xl py-10">
            <h1 class="text-3xl font-bold tracking-tight text-blue-900 text-center">Sell</h1>
        </div>
    </header>
    <main>
        <div class="bg-gray-100 w-full md:w-3/5 mx-auto pt-10">
            <div class="p-6 bg-white w-full">
                <div class="container mx-auto">

                </div>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center py-10">What are you wanting to buy?</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 md:px-24 text-center">
                    We understand that auctions can be quite daunting for first-time attendees; however, we have taken every measure possible to make the process as easy and enjoyable as possible. Our knowledgeable staff is here to assist you every step of the way, or you can simply follow the step-by-step guide detailed below.
                </p>
                
                <div class="md:flex md:justify-between">
                    <ul class="flex flex-col space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0 w-full md:w-auto">
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-900 rounded-lg active w-full dark:bg-blue-900" data-tab="profile" aria-current="page">
                                BUY
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="dashboard">
                                SELL
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tab-link inline-flex items-center px-4 py-3 rounded-lg hover:bg-gray-100 w-full dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white" data-tab="contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full md:w-3/5 mt-4 md:mt-0">
                        <div id="profile" class="tab-item">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">BUYING</h3>
                            <p class="mb-2">At Glotrack Auctions, our buying process is designed to be straightforward and transparent. We invite you to explore our catalog of items available for auction, ranging from antiques to modern collectibles.</p>
                            <p>Before the auction begins, you can attend our preview sessions to inspect items up close and ask questions. Our staff is available to provide insights and assist you in understanding the auction process. Remember to register online to receive your bidder's card, which is essential for participating in auctions.</p>
                        </div>
                        <div id="dashboard" class="tab-item hidden">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">SELLING</h3>
                            <p class="mb-2">As a seller, you can trust Glotrack Auctions to maximize the value of your items. Simply fill out our online seller registration form to start the process. Our experienced team will guide you through item preparation, valuation, and marketing strategies to attract potential buyers.</p>
                            <p>We offer various selling options, including live auctions and online bidding, ensuring that your items reach a wide audience. Our goal is to provide you with a seamless and rewarding selling experience.</p>
                        </div>
                        <div id="contact" class="tab-item hidden">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">CONTACT US</h3>
                            <p class="mb-2">If you have any questions or need assistance, our customer service team is here to help. You can reach us via phone, email, or through our website’s contact form. We value your feedback and are committed to ensuring your auction experience is exceptional.</p>
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