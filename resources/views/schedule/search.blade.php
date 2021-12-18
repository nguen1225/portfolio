@extends('layouts.detail')
@section('body')
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="flex-between px-4 py-5 sm:px-6 border-b border-gray-200">
            <div>
                <h3>
                    検索結果
                </h3>
                <div class="explanation">
                    検索結果が表示されます。
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
        @include('schedule.components.search-results')
    </div>
    {{ $paginate->links() }}
</div>
@endsection
