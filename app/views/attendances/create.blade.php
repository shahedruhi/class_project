@extends('layouts.attendance')
@section('main')
<h1>COMMENCE COURSE</h1>

{{ Form::open(array('route' => 'attendances.store')) }}

<ul>
    <li>
        {{ Form::label('Course ID', 'Course ID:') }}
        {{ Form::text('course_Id') }}
    </li>
    <li>
        {{ Form::label('Track ID', 'Track ID:') }}
        {{ Form::text('track_Id') }}
    </li>
    <li>
        {{ Form::label('Batch ID', 'Batch ID:') }}
        {{ Form::text('batch_Id') }}
    </li>
    <li>
        {{ Form::label('Start Date', 'Start Date:') }}
        {{ Form::text('start_Date') }}
    </li>
    <li>
        {{ Form::label('End Date', 'End Date:') }}
        {{ Form::text('end_Date') }}
    </li>
    <li>
        {{ Form::label('Session Duration', 'Session Duration:') }}
        {{ Form::text('end_Date') }}
    </li>

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