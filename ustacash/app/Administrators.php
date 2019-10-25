<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrators extends Model
{
    protected $fillable = [
        
    ];

    protected $table = 'administrators';
    
    protected $primaryKey = 'admin_id';
    
    public $timeStamps = false;
}
