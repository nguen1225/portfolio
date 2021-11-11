@extends('layouts.detail')
@section('body')
<div class="container mx-auto mt-7">
    <div class="flex space-x-16">
        @include('schedule.components.calendar')
        <div class="width-50">
            <div class="shadow overflow-hidden sm:rounded-lg bg-white">
                <div class="recorde_header flex-between">
                    <div>
                        <h3>
                            日程管理
                        </h3>
                        <div class="explanation">
                            全ての日程を表示します。
                        </div>
                        <a href="{{ route('schedule.from') }}">
                            <button class="create_new_button">
                                日程作成
                            </button>
                        </a>
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
