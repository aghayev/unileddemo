@extends('layouts.default')
@section('content')
    <h1>Send to a friend</h1>

    <h2>Share this great deal with friends</h2>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => '/sendtoafriend')) }}

    <div class="form-group">
        {{ Form::label('name', 'Your name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}

        {{ Form::label('friend_name', 'Friend`s name') }}
        {{ Form::text('friend_name', Input::old('friend_name'), array('class' => 'form-control')) }}

        {{ Form::label('friend_email', 'Friend`s email') }}
        {{ Form::text('friend_email', Input::old('friend_email'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@stop