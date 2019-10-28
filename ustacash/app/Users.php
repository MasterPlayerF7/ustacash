<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'user_name',
        'user_surname',
        'user_identification',
        'user_email',
        'user_password',
        'user_mobile',
        'user_location',
        'user_deposit',
        'user_validated',
        'user_verification_code'
    ];

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public $timeStamps = false;
}
