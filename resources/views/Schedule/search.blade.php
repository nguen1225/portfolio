@extends('layouts.detail')
@section('body')
@section('title','検索結果')
<div class="container mx-auto mt-24">
    <div class="shadow overflow-hidden sm:rounded-lg bg-white">
        <div class="recorde_header flex-between">
            <div>
                <h3>
                    検索結果
                </h3>
                <div class="explanation">
                    検索結果が表示されます。
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
        <div class="content_scroll">
            @include('schedule.components.search-results')
        </div>
    </div>
</div>
@include('schedule.from')
@endsection
