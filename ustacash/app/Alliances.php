<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alliances extends Model
{
    protected $fillable = [

    ];

    protected $table = 'alliances';

    protected $primaryKey = 'alliance_id';

    public $timeStamps = false;
}
