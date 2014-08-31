@extends('layouts.attendance')

@section('main')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Attendance list</h4>
            </div>
            <div class="panel-body">
                @if ($attendancesList->count())
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Batch</th>
                        <th>Start of Session</th>
                        <th>End of Session</th>
                        <th>Duration (In Hour)</th>
                        <th>Presence Status</th>
                        <th>Comments</th>
                        <th>Last Modified</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($attendancesList as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->users_id }}</td>
                        <td>{{ $attendance->batches_id }}</td>
                        <td>{{ $attendance->start_time }}</td>
                        <td>{{ $attendance->end_time }}</td>
                        <td>{{ $attendance->duration }}</td>
                        <td>{{ $attendance->presence }}</td>
                        <td>{{ $attendance->comments }}</td>
                        <td>{{ $attendance->updated_at }}</td>

                        <td>{{ link_to_route('attendances.edit', 'Update', array($attendance->id),
                            array('class' => 'btn btn-primary')) }}
                            {{ link_to_route('attendances.destroy', 'Delete', array($attendance->id),
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
