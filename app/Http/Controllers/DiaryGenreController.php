<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaryGenre\CreateRequest;
use App\Models\DiaryGenre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function edit(Request $request)
    {
        $user = User::where('id', session()->get('id'))->first();
        $post_detail = DiaryGenre::select(DB::raw('
            diary_genres.id as id,
            diary_genres.name as name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->groupBy('id', 'name')
        ->where('diary_genres.user_id', $user->id)
        ->where('diary_genres.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('home');
        }

        return view('genre.edit')->with('post_detail', $post_detail);
    }

    public function update(CreateRequest $request)
    {
        $validated = $request->validated();

        $post_detail = DiaryGenre::find($request->id);
        $post_detail->name = $validated["name"];
        $post_detail->save();

        $user = User::where('id', session()->get('id'))->first();
        $post_detail = DiaryGenre::select(DB::raw('
            diary_genres.id as id,
            diary_genres.name as name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->groupBy('id', 'name')
        ->where('diary_genres.user_id', $user->id)
        ->where('diary_genres.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('home');
        }

        $get_genres = DiaryGenre::select(DB::raw('
            diary_genres.id,
            diary_genres.name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('users.id', session()->get('id'))
        ->get();

        return redirect('home')
        ->with('user', $user)
        ->with('get_genres', $get_genres)
        ->with('post_detail', $post_detail);
    }
}
