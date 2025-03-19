<!-- resources/views/emails/outbid_notification.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Have Been Outbid</title>
</head>
<body>
    <h1>Hello {{ $bid->user->name }},</h1>
    <p>We wanted to let you know that you have been outbid on the auction for <strong>{{ $bid->auction->item }}</strong>.</p>
    <p>Your last bid was <strong>${{ $bid->amount }}</strong>.</p>
    <p>Be sure to check back and place a new bid if you're still interested!</p>
    <p>Best regards,<br>Your Auction Team</p>
</body>
</html>