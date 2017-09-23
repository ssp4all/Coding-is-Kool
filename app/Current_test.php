<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Current_test extends Model
{
	protected $table = 'curr_test';
    public $timestamps = false;

    public function student(){
        return $this->belongsTo('App\Student', 'stud_id', 'uid');
    }
}
