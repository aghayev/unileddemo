@extends('layouts.default')
@section('content')
    <h1>Send to a friend</h1>

    <h2>Share this great deal with friends</h2>

    {{ Form::open(array('url' => '/sendtoafriend')) }}

    @if (empty($errors->all()))
        <span class="text-success">Successfully sent</span><br/>
    @endif

    <div class="form-group">
        {{ Form::label('name', 'Your name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
        <span class="text-danger">{{ $errors->first("name") }}</span><br/>

        {{ Form::label('friend_name', 'Friend`s name') }}
        {{ Form::text('friend_name', Input::old('friend_name'), array('class' => 'form-control')) }}
        <span class="text-danger">{{ $errors->first("friend_name") }}</span><br/>

        {{ Form::label('friend_email', 'Friend`s email') }}
        {{ Form::text('friend_email', Input::old('friend_email'), array('class' => 'form-control')) }}
        <span class="text-danger">{{ $errors->first("friend_email") }}</span><br/>
    </div>

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@stop