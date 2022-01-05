@extends('layouts.detail')
@section('body')
@section('title','ジャンル名変更')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-20">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl width-36">
        <div class="max-w-md lg:w-96 md:w-96 width-100 space-y-8">
            <div>
                <h2>
                    ジャンル名変更
                </h2>
                <p class="mt-2 text-sm text-gray-600 text-center">
                    <a class="explanation_white">
                        ジャンル名を変更する。
                    </a>
                </p>
                @if (session('flash_message'))
                <p class="mt-2 text-sm text-gray-600 text-center">
                    <a class="explanation_white error">
                        {!! nl2br(session('flash_message')) !!}
                    </a>
                </p>
                @endif
            </div>
            @include('genre.components.edit-form')
        </div>
    </div>
</div>
@endsection
