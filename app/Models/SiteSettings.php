<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $fillable = [
        'site_name',
        'site_description',
        'currency',
        'currency_symbol',
        'user_registration',
        'email_verification',
        'referral_status',
        'site_email' ,
        'site_phone',
        'site_address',
        'primary_colour',
        'secondary_colour',
        'demo_balance',
        'trade_profit',
        'referral_bonus'  
    ];
    use HasFactory;
}
