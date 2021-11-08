@extends('layouts.detail')
@section('body')
<div class="container mx-auto mt-7">
    <div class="flex space-x-16">
        @include('schedule.components.calendar')
        <div class="width-50">
            <div class="shadow overflow-hidden sm:rounded-lg">
                <div class="bg-gray-200 content_flex px-4 py-5 sm:px-6 border-b border-gray-200 flex-between">
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
                        @include('schedule.components.search-form')
                    </div>
                </div>
                <div class="content_scroll">
                    @include('schedule.components.schedule-recorde')
                </div>
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
