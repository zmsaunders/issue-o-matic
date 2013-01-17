@layout('layouts.public')

@section('content')
<div class="wrapper">
    <header>
        <h1>Tickets</h1>
        <h2>You can has them</h2>
    </header>
    <div role="main" class="main">
        {{ Form::open() }}

            {{ Form::label('summary', 'In 20 words or less, what\'s the problem?')}}
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
@endsection