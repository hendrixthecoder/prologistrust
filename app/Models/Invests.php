<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invests extends Model
{

    protected $guarded = ['id'];

    public function plan()
    {
        return $this->hasOne(Plans::class, 'id', 'plan_id')->withDefault();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id')->withDefault();
    }


    use HasFactory;
}
