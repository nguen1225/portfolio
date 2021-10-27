@extends('base')
@include('dashboard')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div id='calendar'></div>
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="content_flex px-4 py-5 sm:px-6 border-b border-gray-200">
            <div>
                <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                    日程管理
                </h3>
                <div class="mt-1 max-w-2xl text-sm text-gray-500">
                    全ての日程を表示します。
                </div>
            </div>
            <div>
                <form action="{{ route('schedule.search') }}" method="GET">
                    <div class="mb-2">
                        <a href="#" id="search" class="text-lg leading-6 font-xl font-semibold text-gray-900">検索</a>
                    </div>
                    <div id="search_items" class="">
                        <div class="search_flex">
                            <input type="text" name="key_word" value="" placeholder="キーワード" class="mr-3 px-3 rounded-md"/>
                            <input type="submit" value="検索" class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($posts as $post)
        <dl>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
                        <!-- phpの改行関数を使っていい感じに本文を改行させる -->
                        <!-- <p>{{$post->title}}</p> -->
                        <p>
                        <a href="{{ route('schedule.show', $post->id)}}">
                                {!! nl2br(htmlspecialchars($post->title)) !!}
                            </a>
                        </p>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    作成日:{{$post->created_at->format('Y年m月d日')}}
                </dd>
            </div>
        </dl>
        @endforeach
    </div>
    {{ $posts->links() }}
    <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 mt-6">
        <a href="{{ route('schedule.from') }}">日程作成</a>
    </button>
</div>
@endsection
