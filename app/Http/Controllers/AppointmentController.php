<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Exception;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Appointment::orderBy('id','asc')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // if(Appointment::where('phone',$request->phone)->where('name',$request->name)->exists()){
            //     return response()->json(array('This mobile number and name is already used.'), 201);
            // }
            $app = new Appointment();
            $app->name=$request->name;
            $app->email=$request->email;
            $app->phone=$request->phone;
            $app->appointment_date=$request->date;
            $app->department=$request->department;
            $app->doctor_id=$request->doctor;
            $app->message=$request->message;
            $app->status=1;
            if ($app->save()) {
                return response()->json(array('Appointment Success'), 201);
            }

        }catch(Exception $e){
            return response()->json(array('error'=>"Please try again"), 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function appointment()
	{
		return Appointment::orderBy('id','asc')->get();

	}
}
