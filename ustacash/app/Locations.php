<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = [

    ];

    protected $table = 'locations';
    
    protected $primaryKey = 'location_code';
    
    public $timeStamps = false;
}
