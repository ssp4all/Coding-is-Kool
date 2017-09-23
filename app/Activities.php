<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
	protected $table = 'activity';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function SEAs(){
        return $this->hasMany('App\SEA',  'activity_id', 'id');
    }
}
