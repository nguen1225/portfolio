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
    public function bodyHeight() 
    {
        $user = User::where('id', 1)->first();
        $get_height = Vital::select(DB::raw('vitals.height'))->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy('users.id', 'vitals.height')
        ->get();
        return response()->json($get_height);
    }

    // 体重のデータ取得
    public function bodyWeight() 
    {
        $user = User::where('id', 1)->first();
        $get_weight = Vital::select(DB::raw('vitals.body_weight'))->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy('users.id', 'vitals.body_weight')
        ->get();
        return response()->json($get_weight);
    }

    // 血圧のデータ取得
    public function bodyBloodPressure() 
    {
        $user = User::where('id', 1)->first();
        $get_blood_pressure = Vital::select(DB::raw('vitals.blood_pressure'))->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy('users.id', 'vitals.blood_pressure')
        ->get();
        return response()->json($get_blood_pressure);
    }

    // 心拍数のデータ取得
    public function bodyHeartRate() 
    {
        $user = User::where('id', 1)->first();
        $get_heart_rate = Vital::select(DB::raw('vitals.heart_rate'))->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy('users.id', 'vitals.heart_rate')
        ->get();
        return response()->json($get_heart_rate);
    }
    

    // 一ヶ月間の日数
    public function oneMonth() 
    {
        $user = User::where('id', 1)->first();
        $endDay = date('Y-m-d', strtotime("-1 day"));
        $startDay = date('Y-m-d', strtotime("-31 day"));
        $period = CarbonPeriod::create($startDay, '1 days', $endDay);

        $rows = [];

        foreach ($period as $date) {
            $md = $date->format('Y.m.d');
            $rows[] = $md;
        }

        return response()->json($rows);
    }
}
