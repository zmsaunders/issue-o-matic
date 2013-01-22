<h2>Report a bug</h2>
{{ Form::open() }}
    <input type="hidden" name="type" value="bug" />
    <div class="row-fluid">
        {{ Form::text('summary', '', array('placeholder' => 'What\'s wrong?', 'class' => 'span10')) }}
    </div>

    <div class="row-fluid">
        {{ Form::textarea('details', '', array('placeholder' => 'Give us some details! URLs, steps to reproduce, what browser you\'re using. The more the better!', 'class' => 'span10')) }}
    </div>

    <div class="row-fluid">
        <div class="span5">
            {{ Form::text('property', '', array('placeholder' => 'Which property does this apply to?', 'class' => 'span12')) }}
        </div>
        <div class="span5">
            {{ Form::text('email', '', array('placeholder'=> 'Your email address', 'class' => 'span12')) }}
        </div>
    </div>
    <div class="row-fluid">
        {{ Form::submit('Submit Bug', array('class'=>'btn btn-primary')) }}
    </div>
{{ Form::close() }}