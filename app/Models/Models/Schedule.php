<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillsble = ['title', 'content', 'user_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
