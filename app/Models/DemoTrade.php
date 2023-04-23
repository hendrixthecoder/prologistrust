<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoTrade extends Model
{
    protected $fillable = [
        'username',
        'currency',
        'symbol',
        'amount',
        'intime',
        'high/low',
        'result' ,
        'status',
        'date', 
    ];

    use HasFactory;
}
