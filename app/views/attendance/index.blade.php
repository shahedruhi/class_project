@extends('layouts/attendance')
@section('main')
<br>
<br>
<br>
<div class="container">
        <div class="col-md-" style="background-color: #D8F6CE;box-shadow: inset 0px 0-px 0px #444, inset 0px 0px 0px #444;">
            <h1>Welcome to Attendance page</h1>
            <div class="row">
                <div class="col-md-5" style="background-color: #D8F6CE; box-shadow: inset 0px -0px 0px #444, inset -0px 0px 0px #444;">

                    <!--panel-->
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading text-center"><h4>STUDENT ATTENDANCE</h4></div>
                        <div class="panel-body">

                            <div class="list-group">
                                <a href="input" button type="button" class="btn btn-primary btn-lg btn-block">INPUT STUDENT ATTENDANCE</button></a>
                                <a href="input" button type="button" class="btn btn-success btn-lg btn-block">SHOW STUDENT ATTENDANCE</button></a>
                                <a href="input" button type="button" class="btn btn-info btn-lg btn-block">STUDENT ATTENDANCE REPORT</button></a>


                            </div>

                        </div>
                    </div>
                    <!--end of panel-->
                </div>

                <div class="col-md-5" style="background-color: #D8F6CE;box-shadow: inset 0px -0px 0px #444, inset -0px 0px 0px #444;">
                    <!--panel-->
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading text-center"><h4>TRAINER ATTENDANCE</h4></div>
                        <div class="panel-body">

                            <div class="list-group">
                                <a href="input" button type="button" class="btn btn-primary btn-lg btn-block">INPUT TRAINER ATTENDANCE</button></a>
                                <a href="input" button type="button" class="btn btn-success btn-lg btn-block">SHOW TRAINER ATTENDANCE</button></a>
                                <a href="input" button type="button" class="btn btn-info btn-lg btn-block">STUDENT TRAINER REPORT</button></a>
                            </div>

                        </div>
                    </div>
                    <!--end of panel-->
                </div>
            </div>


    </div>
</div>

@stop