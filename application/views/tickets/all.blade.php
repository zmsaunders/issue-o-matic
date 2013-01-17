<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Current Issues</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Tickets</h1>
            <h2>You can has them</h2>
        </header>
        <div role="main" class="main">
            @foreach ($tickets as $ticket)
                <p>Reported by: {{$ticket->reporter}}</p>
                <p>Assigned to: {{$ticket->assigned}}</p>
                <p>Issue: {{$ticket->content}}</p>
            <hr />
            @endforeach
        </div>
    </div>
</body>
</html>
