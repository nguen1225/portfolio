<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'registered_at',
        'title',
        'content',
        'height',
        'body_weight',
        'max_blood_pressure',
        'min_blood_pressure',
        'heart_rate'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
