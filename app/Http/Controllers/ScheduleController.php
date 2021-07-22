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
        // dd(User::where('id', 1)->get());
        $post = new Schedule;
        $post->user_id = 1;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect('schedule');
    }
}
