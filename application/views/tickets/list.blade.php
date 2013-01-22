@layout('layouts.public')

@section('header')
    @parent
    <small>Listing all tickets</small>
@endsection

@section('content')

    @forelse ($tickets as $ticket)
        <h3>{{ $ticket->title }}</h3>
        <p>{{ $ticket->content }}</p>
        <p><strong>Reported By</strong>: {{ $ticket->reporter }}</p>
        <hr>
    @empty
        <p>No tickets have been created</p>
    @endforelse

@endsection