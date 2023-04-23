<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{

    protected $fillable = [
        'name',
        'symbol',
        'image',
        'status',  
    ];
    use HasFactory;
}
