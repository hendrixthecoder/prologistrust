<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'date',
        'transaction_id',
        'username',
        'method',
        'amount',
        'charge',
        'total',
        'rate',
        'payable',
        'status'   
    ];
    use HasFactory;
}
