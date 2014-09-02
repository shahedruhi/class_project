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
//        $attendancesList = DB::select('SELECT attendances.start_time, users.name, attendances.presence, attendances.comments
//                                       FROM attendances
//                                       INNER JOIN users
//                                       ON users.user_id = attendances.users_id');

        $attendancesList = DB::select('SELECT *
                                       FROM attendances
                                       WHERE date = ?', array('2014-08-02'));

        //DB::select('select * from users where id = ?', array('value'));

        //dd($attendancesList);
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
        //create a rule validation
        $rules=array(
            'users_id'=>'required',
            'batches_id'=>'required',
            'course_id'=>'required',
            'track_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            //'start_time'=>'required',
//            'end_time'=>'required',
            'duration'=>'required',
        );
        //get all information
        $attendanceInfo = Input::all();
//        $date=date_create("2013-03-15");
//        date_add($date,date_interval_create_from_date_string("1 day"));
//
//        print_r($date);
//        die();

        //validate information with the rules
        $validation=Validator::make($attendanceInfo,$rules);
        if($validation->passes())
        {
            //save new information in the database
            //and redirect to show page
            //print_r($attendanceInfo);die();



            $attendance = $attendanceInfo;
//            for($start_date = date_create($attendanceInfo['start_date']); $start_date <= $attendanceInfo['end_date']; date_add($start_date, date_interval_create_from_date_string('1 day')) )




            $start_time=strtotime($attendanceInfo['start_date']);
            $start_time = date("h:i:sa", $start_time);
            $end_time=strtotime($attendanceInfo['end_date']);
            $end_time = date("h:i:sa", $end_time);

            $attendance['start_time']=$start_time;
            $attendance['end_time']=$end_time;

            //print_r($start_time);
            //print_r($end_time);

            //die();

            $end_date = date_create($attendanceInfo['end_date']);

            for($start_date = date_create($attendanceInfo['start_date']); $start_date <= $end_date; date_add($start_date,date_interval_create_from_date_string("1 day")))
            {
//                $date=strtotime($attendance['start_date']);
//                $date = date("Y-m-d", $date);
                //print_r($start_date);
//                print_r($start_date);
//                print_r($end_date);
                //die();
            //$attendance['start_time'] = $attendanceInfo['start_date'] + $attendanceInfo['start_time'];

               // print_r($attendance['start_date']); die();
            //$attendance['end_time'] =  $attendance['start_time'] +  $attendance['duration'];
                $attendance['date']=$start_date;


//                print_r($attendance['users_id']);
//                print_r($attendance['batches_id']);
//                print_r($attendance['course_id']);
//                print_r($attendance['track_id']);
//                print_r($attendance['date']);
//                print_r($attendance['start_time']);
//                print_r($attendance['end_time']);
//                print_r($attendance['duration']);
                //die();




                Attendance::create($attendance);

            }

//            print_r($start_date);
//            die();


            //Attendance::create($attendanceInfo);
            return Redirect::route('attendances.show')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Successfully created Record.');
        }
        //show error message
        return Redirect::route('attendances.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Some fields are incomplete.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		////get all Books
        $attendancesList = Attendance::all();
        return View::make('attendances.show_List',compact('attendancesList'));
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
