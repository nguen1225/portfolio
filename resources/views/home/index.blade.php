@extends('layouts.detail')
@section('body')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md w-full space-y-8">
        <div>
            <p class="text-center  mb-5">
                <span class="text-3xl font-extrabold text-gray-50">
                    {{ $user->name }}
                </span>
                <span class="text-gray-50 font-bold">さん</span>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('password.send-email') }}" class=" text-gray-50 hover:text-purple-200 font-bold">
                パスワード変更
            </a>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('genre') }}" class=" text-gray-50 hover:text-purple-200 font-bold">
                スケジュールのジャンルを増やす
            </a>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('schedule') }}" class=" text-gray-50 hover:text-purple-200 font-bold">
                スケジュールを作成する
            </a>
            </p>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('vital') }}" class=" text-gray-50 hover:text-purple-200 font-bold">
                身体の情報を記録する
            </a>
            </p>
        </div>
        </div>
    </div>
</div>
@endsection
