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
            {{ Form::open() }}

                {{ Form::label('summary', 'In 20 words to less, what\'s the problem?')}}
                <br>
                {{ Form::text('summary') }}

                <br>

                {{ Form::label('details', 'Need to give us more info? Enter additional details:')}}
                <br>
                {{ Form::textarea('details')}}

                <br>

                {{ Form::label('email', 'E-Mail Address') }}
                {{ Form::text('email') }}

                <br>


            {{ Form::close() }}
        </div>
    </div>
</body>
</html>
