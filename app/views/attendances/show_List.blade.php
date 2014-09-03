@extends('layouts.attendance')

@section('main')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Attendance list</h4>
            </div>
            <div class="panel-body">
                @if (count($attendancesList))
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th><h4>Date</h4></th>
                        <th><h4>Id</h4></th>
                        <th><h4>Name</h4></th>
                        <th><h4>Start Time of Session</h4></th>
                        <th><h4>End Time of Session</h4></th>
                        <th><h4>Presence Status</h4></th>
                        <th><h4>Comments</h4></th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($attendancesList as $attendance)
                    <tr>

                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->user_id }}</td>
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->start_time }}</td>
                        <td>{{ $attendance->end_time }}</td>
                        <td><h4>@if ($attendance->presence == 1)
                                {{'Present'}}
                            @else
                                {{'Absent'}}
                            @endif</h4></td>
                        <td>{{ $attendance->comments }}</td>


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
