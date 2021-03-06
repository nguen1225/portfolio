<?php

namespace App\Models\Repositories;

use App\Models\Vital;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class VitalRepository
{
    public function index()
    {
        $user = User::where('id', session()->get('id'))->first();
        $now = now()->format('Y-m-d');
        $today_date = Vital::select(DB::raw('height, body_weight'))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->where('vitals.registered_at', "LIKE", "%{$now}%")
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
        return number_format($result, 1, '.', '');;
    }

    // 適正体重との比較
    public function weightDifference($weight, $standard_weight) {
        $result = $standard_weight - $weight;
        return number_format($result, 1, '.', '');;
    }

    // 平均血圧
    public function avgBloodPressrue($min_blood_pressure, $max_blood_pressure)
    {
        $result = $min_blood_pressure + ($max_blood_pressure - $min_blood_pressure) / 3;
        return number_format($result, 0, '.', '');
    }

    public function post($request)
    {
        $now = $request->input('registered_at');
        $created_date = Vital::query()
        ->where('user_id', session()->get('id'))
        ->where('registered_at', "LIKE", "%{$now}%")
        ->first();

        $validated = $request->validated();

        if (!$created_date) {
            vital::create([
                'user_id' => session()->get('id'),
                'title' => $validated["title"],
                'content' => $validated["content"],
                'height' => $validated["height"],
                'max_blood_pressure' => $validated["max_blood_pressure"],
                'min_blood_pressure' => $validated["min_blood_pressure"],
                'body_weight' => $validated["body_weight"],
                'heart_rate' => $validated["heart_rate"],
                'registered_at' => $request->input('registered_at')
            ]);
            return redirect('vital');
        }

        session()->flash('flash_message', '同日に複数の登録はできません。<br>内容を変えたい場合は編集もしくは<br>削除して再度入力してください。');
        return redirect('vital');
    }

    public function show($request)
    {
        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Vital::select(DB::raw('vitals.id, user_id, title, content, height, body_weight, max_blood_pressure, min_blood_pressure, heart_rate, registered_at'))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->where('vitals.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('vital');
        }
        $avg_blood_pressure = $this->avgBloodPressrue($post_detail->min_blood_pressure, $post_detail->max_blood_pressure);
        return view('vital.show')->with('post_detail', $post_detail)->with('avg_blood_pressure', $avg_blood_pressure);
    }

    public function edit($request)
    {
        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Vital::select(DB::raw('vitals.id, user_id, title, content, height, body_weight, max_blood_pressure, min_blood_pressure, heart_rate'))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->where('vitals.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('vital');
        }
        return view('vital.edit')->with('post_detail', $post_detail);
    }

    public function update($request)
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

        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Vital::select(DB::raw('vitals.id, user_id, title, content, height, body_weight, max_blood_pressure, min_blood_pressure, heart_rate, registered_at'))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('vitals.user_id', $user->id)
        ->where('vitals.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('vital');
        }
        $avg_blood_pressure = $this->avgBloodPressrue($post_detail->min_blood_pressure, $post_detail->max_blood_pressure);
        return view('vital.show')->with('post_detail', $post_detail)->with('avg_blood_pressure', $avg_blood_pressure);

    }

    public function delete($request)
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
            DATE_FORMAT(vitals.registered_at, "%Y/%c/%e") as date,
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
        return response()->json($get_health);
    }
}
