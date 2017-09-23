<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
	protected $table = 'marks';
    public $timestamps = false;

    protected $fillable = ['stud_id', 'act_id', 'sea_id', 'ol_id', 'marks'];
}
