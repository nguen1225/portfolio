@extends('layouts.detail')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                身体記録詳細
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                作成日:{{$post_detail->created_at}}の詳細です。
            </p>
        </div>
        @include('vital.components.show-detail')
    </div>
    <div class="btn-sort mt-6">
        <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-500 hover:bg-gray-900 mr-3">
            <a href="{{ route('vital.edit', $post_detail->id) }}">編集</a>
        </button>
        <form action="{{ route('vital.delete', $post_detail->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-600 hover:bg-gray-900 mr-3" value="{{ $post_detail->id }}" onclick="return window.confirm('削除しますか？')">
                削除
            </button>
        </form>
        <button type="reset" onclick='window.history.back(-1);'>
            戻る
        </button>
    </div>
</div>
@endsection
