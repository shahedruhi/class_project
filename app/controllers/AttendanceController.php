<?php

class AttendanceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('attendances/index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function input_Attendances()
    {
        return View::make('attendances.input_Attendances');
    }

    public function create_Attendances_Report()
    {
        return View::make('attendances.create_Attendances_Report');
    }

    public function edit_Attendances()
    {
        return View::make('attendances.edit_Attendances');
    }

    public function show_List()
    {
        //get all Books
        $attendancesList = Attendance::all();
        return View::make('attendances.show_List',compact('attendancesList'));
    }

    public function show_Attendances()
    {
        return View::make('attendances.show_Attendances');
    }

    public function input_By_Date()
    {
        //$attendancesList = Attendance::all();
        $attendancesList = DB::select('SELECT attendances.start_time, users.name, attendances.presence, attendances.comments
                                       FROM attendances
                                       INNER JOIN users
                                       ON users.user_id = attendances.users_id');
        dd($attendancesList);
        return View::make('attendances.input_By_Date',compact('attendancesList'));
        //return View::make('attendances.input_By_Date');
    }

    public function commence_course()
    {
        return View::make('attendances.commence_course');
    }


        public function create()
	{
        //commence courses and add data into attendances table
        return View::make('attendances.create');
	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
