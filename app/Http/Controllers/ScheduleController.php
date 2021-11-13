<?php

namespace App\Http\Controllers;

use App\Models\DiaryGenre;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $posts = Schedule::query()
        ->where("user_id", session()->get('id'))
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('schedule.index')
        ->with('posts', $posts);
    }

    public function search(Request $request)
    {
        $rows = [];
        $key_word = trim($request->input("key_word"));
        $results = Schedule::query()
        ->where('content', 'LIKE', "%{$key_word}%")
        ->orderByDesc('created_at')
        ->paginate(8);

        foreach ($results as $item) {
            $rows[] = $item;
        }

        return view('schedule/search')
        ->with('results', $rows)
        ->with('paginate', $results);

    }

    public function scheduleDate()
    {
        $rows = [];
        $posts = Schedule::select(DB::raw('
            id,
            title,
            DATE_FORMAT(created_at, "%Y-%m-%d") as start
        '))
        ->get();
        foreach ($posts as $post) {
            $rows[] = $post;
        }

        return response()->json($rows);
    }

    public function from()
    {
        $get_genres = DiaryGenre::select('name', 'id')->get();
        return view('schedule.from')->with('get_genres', $get_genres);
    }

    public function post(Request $request)
    {
        $post = new Schedule;
        $post->user_id = session()->get('id');
        $post->genre_id = $request->input('genre_id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('schedule');
    }

    public function show(Request $request)
    {
        $post_detail = Schedule::select(DB::raw('
            schedules.id as id,
            schedules.title as title,
            schedules.content as content,
            schedules.created_at as created_at,
            diary_genres.name as genreName
        '))
        ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
        ->groupBy('id', 'title', 'content', 'genreName', 'created_at')
        ->where('schedules.id', $request->id)
        ->first();

        return view('schedule.show')->with('post_detail', $post_detail);
    }

    public function edit(Request $request)
    {
        $post_detail = Schedule::find($request->id);

        return view('schedule.edit')->with('post_detail', $post_detail);
    }

    public function update(Request $request)
    {
        $post_detail = Schedule::find($request->id);
        $post_detail->title = $request->input('title');
        $post_detail->content = $request->input('content');
        $post_detail->save();

        return redirect('schedule');

    }

    public function delete(Request $request)
    {
        $post_detail = Schedule::find($request->id);
        $post_detail->delete();

        return redirect('schedule');
    }
}
