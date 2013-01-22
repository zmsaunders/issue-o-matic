@layout('layouts.public')

@section('header')
    @parent
    <small>Create a new ticket</small>
@endsection


@section('content')
<p>Found a bug? Want a new feature? Start by reporting it here.</p>
    <ul id="ticketTab" class="nav nav-tabs">
      <li class="active"><a href="#bug" data-toggle="tab">Bug</a></li>
      <li><a href="#info" data-toggle="tab">Question</a></li>
      <li><a href="#feature" data-toggle="tab">New Feature</a></li>
    </ul>
    <div id="ticketTabContent" class="tab-content">
        <div id="bug" class="tab-pane fade in active">
            @include('tickets.new-bug')
        </div>
        <div id="info" class="tab-pane fade">
            @include('tickets.new-info')
        </div>
        <div id="feature" class="tab-pane fade">
            @include('tickets.new-feature')
        </div>
    </div>
@endsection