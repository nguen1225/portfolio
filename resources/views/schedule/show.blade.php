@extends('layouts.detail')
@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                日程詳細
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    作成日 : {{$post_detail->registered_at}}
                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    ジャンル : {{ $post_detail->genreName }}
                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    {{ session('flash_message') }}
                </a>
            </p>
        </div>
        <h3 class="underline text-3xl break-words text-center font-extrabold text-gray-50">
            {!! nl2br(htmlspecialchars($post_detail->title)) !!}
        </h3>
        @include('schedule.components.show-detail')
        <div class="mt-3">
            <a href="{{ route('schedule.edit', $post_detail->id) }}">
                <button class="submit_button">
                    編集
                </button>
            </a>
            <form action="{{ route('schedule.delete', $post_detail->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="submit_button" value="{{ $post_detail->id }}" onclick="return window.confirm('削除しますか？')">
                    削除
                </button>
            </form>
            <button class="submit_button" type="reset" onclick='window.history.back(-1);'>
                戻る
            </button>
        </div>
        </div>
    </div>
</div>
@endsection
