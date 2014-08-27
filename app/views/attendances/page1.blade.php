@extends('layouts.default')

@section('main')

<div id="content">
    <div id="content-header" class="mini">
        <h1>Input Attendances Page</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 center" style="text-align: left;">


                {{ Form::open(array('url' => url('foo/bar'), 'class'=>'form-inline')) }}

                {{ Form::label('selectBatch', 'SELECT BATCH') }}
                {{ Form::select('selectBatch', array('select', 'FTFL - 01', 'FTFL - 03', 'FTFL - 03', 'FTFL - 04')) }}
                {{ Form::label('selectTrack', 'SELECT TRACK') }}
                {{ Form::select('selectTrack', array('select', 'ITS', 'ITES', 'ITSS', 'MANAGEMENT')) }}

                {{ Form::label('selectTrack', 'SELECT DATE') }}


                {{ Form::selectRange('number', 01, 31) }}
                {{ Form::selectMonth('month') }}



                {{ Form::selectYear('year', 2014, 2018) }}



                {{ Form::close() }}

                <br>
                <br>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Presence</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ITS-2014000023</td>
                        <td>Sudeb Kumar</td>
                        <td><div class="checkbox">
                                <label>
                                    <input type="checkbox"> Present
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ITS-2014000023</td>
                        <td>Sudeb Kumar</td>
                        <td><div class="checkbox">
                                <label>
                                    <input type="checkbox"> Present
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ITS-2014000023</td>
                        <td>Sudeb Kumar</td>
                        <td><div class="checkbox">
                                <label>
                                    <input type="checkbox"> Present
                                </label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br />


    </div>



</div>

@stop



