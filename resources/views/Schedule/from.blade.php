@extends('base')
@include('dashboard')
@section('title', '日程書き込み')

@section('body')

<div class="container">
    <h1>新規投稿</h1>
    <form action="{{route('post')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="タイトルを入力してください">
        </div>
        <div class="form-group">
            <label for="content">本文</label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="本文を入力してください">{{old('content')}}</textarea>
        </div>
        <input type="submit" value="投稿" class="btn btn-primary">
        <input type="reset" value="キャンセル" class="btn btn-secondary" onclick='window.history.back(-1);'>
    </form>
</div>
@endsection