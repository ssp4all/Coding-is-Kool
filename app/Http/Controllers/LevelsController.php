<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\Curr_Registrations;

class LevelsController extends Controller
{
    public function index()
    {
    	//redirect to levels with activities from the databse
        $act = Activities::all();
        return view('pages.level')->with('activity', $act);
    }

    public function searchByLevel($level){
        $act = Activities::where('level', $level)->get();
        return view('pages.level')->with('activity', $act);
    }

    public function register(Request $request, $activityNumber)
    {
    	$cr = new Curr_Registrations;
        $cr->stud_id = 6;
        $cr->act_id = $activityNumber;
        $cr->save();
        if($cr->save())
        	$request->session()->flash('success', 'Registeration Successful');
        else
        	$request->session()->flash('failure', 'Registeration Unsuccessful');
        
        return redirect()->back();
    }

}
