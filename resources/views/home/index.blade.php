@extends('layouts.detail')
@section('body')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="text-center text-3xl font-extrabold text-gray-50">
                {{ $user->name }}
            </h2>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('password.send-email') }}" class=" text-gray-50 hover:text-purple-200">
                パスワード変更
            </a>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('login') }}" class=" text-gray-50 hover:text-purple-200">
                スケジュールのジャンルを増やす。
            </a>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('login') }}" class=" text-gray-50 hover:text-purple-200">
                身体の情報を記録する
            </a>
            </p>
        </div>
        </div>
    </div>
</div>
@endsection
