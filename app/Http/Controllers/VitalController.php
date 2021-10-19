<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vital;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;

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
        $post_detail->height = $request->input('height');
        $post_detail->blood_pressure = $request->input('blood_pressure');
        $post_detail->body_weight = $request->input('body_weight');
        $post_detail->heart_rate = $request->input('heart_rate');
        $post_detail->save();

        return redirect('vital');

    }

    public function delete(Request $request)
    {
        $post_detail = Vital::find($request->id);
        $post_detail->delete();

        return redirect('vital');
    }

    // 身長のデータ取得
    public function health() 
    {
        $user = User::where('id', 1)->first();
        $get_health = Vital::select(DB::raw('
            DATE_FORMAT(vitals.created_at, "%m.%d") as date, 
            vitals.height as height, 
            vitals.body_weight as weight, 
            vitals.blood_pressure as blood_pressure, 
            vitals.heart_rate as heart_rate
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy(
            'users.id', 
            'height', 
            'body_weight', 
            'blood_pressure', 
            'heart_rate', 
            'date'
        )
        ->get();

        $endDay = date('Y-m-d', strtotime("-1 day"));
        $startDay = date('Y-m-d', strtotime("-31 day"));
        $period = CarbonPeriod::create($startDay, '1 days', $endDay);

        $rows = [];

        foreach ($period as $date) {
            $md = $date->format('m.d');
            $rows[$md] = 0;
        }

        foreach ($get_health as $item) {
            $event[$item->date] = $item;
        }

        $health = array_merge($rows, $event);

        return response()->json($health);
    }
}
