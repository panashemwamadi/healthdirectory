<x-layouts>
    <div class="h-16 floating-button">
        @if ($auction->is_active && now()->isBefore($auction->deadline))
        <form action="{{ route('bids.store', $auction) }}" method="POST" class="m-5 inline-block">
            @csrf
            <div class="form-group mb-10" >
                <label for="amount" class="font-weight-bold text-red-900">Bid Amount</label>
                <div class="input-group mb-3">
                    <input type="number" id="amount" class="form-control rounded-left border border-gray-300" 
                           name="amount" min="{{ $auction->current_bid + 0.01 }}" step="0.01" required 
                           placeholder="Enter your bid" aria-label="Bid Amount">
                    <div class="input-group-append">
                        <button class="btn btn-danger rounded-right" type="submit">Place Bid</button>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        @else
            <p class="text-red-600 font-bold p-3 bg-red-100 rounded-md">Auction has ended. No more bids are accepted.</p>
        @endif
    </div>

    <style>
        .floating-button {
            position: fixed;
            bottom: 80px;
            right: 20px;
            z-index: 1000;
        }
    </style>

    <div class="container pt-36">
        <h1 class="text-3xl font-extrabold text-blue-500 text-center">{{ $auction->item }}</h1>
    </div>

    <div class="grid md:grid-cols-3 md:w-4/5 mx-auto gap-4 mt-4">
        <div class="h-96 md:p-2 w-full bg-white border border-gray-200 rounded-lg shadow-lg bg-cover bg-center" style="background-image: url('/storage/{{ $auction->logo }}')"></div>
        <div class="h-96 md:p-2 w-full bg-white border border-gray-200 rounded-lg shadow-lg bg-cover bg-center" style="background-image: url('/storage/{{ $auction->images }}')"></div>
        <div class="h-96 md:p-2 w-full bg-white border border-gray-200 rounded-lg shadow-lg bg-cover bg-center" style="background-image: url('/storage/{{ $auction->coverphoto }}')"></div>
    </div>

    <div class="md:grid grid-cols-4 gap-5 gap-y-5 md:p-10 border-2 border-blue-500 mt-5 rounded-lg">
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Starting Bid:</strong> {{ $auction->starting_bid }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Current Bid:</strong> {{ $auction->current_bid }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Deadline:</strong> {{ $auction->deadline }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Status:</strong> {{ $auction->is_active ? 'Active' : 'Ended' }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Condition:</strong> {{ $auction->condition }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Owner's Number:</strong> {{ $auction->phonenumber }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>VAT:</strong> {{ $auction->vat }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Transport Fee:</strong> {{ $auction->transport }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Owner's Address:</strong> {{ $auction->address }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Name of Owner:</strong> {{ $auction->lowner }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Type of Product:</strong> {{ $auction->product }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Estimated Lifespan:</strong> {{ $auction->lifespan }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Quantity:</strong> {{ $auction->quantity }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-sm"><p><strong>Created At:</strong> {{ $auction->created_at }}</p></div>
    </div>

    <fieldset class="border p-4 rounded-lg mt-5">
        <legend class="text-lg font-semibold text-gray-700">Recent Bids</legend>
        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($auction->bids as $bid)
                <div class="w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900"></h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/images/mans1.jpg" alt="User image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">{{ $bid->amount }}</p>
                                        <p class="text-sm text-gray-500 truncate">{{ $bid->user->name }}</p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">{{ $bid->created_at }}</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </fieldset>
</x-layouts>
