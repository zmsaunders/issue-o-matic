@layout('layouts.public')

@section('header')
    @parent
    <small>Ticket Created!</small>
@endsection

@section('content')
    <p>Your ticket has been created.</p>
    <h3>{{ $ticket->title }}</h3>
    <p>{{ $ticket->content }}</p>
    <p><strong>Reported By</strong>: {{ $ticket->reporter }}</p>

@endsection