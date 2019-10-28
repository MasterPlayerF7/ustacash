<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrators extends Model
{
    protected $fillable = [
        'alliance_id',
        'admin_nickname',
        'admin_password'
    ];

    protected $table = 'administrators';

    protected $primaryKey = 'admin_id';

    public $timeStamps = false;
}
