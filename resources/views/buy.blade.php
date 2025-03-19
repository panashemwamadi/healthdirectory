<x-layout>
    <section class="panashe bg-blue-950  bg-center bg-cover pt-40" style="background-image: url(images/fereri.png)">
    </section>
    <header class="bg-gray-100 border-b border-gray-300 w-3/5 mx-auto">
        <div class="max-w-7xl py-10">
            <h1 class="text-3xl font-bold tracking-tight text-blue-900">GLOW TRACK AUCTIONS</h1>
           

        </div>
    </header>
    <main class="panashe">
        <div class="bg-gray-100 w-full md:w-3/5 mx-auto pt-10">
            <!-- Your content -->
            
           

 <div class=" p-6 bg-white w-full">
     <div class="container mx-auto">
     


    </div>
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900  text-center py-10">What do you want to buy?</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500  md:px-24">At ABC Auctions we assure you, the seller, unparalleled customer service. We have a wealth of experienced staff, an unprecedented database of buyers and an excellent marketing and auctioneering team.

        All of the above make ABC Auctions the place to send your property should you wish to dispose of it. We have multiple disposal options for you to choose from which include; commission sales, outright purchases and advanced payments pending commission sales.
        
        Any one of our members of staff will gladly walk you through the process or alternatively you can simply follow the step-by-step guide detailed below.</p>
    
        <div class="md:flex">
            <ul class="flex flex-col space-y-4 text-sm font-medium text-gray-500  md:me-4 mb-4 md:mb-0">
                <li>
                    <a href="#" class="tab-link inline-flex items-center px-4 py-3 text-white bg-blue-900 rounded-lg active w-full " data-tab="profile" aria-current="page">
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
            <div class="tab-content p-6 bg-gray-50 text-medium text-gray-500   rounded-lg w-full justify-items-center h-80">
                <div id="profile" class="tab-item">
                    <h3 class="text-lg font-bold text-gray-900  mb-2">BUYING</h3>
                    <p>Our doors are open to the public to come in and see what we have for sale on a daily basis and to familiarise yourself with our processes prior to buying.There are certain items that we sell Out Of Hand* . This can be anything from Vehicles to IT Equipment. If you see something that interests you, please ask a member of staff if it can be sold Out Of Hand* . If it can, you will be given an indicative price. Please note, this price will have to be confirmed by management prior to a sale being made.If the item you are after is earmarked to be sold on an Auction you will be advised when viewing for the auction is open. This viewing is your opportunity to get a good look at what you want to buy.</p>

                </div>
                <div id="dashboard" class="tab-item hidden">
                    <h3 class="text-lg font-bold text-gray-900  mb-2">Dashboard Tab</h3>
                    As a first time buyer with us, simply fill in a registration form, with your personal detail, and company details should you be buying for a company. For your convenience this can be done online by clicking Here*. After paying your deposit you will be issued with a buyer's card, which then allows you to participate in the auction. Be sure to take note of the Terms and Conditions of Sale* .  
                    Once the auction starts, the auctioneer will call out bids. If the item and price are favourable, raise your card and continue to do so until you are either unhappy with the price or you are the only bidder left. Should you be the only bidder left, the auctioneer will then indicate that you have won and the item is now yours subject to final payment.  
                    Should you not be able to attend the auction in person, you have the option to fill in a Proxy Bid*  form or, on certain auctions request to participate via Telephone Bid* . Both options will require you to register as you would if you were attending the auction in person but allows you the freedom to be elsewhere at the time of the auction.

                </div>
                
                <div id="contact" class="tab-item hidden">
                    <h3 class="text-lg font-bold text-gray-900  mb-2">Contact Tab</h3>
                    If your are successful you will be provided with a proforma invoice showing your bid price plus Purchases Levy*  and VAT* . The details provided upon registration will be shown on the invoice so please take care to provide the correct information before hand.

                    Payment can be made by cash, swipe, EcoCash or RTGS immediately after you have finished bidding but must be done within the specified time frame as set out in the auction’s terms and conditions of sale. 
                    
                    Having made full payment, your goods will be available for collection from our dispatch department immediately but again should be collected within the specified time frame to avoid inconveniences.

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
    <div class="w-full mt-10">
        
      </div>
      </div>

         </div>
         
           </main>
           </div>

</x-layout>