<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vital;

class VitalController extends Controller
{
    public function index()
    {
        $posts = Vital::all();
        return view('vital.index')->with('posts', $posts);
    }

    public function from()
    {
        return view('vital.from');
    }

    public function post(Request $request)
    {
        $post = new Vital;
        $post->user_id = session()->get('id');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->height = $request->input('height');
        $post->blood_pressure = $request->input('blood_pressure');
        $post->body_weight = $request->input('body_weight');
        $post->heart_rate = $request->input('heart_rate');
        $post->save();
        return redirect('vital');
    }

    public function show(Request $request)
    {
        $post_detail = Vital::find($request->id);
        return view('vital.show')->with('post_detail', $post_detail);
    }

    public function edit(Request $request)
    {
        $post_detail = Vital::find($request->id);
        return view('vital.edit')->with('post_detail', $post_detail);
    }

    public function update(Request $request)
    {
        $post_detail = Vital::find($request->id);
        $post_detail->title = $request->input('title');
        $post_detail->content = $request->input('content');
        $post_detail->save();

        return redirect('vital');

    }

    public function delete(Request $request)
    {
        $post_detail = Vital::find($request->id);
        $post_detail->delete();

        return redirect('vital');
    }
}
