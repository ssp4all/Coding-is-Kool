<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEA extends Model
{
	protected $table = 'sea';
    protected $primarykey = 'sea_id';
    public $timestamps = false;

    public function activity(){
        return $this->belongsTo('App\Activities', 'activity_id', 'id');
    }

    public function faculty(){
        return $this->belongsTo('App\Faculty', 'faculty_id', 'id');
    }

    protected $fillable = ["activity_id", "faculty_id", "class", "date", "time", "isactive"];
}
