<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body>
    <h2>📩 New Contact Message</h2>
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>

    <hr>
    <small>Sent on {{ $contact->created_at->format('d M Y, H:i A') }}</small>
</body>
</html>
