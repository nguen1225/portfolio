<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;

class ScheduleController extends Controller
{
    public function index()
    {
        $posts = Schedule::all();
        return view('schedule.index')->with('posts', $posts);;
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
        // dd($request->id);
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
}
