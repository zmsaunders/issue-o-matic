<h2>I want something new</h2>
{{ Form::open() }}
    <div class="row-fluid">
        {{ Form::text('summary', '', array('placeholder' => 'What are you calling this new feature?', 'class' => 'span10')) }}
    </div>

    <div class="row-fluid">
        {{ Form::textarea('details', '', array('placeholder' => 'Give us a summary of what problem you are trying to solve, and how soon you need a solution.', 'class' => 'span10')) }}
    </div>

    <div class="row-fluid">
        {{ Form::text('email', '', array('placeholder'=> 'Your email address', 'class' => 'span5')) }}
    </div>
    <div class="row-fluid">
        {{ Form::submit('Submit Feature Request', array('class'=>'btn btn-primary')) }}
    </div>
{{ Form::close() }}