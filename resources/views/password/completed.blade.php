@extends('layouts.detail')
@section('body')
<div class="lg:min-h-screen lg:flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md w-full space-y-8">
        <div>
            <div class="text-center lg:text-3xl sm:text-2xl font-extrabold text-gray-50">
                <a href="{{ route('login') }}">
                    パスワード変更が完了しました
                </a>
            </div>
            <p class="mt-2 text-gray-600 text-center">
            <a href="{{ route('login') }}" class=" text-gray-50 hover:text-purple-200">
                ログイン画面に戻る
            </a>
            </p>
        </div>
        </div>
    </div>
</div>
@endsection

