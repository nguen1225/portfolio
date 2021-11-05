<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vital;
use App\Http\Requests\Vital\PostVitalRequest;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;

class VitalController extends Controller
{


    public function index(Request $request)
    {
        $now = now()->format('Y-m-d');
        $today_date = Vital::select(DB::raw('height, body_weight'))
        ->where('created_at', "LIKE", "%{$now}%")
        ->first();

        $bmi = $this->bmi($today_date->height, $today_date->body_weight);
        $standard_weight = $this->standardWeight($today_date->height);
        $weight_difference = $this->weightDifference($today_date->body_weight, $standard_weight);

        $posts = Vital::query()
        ->where("user_id", session()->get('id'))
        ->orderByDesc('created_at')
        ->paginate(7);

        return view('vital.index')
        ->with('posts', $posts)
        ->with('bmi', $bmi)
        ->with('standard_weight', $standard_weight)
        ->with('weight_difference', $weight_difference);
    }

    // BMI計算
    public function bmi($height, $weight)
    {
        $bmi = $weight / (($height / 100) * ($height / 100));
        $result = number_format( $bmi, 1, '.', '' );
        return $result;
    }

    // 標準体重計算
    public function standardWeight($height){
        $weight = ($height / 100) * ($height / 100) * 22;
        $result = number_format($weight, 2, '.', '');
        return $result;
    }

    // 適正体重との比較
    public function weightDifference($weight, $standard_weight) {
       $weight_difference = $standard_weight - $weight;
       $result = number_format($weight_difference, 2, '.', '');
       return $result;
    }

    public function from()
    {
        return view('vital.from');
    }

    public function post(PostVitalRequest $request)
    {
        $now = now()->format('Y-m-d');
        $created_date = Vital::query()->where('created_at', "LIKE", "%{$now}%")->first();

        if (!$created_date) {
            $post = new Vital;
            $post->user_id = session()->get('id');
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->height = $request->input('height');
            $post->max_blood_pressure = $request->input('max_blood_pressure');
            $post->min_blood_pressure = $request->input('min_blood_pressure');
            $post->avg_blood_pressure = $request->input('avg_blood_pressure');
            $post->body_weight = $request->input('body_weight');
            $post->heart_rate = $request->input('heart_rate');
            $post->save();
            return redirect('vital');
        }
        session()->flash('flash_message', '検査結果の入力は1日1回です。本日の内容を変えたい場合は編集もしくは削除して再度入力してください。');
        return redirect('vital/post');
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
        $post_detail->max_blood_pressure = $request->input('max_blood_pressure');
        $post_detail->min_blood_pressure = $request->input('min_blood_pressure');
        $post_detail->avg_blood_pressure = $request->input('avg_blood_pressure');
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
        $user = User::where('id', session()->get('id'))->first();
        $get_health = Vital::select(DB::raw('
            DATE_FORMAT(vitals.created_at, "%c月%e日") as date,
            vitals.height as height,
            vitals.body_weight as weight,
            vitals.max_blood_pressure as max_blood_pressure,
            vitals.min_blood_pressure as min_blood_pressure,
            vitals.avg_blood_pressure as avg_blood_pressure,
            vitals.heart_rate as heart_rate
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->groupBy(
            'users.id',
            'height',
            'body_weight',
            'max_blood_pressure',
            'min_blood_pressure',
            'avg_blood_pressure',
            'heart_rate',
            'date'
        )
        ->get();

        $endDay = date('Y-m-d', strtotime("-1 day"));
        $startDay = date('Y-m-d', strtotime("-31 day"));
        $period = CarbonPeriod::create($startDay, '1 days', $endDay);

        $rows = [];

        foreach ($period as $date) {
            $md = $date->format('n月j日');
            $rows[$md] = 0;
        }

        foreach ($get_health as $item) {
            $event[$item->date] = $item;
        }

        $health = array_merge($rows, $event);

        return response()->json($health);
    }
}
