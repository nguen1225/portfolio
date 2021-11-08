<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = User::query()->where("id", session()->get('id'))->first();
        return view('home')->with('user', $user);
    }
}
