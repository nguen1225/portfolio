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
        ->where('registered_at', "LIKE", "%{$now}%")
        ->first();

        if ($today_date) {
            $bmi = $this->bmi($today_date->height, $today_date->body_weight);
            $standard_weight = $this->standardWeight($today_date->height);
            $weight_difference = $this->weightDifference($today_date->body_weight, $standard_weight);
        } else {
            $bmi = 0;
            $standard_weight = 0;
            $weight_difference = 0;
        }

        $posts = Vital::query()
        ->where("user_id", session()->get('id'))
        ->orderByDesc('registered_at')
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
        if($height === null || $weight === null){
            return 0;
        }

        $result = $weight / (($height / 100) * ($height / 100));
        return number_format( $result, 1, '.', '' );
    }

    // 標準体重計算
    public function standardWeight($height){
        $result = ($height / 100) * ($height / 100) * 22;
        return number_format($result, 2, '.', '');;
    }

    // 適正体重との比較
    public function weightDifference($weight, $standard_weight) {
       $result = $standard_weight - $weight;
       return number_format($result, 2, '.', '');;
    }

    // 平均血圧
    public function avgBloodPressrue($min_blood_pressure, $max_blood_pressure)
    {
        $result = $min_blood_pressure + ($max_blood_pressure - $min_blood_pressure) / 3;
        return number_format($result, 0, '.', '');
    }

    public function from()
    {
        return view('vital.from');
    }

    public function post(PostVitalRequest $request)
    {
        $now = $request->input('registered_at');
        $created_date = Vital::query()->where('registered_at', "LIKE", "%{$now}%")->first();

        $validated = $request->validated();

        if (!$created_date) {
            $post = new Vital;
            $post->user_id = session()->get('id');
            $post->title = $validated["title"];;
            $post->content = $validated["content"];;
            $post->height = $validated["height"];;
            $post->max_blood_pressure = $validated["max_blood_pressure"];;
            $post->min_blood_pressure = $validated["min_blood_pressure"];;
            $post->body_weight = $validated["body_weight"];;
            $post->heart_rate = $validated["heart_rate"];;
            $post->registered_at = $request->input('registered_at');
            $post->save();
            return redirect('vital');
        }

        session()->flash('flash_message', '検査結果の入力は1日1回です。本日の内容を変えたい場合は編集もしくは削除して再度入力してください。');
        return redirect('vital/post');
    }

    public function show(Request $request)
    {
        $post_detail = Vital::find($request->id);
        $avg_blood_pressure = $this->avgBloodPressrue($post_detail->min_blood_pressure, $post_detail->max_blood_pressure);
        return view('vital.show')->with('post_detail', $post_detail)->with('avg_blood_pressure', $avg_blood_pressure);
    }

    public function edit(Request $request)
    {
        $post_detail = Vital::find($request->id);
        return view('vital.edit')->with('post_detail', $post_detail);
    }

    public function update(PostVitalRequest $request)
    {
        $validated = $request->validated();

        $post_detail = Vital::find($request->id);
        $post_detail->title = $validated["title"];
        $post_detail->content = $validated["content"];;
        $post_detail->height = $validated["height"];;
        $post_detail->max_blood_pressure = $validated["max_blood_pressure"];;
        $post_detail->min_blood_pressure = $validated["min_blood_pressure"];;
        $post_detail->body_weight = $validated["body_weight"];;
        $post_detail->heart_rate = $validated["heart_rate"];;
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
            DATE_FORMAT(vitals.registered_at, "%c月%e日") as date,
            vitals.height as height,
            vitals.body_weight as weight,
            vitals.max_blood_pressure as max_blood_pressure,
            vitals.min_blood_pressure as min_blood_pressure,
            TRUNCATE(min_blood_pressure + (max_blood_pressure - min_blood_pressure) /3, 0) as avg_blood_pressure,
            vitals.heart_rate as heart_rate
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->orderBy('date', 'asc')
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
