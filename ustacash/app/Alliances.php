<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alliances extends Model
{
    protected $fillable = [
        'alliance_name',
        'alliance_entity',
        'alliance_creation_date',
        'alliance_finalization_date'
    ];

    protected $table = 'alliances';

    protected $primaryKey = 'alliance_id';

    public $timeStamps = false;
}
