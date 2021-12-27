@extends('layouts.detail')
@section('body')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl width-36">
        <div class="max-w-md lg:w-96 width-100 space-y-8">
            <div>
                <h2>
                    身体記録詳細
                </h2>
                <p class="mt-2 text-sm text-gray-600 text-center">
                    <a class="explanation_white">
                        作成日 : {{date('Y年m月d日', strtotime($post_detail->registered_at))}}の詳細です。
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
            @include('vital.components.show-detail')
            <a href="{{ route('vital.edit', $post_detail->id) }}">
                <button class="submit_button">
                    編集
                </button>
            </a>
            <form action="{{ route('vital.delete', $post_detail->id) }}" method="POST">
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
@endsection
