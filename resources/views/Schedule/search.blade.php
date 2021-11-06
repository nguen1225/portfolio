@extends('layouts.detail')
@section('body')
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="content_flex px-4 py-5 sm:px-6 border-b border-gray-200">
            <div>
                <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                    検索結果
                </h3>
                <div class="mt-1 max-w-2xl text-sm text-gray-500">
                    検索結果が表示されます。
                </div>
                <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 mt-3">
                    <a href="{{ route('schedule.from') }}">日程作成</a>
                </button>
            </div>
            <div>
                @include('schedule.components.search-form')
            </div>
        </div>
        @include('schedule.components.search-results')
    </div>
    {{ $paginate->links() }}
</div>
@endsection
