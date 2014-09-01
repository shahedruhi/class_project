@extends('layouts.attendance')
@section('main')
<h1>COMMENCE COURSE</h1>

{{ Form::open(array('route' => 'attendances.store')) }}

<ul>
    <li>
        {{ Form::label('User ID', 'User ID:') }}
        {{ Form::input('number', 'users_id') }}
    </li>
    <li>
        {{ Form::label('Batch ID', 'Batch ID:') }}
        {{ Form::input('number', 'batches_id') }}
    </li>
    <li>
        {{ Form::label('Course ID', 'Course ID:') }}
        {{ Form::input('number', 'course_id') }}
    </li>
    <li>
        {{ Form::label('Track ID', 'Track ID:') }}
        {{ Form::input('number', 'track_id') }}
    </li>
    <li>
        {{ Form::label('Start Time', 'Start time:') }}
        {{ Form::input('datetime', 'start_time') }}
    </li>
    <li>
        {{ Form::label('End Time', 'End Time:') }}
        {{ Form::input('datetime', 'end_time') }}
    </li>
    <li>
        {{ Form::label('Session Duration', 'Session Duration:') }}
        {{ Form::input('number', 'duration') }}
<!--    <li>-->
<!--        {{ Form::label('Start Time', 'Start Time:') }}-->
<!--        {{ Form::input('time', 'start_time') }}-->
<!--    </li>-->
<!--    <li>-->
<!--        {{ Form::text('name', $value = null , $attributes = ['class' => 'form-inline', 'id' => 'myid', 'disabled' ,'placeholder' => 'Email']) }}-->
<!--        {{ Form::label('email', 'E-Mail Address', array('class' => 'awesome')) }}-->
<!--        {{ Form::checkbox('admin', 'yes', true) }}-->
<!--    </li>-->
    <li>

        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    </li>
</ul>
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop