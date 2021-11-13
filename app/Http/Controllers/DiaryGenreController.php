<?php

namespace App\Http\Controllers;

use App\Models\DiaryGenre;
use Illuminate\Http\Request;

class DiaryGenreController extends Controller
{
    // public function index()
    // {
    //     $genres = DiaryGenre::query()->where('user_id', session()->get('id'));
    //     return view('home.index')->with('user', $genres);
    // }

    public function form()
    {
        return view('genre.form');
    }

    public function post(Request $request)
    {
        $post = new DiaryGenre();
        $post->user_id = session()->get('id');
        $post->name = $request->input('name');
        $post->save();

        return redirect('home');
    }
}
