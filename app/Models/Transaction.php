<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'date',
        'trx_id',
        'username',
        'amount',
        'charge',
        'post_balance',
        'detail'   
    ];


    use HasFactory;
}
