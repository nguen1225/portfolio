<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id', 'blood_pressure', 'heart_rate', 'body_weight', 'height', 'registered_at'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
