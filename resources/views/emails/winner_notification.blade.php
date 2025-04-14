<!DOCTYPE html>
<html>
<head>
    <title>Auction Winner Notification</title>
</head>
<body>
    <h1>Congratulations!</h1>
    <p>You have won the auction for: {{ $auction->item }}</p>
    <p>Your winning bid was: {{ $auction->winner->amount }}</p>
    <p>Thank you for participating!</p>
</body>
</html>