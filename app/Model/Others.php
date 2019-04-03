<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    //
        protected $fillable = [
    	
		'c_name',
		'c_company',
		'c_mobileNo',
		'c_email',

		
    ];

    protected $table = 'others';

}
