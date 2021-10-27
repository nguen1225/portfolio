@extends('base')
@include('dashboard')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-7">
    <div class="flex space-x-16">
        <div class="calendar_width">
            <div id='calendar'></div>
        </div>
        <div class="shadow overflow-hidden sm:rounded-lg schedule_height schedule_width">
            <div class="bg-gray-200 content_flex px-4 py-5 sm:px-6 border-b border-gray-200">
                <div>
                    <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                        日程管理
                    </h3>
                    <div class="mt-2 max-w-2xl text-sm text-gray-500">
                        全ての日程を表示します。
                    </div>
                    <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 mt-3">
                        <a href="{{ route('schedule.from') }}">日程作成</a>
                    </button>
                </div>
                <div>
                    <form action="{{ route('schedule.search') }}" method="GET">
                        <div class="mt-6">
                            <a href="#" id="search" class="text-lg leading-6 font-xl font-semibold text-gray-900">検索</a>
                        </div>
                        <div id="search_items" class="mt-3">
                            <div class="search_flex">
                                <input type="text" name="key_word" value="" placeholder="キーワード" class="mr-3 px-3 rounded-md"/>
                                <input type="submit" value="検索" class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="schedule_scroll">
                @foreach ($posts as $post)
                <dl>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 border-b border-gray-200">
                        <dt class="text-sm font-medium text-gray-500">
                            {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
                                <!-- phpの改行関数を使っていい感じに本文を改行させる -->
                                <!-- <p>{{$post->title}}</p> -->
                                <p class="schedule_title">
                                    <a href="{{ route('schedule.show', $post->id)}}">
                                        {!! nl2br(htmlspecialchars($post->title)) !!}
                                    </a>
                                </p>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 schedule_created">
                            作成日:{{$post->created_at->format('Y年m月d日')}}
                        </dd>
                    </div>
                </dl>
                @endforeach
            </div>
        </div>
    </div>
    {{ $posts->links() }}
</div>
@endsection
