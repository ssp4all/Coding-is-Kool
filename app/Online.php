<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEA extends Model
{
	protected $table = 'online';
    protected $primarykey = 'online_id';
    public $timestamps = false;
}
