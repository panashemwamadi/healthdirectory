<!DOCTYPE html>
<html>
<head>
    <title>You Have Been Outbid</title>
</head>
<body>
    <h1>You Have Been Outbid</h1>
    <p>You have been outbid on the auction: <strong>{{ $auction->title }}</strong>.</p>
    <p>The new highest bid is: <strong>${{ number_format($newBidAmount, 2) }}</strong>.</p>
    <p>
        <a href="{{ url('/auctions/' . $auction->id) }}">View Auction</a>
    </p>
    <p>Thank you for using our auction service!</p>
</body>
</html>