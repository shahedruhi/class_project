@extends('layouts.master')

@section('content')


<div id="content-header" class="mini">
        <h1>Show Attendances page</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 center" style="text-align: center;">
                <div class="col-sm-offset-4 col-sm-4">
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="btn grey-switcher" >
                        <a href="/show_All">
                            Show All Attendances Sort by Date
                        </a>
                    </div>
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="btn grey-switcher" >
                        <a href="/show_By_Date_And_Batch">
                            Show Attendances By Date & Batch
                        </a>
                    </div>
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="btn grey-switcher" >
                        <a href="/show_By_Student_Name">
                            Show Attendances By Student Name
                        </a>
                    </div>
                </div>
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="btn grey-switcher" >
                        <a href="/show_By_Track">
                            Show Attendances By Track
                        </a>
                    </div>
                </div>





            </div>
        </div>

        <br />


</div>





@stop
