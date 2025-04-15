<x-layout>
    @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="{{ route('auctions.create') }}" class="btn btn-primary mb-3">
            <button class="floating-button">Create New Auction</button>
        </a>
    @endif

    <style>
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }

        .floating-button:hover {
            background-color: #0056b3;
        }

        .auction-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .auction-card:hover {
            transform: translateY(-5px);
        }
        
        .ended-message {
            font-weight: bold;
            color: #dc3545;
            padding: 10px;
            text-align: center;
            background-color: #f8d7da;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .winner-message {
            font-weight: bold;
            color: #28a745;
            padding: 10px;
            text-align: center;
            background-color: #d4edda;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>

    <div class="container md:mx-auto mt-36 md:text-center md:p-10">
        <h1 class="font-bold text-2xl mb-6">Active Auctions</h1>
        
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($auctions as $auction)
                <div class="auction-card p-5">
                    <a href="{{ route('auctions.show', $auction) }}" class="block mb-4">
                        <div class="h-60 rounded-lg bg-cover bg-center" style="background-image: url('/storage/{{ $auction->logo }}');"></div>
                        <h2 class="mt-2 text-lg font-semibold text-blue-600">{{ $auction->item }}</h2>
                        <p class="text-gray-700">Click to place a bid on this <b>{{ $auction->item }}</b></p>
                    </a>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center bg-gray-100 p-3 rounded-lg">
                            <p class="font-medium"><b>Starting Bid</b><br> {{ $auction->starting_bid }}</p>
                        </div>
                        <div class="text-center bg-gray-100 p-3 rounded-lg">
                            <p class="font-bold"><b>Current Bid</b><br> {{ $auction->current_bid }}</p>
                        </div>
                        <div class="text-center bg-gray-100 p-3 rounded-lg">
                            <p class="font-bold"><b>Deadline</b><br> {{ $auction->deadline }}</p>
                        </div>
                    </div>

                    @if ($auction->is_active)
                    @if(now()->isBefore($auction->deadline))
                        <div class="countdown font-extrabold py-5 text-red-900 text-center" 
                             data-deadline="{{ $auction->deadline }}">
                        </div>
                    @else
                        <div class="ended-message">
                            Auction has ended - no more bids accepted
                        </div>
                        @if($auction->winner)
                            <div class="winner-message">
                                <p>Sold to: {{ $auction->winner->user ? $auction->winner->user->name : 'No user' }} for {{ $auction->current_bid }}</p>
                                
                            </div>
                        @else
                            <div class="ended-message">
                                No bids were placed
                            </div>
                        @endif
                    @endif
                @else
                    <div class="ended-message">
                        Auction has ended - no more bids accepted
                    </div>
                    @if($auction->winner)
                        <div class="winner-message">
                            Winner: {{ $auction->winner->name }}
                        </div>
                    @else
                        <div class="ended-message">
                            No bids were placed
                        </div>
                    @endif
                @endif
                </div>
            @endforeach
        </div>
    </div>   

    <script>
        document.querySelectorAll('.countdown').forEach(function(element) {
            const deadline = new Date(element.getAttribute('data-deadline')).getTime();
            const now = new Date().getTime();
            
            // If already expired, skip creating the countdown
            if (deadline < now) {
                return;
            }

            const countdownInterval = setInterval(function() {
                const now = new Date().getTime();
                const distance = deadline - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                element.innerHTML = `
                    <span class="bg-black text-white rounded-md px-2">${days}d</span>
                    <span class="bg-gray-200 rounded-md px-2">${hours}h</span>
                    <span class="bg-black text-white rounded-md px-2">${minutes}m</span>
                    <span class="bg-gray-200 rounded-md px-2">${seconds}s</span>
                `;

                if (distance < 0) {
                    clearInterval(countdownInterval);
                    // Reload the page to show winner information
                    window.location.reload();
                }
            }, 1000);
        });
    </script>
</x-layout>
