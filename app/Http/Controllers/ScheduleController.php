<?php

namespace App\Http\Controllers;

use App\Http\Requests\Schedule\DiaryCreationRequest;
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
        ->orderByDesc('registered_at')
        ->paginate(7);

        $get_genres = DiaryGenre::select(DB::raw('
            diary_genres.id,
            diary_genres.name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('users.id', session()->get('id'))
        ->get();

        return view('schedule.index')
        ->with('posts', $posts)
        ->with('get_genres', $get_genres);
    }

    public function search(Request $request)
    {
        $rows = [];
        $key_word = trim($request->input("key_word"));

        switch ($request->input("deposit")){
            case 'title':
                $results = Schedule::select(DB::raw('
                    schedules.id as s_id,
                    schedules.user_id as s_user_id,
                    schedules.title as s_title,
                    schedules.content as s_content,
                    DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as s_created

                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->where('schedules.title', 'LIKE', "%{$key_word}%")
                ->get();
            break;

            case 'content':
                $results = Schedule::select(DB::raw('
                    schedules.id as s_id,
                    schedules.user_id as s_user_id,
                    schedules.title as s_title,
                    schedules.content as s_content,
                    DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as s_created

                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->where('schedules.content', 'LIKE', "%{$key_word}%")
                ->get();
            break;

            case 'genre':
                $results = Schedule::select(DB::raw('
                    schedules.id as s_id,
                    schedules.user_id as s_user_id,
                    schedules.title as s_title,
                    schedules.content as s_content,
                    DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as s_created,
                    diary_genres.name as g_name
                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->Where('diary_genres.name', 'LIKE', "%{$key_word}%")
                ->get();
            break;

            default:
            $results = Schedule::select(DB::raw('
                schedules.id as s_id,
                schedules.user_id as s_user_id,
                schedules.title as s_title,
                schedules.content as s_content,
                DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as s_created

            '))
            ->join('users', 'schedules.user_id', '=', 'users.id')
            ->groupBy('s_id', 's_user_id')
            ->where('schedules.user_id', session()->get('id'))
            ->get();
        }

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
            schedules.id as id,
            schedules.title as title,
            DATE_FORMAT(schedules.registered_at, "%Y-%m-%d") as start
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('users.id', session()->get('id'))
        ->get();

        foreach ($posts as $post) {
            $rows[] = $post;
        }

        return response()->json($rows);
    }

    public function from()
    {
        $get_genres = DiaryGenre::select(DB::raw('
            diary_genres.id,
            diary_genres.name
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->where('users.id', session()->get('id'))
        ->get();
        return view('schedule.from')->with('get_genres', $get_genres);
    }

    public function post(DiaryCreationRequest $request)
    {
        $validated = $request->validated();

        Schedule::create([
            'user_id' => session()->get('id'),
            'registered_at' => $request->input('registered_at'),
            'genre_id' => $request->input('genre_id'),
            'title' => $validated["title"],
            'content' => $validated["content"],
        ]);

        return redirect('schedule');
    }

    public function show(Request $request)
    {
        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Schedule::select(DB::raw('
            schedules.id as id,
            schedules.title as title,
            schedules.content as content,
            DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as registered_at,
            diary_genres.name as genreName
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
        ->groupBy('id', 'title', 'content', 'genreName', 'registered_at')
        ->where('schedules.user_id', $user->id)
        ->where('schedules.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('schedule');
        }

        return view('schedule.show')->with('post_detail', $post_detail);
    }

    public function edit(Request $request)
    {
        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Schedule::select(DB::raw('
            schedules.id as id,
            schedules.title as title,
            schedules.content as content,
            DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as registered_at,
            diary_genres.name as genreName
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
        ->groupBy('id', 'title', 'content', 'genreName', 'registered_at')
        ->where('schedules.user_id', $user->id)
        ->where('schedules.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('schedule');
        }

        return view('schedule.edit')->with('post_detail', $post_detail);
    }

    public function update(DiaryCreationRequest $request)
    {
        $validated = $request->validated();

        $post_detail = Schedule::find($request->id);
        $post_detail->title = $validated["title"];
        $post_detail->content = $validated["content"];
        $post_detail->save();

        $user = User::where('id', session()->get('id'))->first();
        $post_detail = Schedule::select(DB::raw('
            schedules.id as id,
            schedules.title as title,
            schedules.content as content,
            DATE_FORMAT(schedules.registered_at, "%Y年%m月%d日") as registered_at,
            diary_genres.name as genreName
        '))
        ->join('users', 'user_id', '=', 'users.id')
        ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
        ->groupBy('id', 'title', 'content', 'genreName', 'registered_at')
        ->where('schedules.user_id', $user->id)
        ->where('schedules.id', $request->id)
        ->first();

        if (!$post_detail) {
            return redirect('schedule');
        }

        return view('schedule.show')->with('post_detail', $post_detail);
    }

    public function delete(Request $request)
    {
        $post_detail = Schedule::find($request->id);
        $post_detail->delete();

        return redirect('schedule');
    }
}
