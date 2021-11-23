<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'user_id', 'registered_at', 'genre_id'];


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
