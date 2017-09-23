<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	protected $table = 'teacher';
    protected $primarykey = 'id';
    public $timestamps = false;

    public function SEAs(){
        return $this->hasMany('App\SEA', 'faculty_id', 'id');
    }
}
