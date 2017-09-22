<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;

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

}
