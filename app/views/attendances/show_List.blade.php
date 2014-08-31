@extends('layouts.attendance')

@section('main')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Current Courses</h4>
            </div>
            <div class="panel-body">
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
    </div>
</div>

@stop
