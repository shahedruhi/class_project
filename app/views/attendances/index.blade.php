@extends('layouts.attendance')

@section('main')

<!--<div id="content">-->
<div id="content-header" class="mini">
    <h1>Attendances Main Page</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 center" style="text-align: center;">
            <p>{{ link_to_route('attendances.create', 'Create new book') }}</p>
            @if ($attendancesList->count())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>UserId</th>
                    <th>Presence</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>
                @foreach ($attendancesList as $attendance)
                <tr>
                    <td>{{ $attendance->users_id }}</td>
                    <td>{{ $attendance->presence }}</td>

                    <td>{{ link_to_route('attendances.show', 'Read', array($attendance->id),
                        array('class' => 'btn btn-primary')) }}
                    {{ link_to_route('attendances.edit', 'Update', array($attendance->id),
                        array('class' => 'btn btn-warning')) }}</td>

                </tr>
                @endforeach
                </tbody>
            </table>
            @else
            There are no attendances
            @endif



        </div>
    </div>

    <br />


</div>


@stop