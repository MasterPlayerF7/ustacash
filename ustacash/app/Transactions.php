<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'transaction_type',
        'transaction_admin',
        'transaction_user_source',
        'transaction_user_target',
        'transaction_alliance',
        'transaction_amount',
        'transaction_date'
    ];

    protected $table = 'transactions';

    protected $primaryKey = 'transaction_id';

    public $timeStamps = false;
}
