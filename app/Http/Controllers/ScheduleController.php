<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hey";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $input = $request->all();
        $created_schedule = \App\Schedule::create($input);
        
        //add users to schedule_users pivot
        $users = $input['users'];
        foreach($users as $user) {
            $schedule_user = new \App\ScheduleUser;
            $schedule_user->schedule_id = $created_schedule->id;
            $schedule_user->user_id = $user;
            $schedule_user->save();
        }
        print_r($input['users']);

       // Log::info($created_schedule);
       // $id = $created_schedule->id;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //delete old records in schedule_user table
        \App\ScheduleUser::where('schedule_id', '=', $id)->delete();

        //update schedule record
        $input = $request->all();
        $updatedSchedule = \App\Schedule::find($id)->update($input);

        //add new records to schedule_users to schedule_users pivot
        $users = $input['users'];
        foreach($users as $user) {
            $schedule_user = new \App\ScheduleUser;
            $schedule_user->schedule_id = $id;
            $schedule_user->user_id = $user;
            $schedule_user->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //delete records in both schedule and schedule user
        \App\Schedule::where('id', '=', $id)->delete();
        \App\ScheduleUser::where('schedule_id', '=', $id)->delete();
        
    }
}
