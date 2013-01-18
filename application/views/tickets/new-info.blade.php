<h2>I have a question</h2>
{{ Form::open() }}

    <div class="row-fluid">
        {{ Form::textarea('details', '', array('placeholder' => 'What can I help you with?', 'class' => 'span10')) }}
    </div>

    <div class="row-fluid">
        {{ Form::text('email', '', array('placeholder'=> 'Your email address', 'class' => 'span5')) }}
    </div>
    <div class="row-fluid">
        {{ Form::submit('Submit Question', array('class'=>'btn btn-primary')) }}
    </div>
{{ Form::close() }}