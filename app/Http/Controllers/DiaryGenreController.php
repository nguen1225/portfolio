<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaryGenre\CreateRequest;
use App\Models\DiaryGenre;
use Illuminate\Http\Request;

class DiaryGenreController extends Controller
{
    public function form()
    {
        return view('genre.form');
    }

    public function post(CreateRequest $request)
    {
        $validated = $request->validated();

        $post = new DiaryGenre();
        $post->user_id = session()->get('id');
        $post->name = $validated["name"];
        $post->save();

        return redirect('home');
    }
}
