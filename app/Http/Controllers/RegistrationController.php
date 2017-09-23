<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activities;
use App\SEA;
use App\Current_registration;
use App\Current_test;
use App\Marks;

class RegistrationController extends Controller
{
    public function index($level){
        $act = Activities::where('level', $level)->get();
        return view('pages.levelTeacher')->with('activity', $act);
    }

    public function registerStudents(Request $request){
        $sea = SEA::create(['activity_id' => $request->actid,
                    'faculty_id' => 1,
                    'class' => $request->class,
                    'date' => $request->date,
                    'time' => $request->time,
                    'isactive' => true]);

        $registrations = Current_registration::where('act_id', $sea->activity_id)
                                            ->orderBy('timestamp', 'asc')
                                            ->take( $request->numberOfStud)
                                            ->get();

        $finalRegistration = [];
        foreach($registrations as $registration){
            array_push($finalRegistration, [
                'stud_id' => $registration->stud_id,
                'sea_id' => $sea->sea_id
            ]);
        }

        Current_test::insert($finalRegistration);


        return $this->getCurrentActivities();
    }

    public function getCurrentActivities(){
        $seas = SEA::where('isactive', true)->get();
        foreach($seas as $sea){
            $sea->activity;
            $sea->faculty;
        }
        return view('welcomeTeacher')->with('seas', $seas);
    }

    public function gradeStudents($sea_id){
        $current_tests = Current_test::where('sea_id', $sea_id)->get();
        $sea = SEA::where('sea_id', $sea_id)->first();
        $activity = $sea->activity;
        $students = [];
        foreach($current_tests as $current_test){
            array_push($students, $current_test->student);
        }

        return view('pages.gradeMe')->with(['students' => $students, 
                                            'sea' => $sea,
                                            'activity' => $activity]);
    }

    public function updateMarks(Request $request){
        $studentIds = $request->uid;
        $marks = $request->marks;

        $markEntry = [];
        $i = 0;
        foreach($studentIds as $studentId){
            array_push($markEntry, [
                'stud_id' => $studentId,
                'marks' => $marks[$i],
                'act_id' => $request->activity_id,
                'sea_id' => $request->sea_id,
                'ol_id' => $request->ol_id,
            ]);
            $i++;
        }
        Marks::insert($markEntry);
        $sea = SEA::where('sea_id', $request->sea_id)->first();
        $sea->delete();
        return $this->getCurrentActivities();
    }

}
