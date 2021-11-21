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
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('schedule.index')
        ->with('posts', $posts);
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
                    DATE_FORMAT(schedules.created_at, "%Y年%m月%d日") as s_created

                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->where('schedules.title', 'LIKE', "%{$key_word}%")
                ->paginate(8);
            break;

            case 'content':
                $results = Schedule::select(DB::raw('
                    schedules.id as s_id,
                    schedules.user_id as s_user_id,
                    schedules.title as s_title,
                    schedules.content as s_content,
                    DATE_FORMAT(schedules.created_at, "%Y年%m月%d日") as s_created

                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->where('schedules.content', 'LIKE', "%{$key_word}%")
                ->paginate(8);
            break;

            case 'genre':
                $results = Schedule::select(DB::raw('
                    schedules.id as s_id,
                    schedules.user_id as s_user_id,
                    schedules.title as s_title,
                    schedules.content as s_content,
                    DATE_FORMAT(schedules.created_at, "%Y年%m月%d日") as s_created
                '))
                ->join('users', 'schedules.user_id', '=', 'users.id')
                ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
                ->groupBy('s_id', 's_user_id')
                ->where('schedules.user_id', session()->get('id'))
                ->Where('diary_genres.name', 'LIKE', "%{$key_word}%")
                ->paginate(8);
            break;

            default:
            $results = Schedule::select(DB::raw('
                schedules.id as s_id,
                schedules.user_id as s_user_id,
                schedules.title as s_title,
                schedules.content as s_content,
                DATE_FORMAT(schedules.created_at, "%Y年%m月%d日") as s_created

            '))
            ->join('users', 'schedules.user_id', '=', 'users.id')
            ->groupBy('s_id', 's_user_id')
            ->where('schedules.user_id', session()->get('id'))
            ->paginate(8);
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
            DATE_FORMAT(schedules.created_at, "%Y-%m-%d") as start
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
        // $get_genres = DiaryGenre::select('name', 'id')->get();
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

        $post = new Schedule;
        $post->user_id = session()->get('id');
        $post->genre_id = $request->input('genre_id');
        $post->title = $validated["title"];
        $post->content = $validated["content"];
        $post->save();

        return redirect('schedule');
    }

    public function show(Request $request)
    {
        $post_detail = Schedule::select(DB::raw('
            schedules.id as id,
            schedules.title as title,
            schedules.content as content,
            schedules.created_at as created_at,
            diary_genres.name as genreName
        '))
        ->join('diary_genres', 'genre_id', '=', 'diary_genres.id')
        ->groupBy('id', 'title', 'content', 'genreName', 'created_at')
        ->where('schedules.id', $request->id)
        ->first();

        return view('schedule.show')->with('post_detail', $post_detail);
    }

    public function edit(Request $request)
    {
        $post_detail = Schedule::find($request->id);

        return view('schedule.edit')->with('post_detail', $post_detail);
    }

    public function update(DiaryCreationRequest $request)
    {
        $validated = $request->validated();

        $post_detail = Schedule::find($request->id);
        $post_detail->title = $validated["title"];
        $post_detail->content = $validated["content"];
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
