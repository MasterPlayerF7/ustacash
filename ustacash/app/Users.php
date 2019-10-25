<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [

    ];

    protected $table = 'users';
    
    protected $primaryKey = 'user_id';
    
    public $timeStamps = false;
}
