<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DiaryGenre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = User::query()->where("id", session()->get('id'))->first();
        $get_genres = DiaryGenre::select(DB::raw('
            diary_genres.id,
            diary_genres.name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('users.id', session()->get('id'))
        ->get();

        return view('home.index')
        ->with('get_genres', $get_genres)
        ->with('user', $user);
    }
}
