@extends('layouts.detail')
@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                身体記録編集
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    身体記録を編集します。
                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    {{ session('flash_message') }}
                </a>
            </p>
        </div>
        @include('vital.components.edit-form')
        </div>
    </div>
</div>
@endsection
