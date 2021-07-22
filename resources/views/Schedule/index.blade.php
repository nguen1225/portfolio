@extends('base')
@include('dashboard')
@section('title', '日程管理')

@section('body')
<nav>
    <ul>
        <li><a href="{{ route('from') }}">書き込み</a></li>
    </ul>
</nav>

<div class="container">
    @foreach ($posts as $post)
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
                <!-- phpの改行関数を使っていい感じに本文を改行させる -->
                <!-- <p>{{$post->content}}</p> -->
                <p>{!! nl2br(htmlspecialchars($post->content)) !!}</p>
                <small>投稿者:{{$post->user->name}} 作成日:{{$post->created_at}}</small>
                <hr>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection