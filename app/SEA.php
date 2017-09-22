<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEA extends Model
{
	protected $table = 'sea';
    protected $primarykey = 'sea_id';
    public $timestamps = false;

    public function activity(){
        return $this->belongsTo('App\Activities');
    }

    public function faculty(){
        return $this->belongsTo('App\Faculty');
    }

    protected $fillable = ["activity_id", "faculty_id", "class", "date", "time", "isactive"];
}
