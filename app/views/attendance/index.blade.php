@extends('layouts/attendance')
@section('main')
<br>
<br>
<br>
<div class="container">

    <div class="row">

        <div class="col-md-2" style="background-color: #; box-shadow: inset 0px -0px 0px #444, inset 0px 0px 0px #444;">
            <p>

            </p>
        </div>
        <div class="col-md-10" style="background-color: #D8F6CE;box-shadow: inset 0px 0-px 0px #444, inset 0px 0px 0px #444;">
            <h1>Welcome to Attendance page</h1>
            <div class="row">
                <div class="col-md-6" style="background-color: #D8F6CE; box-shadow: inset 0px -0px 0px #444, inset -0px 0px 0px #444;">

                    <!--panel-->
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h4>4 STUDENTS HAVE REGISTERED</h4></div>
                        <div class="panel-body">

                            <div class="list-group">
                                <a href="view_All_Students.php" class="list-group-item list-group-item-success"><b>VIEW ALL STUDENTS</b></a>
                                <a href="add_New_Student.php" class="list-group-item list-group-item-info"><b>ADD NEW STUDENT</b></a>
                                <a href="add_New_Student_With_Courses.php" class="list-group-item list-group-item-warning"><b>ASSIGN STUDENT WITH COURSES</b></a>
                            </div>

                        </div>
                    </div>
                    <!--end of panel-->
                </div>

                <div class="col-md-6" style="background-color: #D8F6CE;box-shadow: inset 0px -0px 0px #444, inset -0px 0px 0px #444;">
                    <!--panel-->
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h4>5 COURSES ARE AVAILABLE</h4></div>
                        <div class="panel-body">

                            <div class="list-group">
                                <a href="view_All_Courses.php" class="list-group-item list-group-item-success"><b>VIEW ALL COURSES</b></a>
                                <a href="add_New_Course.php" class="list-group-item list-group-item-info"><b>ADD NEW COURSE</b></a>
                                <a href="add_Courses_To_Students.php" class="list-group-item list-group-item-warning"><b>ASSIGN COURSES TO STUDENTS</b></a>
                            </div>

                        </div>
                    </div>
                    <!--end of panel-->
                </div>
            </div>


    </div>
</div>

@stop