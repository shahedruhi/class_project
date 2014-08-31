@extends('layouts.attendance')

@section('main')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Input Attendance</h4>
            </div>
            <div class="panel-body">
                <div class="row">

                {{ Form::open() }}
                        @if ($attendancesList->count())
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Presence Status</th>
                                <th>Comments</th>


                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($attendancesList as $attendance)
                            <tr>
                                <td>{{ $attendance->start_date }}</td>
                                <td>{{ $attendance->name }}</td>

                                <td>{{ $attendance->presence }}</td>
                                <td>{{ $attendance->comments }}</td>


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
                <div class="row" style="text-align: center;">


                        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

                </div>

                {{ Form::close() }}
                @if ($errors->any())

                    {{implode('',$errors->all('<li class="error">:message</li>'))}}

                @endif

            </div>
        </div>
    </div>
</div>

@stop
