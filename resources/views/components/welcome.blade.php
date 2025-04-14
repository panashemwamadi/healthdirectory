<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

   

    <div class="md:grid grid-cols-4 gap-5 p-10 mt-5 mx-2 border-2 border-gray-200 rounded-lg">
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>User Name:</strong> {{ Auth::user()->name }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>User Email:</strong> {{ Auth::user()->email }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>Created At:</strong> {{ Auth::user()->created_at }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>User Id:</strong> {{ Auth::user()->id }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>National Id:</strong> {{ Auth::user()->national_id }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>Phone Number:</strong> {{ Auth::user()->phone_number }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>Address:</strong> {{ Auth::user()->address }}</p></div>
        <div class="h-20 p-4 bg-white border border-gray-200 rounded-lg shadow-md"><p><strong>Role:</strong> {{ Auth::user()->role }}</p></div>
    </div>

    <?php
    use Illuminate\Support\Facades\DB;

    // Fetch bids along with the auction names
    $bids = DB::table('bids')
        ->join('auctions', 'bids.auction_id', '=', 'auctions.id')
        ->select('bids.*', 'auctions.item as auction_item') // Select necessary fields
        ->get();
    ?>

    <fieldset class="border p-4 rounded-lg m-2 mt-5">
        <legend class="text-lg font-semibold text-gray-700">My Previous Bids</legend>
        <ul class="grid md:grid-cols-3 gap-2">
            @foreach ($bids as $bid)
                <li class="w-full max-w-md mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-md">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900"></h5>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-10 rounded-full" src="/storage/{{ Auth::user()->cover_photo }}" alt="User image">
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">Bid ID: {{ $bid->id }}</p>
                                        <p class="text-sm text-gray-500 truncate">Auction Name: {{ $bid->auction_item }}</p>
                                    </div>
                                    <div class="inline-flex items-center text-xs font-thin text-gray-900">{{ $bid->created_at }}</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </fieldset>

</body>
</html>
