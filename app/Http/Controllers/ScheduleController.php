<?php

namespace App\Http\Controllers;

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
        return view('schedule.from');
    }

    public function post(Request $request)
    {
        $post = new Schedule;
        $post->user_id = session()->get('id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('schedule');
    }

    public function show(Request $request)
    {
        $post_detail = Schedule::find($request->id);

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
