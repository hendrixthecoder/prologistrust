<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawmethod extends Model
{
    protected $fillable = [
        'method_name',
        'currency',
        'rate',
        'processing_time',
        'min_amount',
        'max_amount',
        'fixed_charge',
        'percent_charge',
        'withdraw_instruction',
        'method_image',
        'status'
    ];
    use HasFactory;
}
