<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
	protected $table = 'activity';
    protected $primarykey = 'id';
    public $timestamps = false;
}
