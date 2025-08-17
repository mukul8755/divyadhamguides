<!DOCTYPE html>
<html>
<head>
    <title>Welcome Mail</title>
</head>
<body>
    <h2>Hello, {{ $details['name'] }}</h2>
    <p>{{ $details['message'] }}</p>
    <p>Thank you,<br>{{ config('app.name') }}</p>
</body>
</html>
