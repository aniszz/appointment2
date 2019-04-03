<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
    	'user_name',
		'user_company',
		'user_mobileNo',
		'user_email',
		'c_name',
		'c_company',
		'c_mobileNo',
		'c_email',
		'subject',
		'date',
		'time',
		'location',
		'confirm',
    ];

}
