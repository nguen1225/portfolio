@extends('base')
@include('dashboard')
@section('body')


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                日程詳細
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                作成日:{{$post_detail->created_at->format('Y年m月d日')}}
            </p>
        </div>
        
        <dl>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
                <dt class="text-sm font-medium text-gray-500">
                        <p>
                            {!! nl2br(htmlspecialchars($post_detail->title)) !!}
                        </p>
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <p>
                        {!! nl2br(htmlspecialchars($post_detail->content)) !!}
                    </p>
                </dd>
            </div>
        </dl>
    </div>
    <div class="btn-sort mt-6">
        <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-500 hover:bg-gray-900 mr-3">
            <a href="{{ route('schedule.edit', $post_detail->id) }}">編集</a>
        </button>
        <form action="{{ route('schedule.delete', $post_detail->id) }}" method="POST">
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