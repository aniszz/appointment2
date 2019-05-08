<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable  = [
    	
    	'subject',
    	'date',
    	'time',
    	'location',
    	
    ];

   protected $table = 'appointments';

}
