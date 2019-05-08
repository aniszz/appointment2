<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
  
    protected $fillable  = [
    
    	'user_name',
    	'user_company',
    	'user_mobileNo',
    	'user_email',
    ];

    protected $table = 'owners';
    
}
