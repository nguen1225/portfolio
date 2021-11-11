@extends('layouts.detail')
@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                新規作成
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
            <a class="explanation_white">
                日程を作成します。
            </a>
            {{ session('flash_message') }}
            </p>
        </div>
        @include('schedule.components.form')
        </div>
    </div>
</div>
@endsection
