<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Notification</title>
</head>
<body>
    <h1>New Ticket Created</h1>
    <p>A new ticket has been created with the following details:</p>
    <ul>
        <li><strong>Title:</strong> {{ $ticket->title }}</li>
        <li><strong>Description:</strong> {{ $ticket->description }}</li>
        <li><strong>Priority:</strong> {{ ucfirst($ticket->priority) }}</li>
    </ul>
    <p>Please check the system for more details.</p>
</body>
</html>
