@extends('base')
@include('dashboard')
@section('body')


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                日程管理
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                全ての日程を表示します。
            </p>
        </div>
        
        
        @foreach ($posts as $post)
        <dl>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                    {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
                        <!-- phpの改行関数を使っていい感じに本文を改行させる -->
                        <!-- <p>{{$post->title}}</p> -->
                        <p>
                        <a href="{{ route('show', $post->id)}}">
                                {!! nl2br(htmlspecialchars($post->title)) !!}
                            </a>
                        </p>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    作成日:{{$post->created_at}}
                </dd>
            </div>
        </dl>
        @endforeach
    </div>
    

    <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 mt-6">
        <a href="{{ route('from') }}">日程作成</a>
    </button>
</div>
@endsection