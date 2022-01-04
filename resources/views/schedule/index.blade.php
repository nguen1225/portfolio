@extends('layouts.detail')
@section('body')
<div class="container mx-auto mt-24">
    <div class="content_flex lg:space-x-16">
        @include('schedule.components.calendar')
        <div class="width-50 mb-5">
            <div class="shadow overflow-hidden sm:rounded-lg bg-white">
                <div class="recorde_header flex-between">
                    <div>
                        <h3>
                            日程管理
                        </h3>
                        <div class="explanation">
                            日程を表示、作成をします。
                        </div>
                        <div id="modal_open" class="mb-3">
                            <button class="create_new_button">
                                日程作成
                            </button>
                        </div>
                    </div>
                    <div>
                        @include('schedule.components.search-form')
                    </div>
                </div>
                @include('schedule.components.schedule-recorde')
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@include('schedule.from')
@endsection
