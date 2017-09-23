<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'student';
    protected $primarykey = 'uid';
    public $timestamps = false;

    public function current_tests(){
        return $this->hasMany('App\Current_test', 'stud_id', 'uid');
    }
}
