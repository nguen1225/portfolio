@extends('layouts.detail')
@section('body')
@section('title','パスワード変更')
<div class="lg:min-h-screen lg:flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-20">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md w-full space-y-8">
        <div>
            <h2>
            パスワード変更
            </h2>
            <p class="mt-4 text-sm text-gray-600 text-center">
            <a class="explanation_white">
                ご登録頂いているメールアドレスを入力してください。<br>
                <span class="text-xs">
                    ※　受信設定等によりメールが届かない場合がございます、<br>受信許可に設定してください。
                </span>
            </a>
            </p>
        </div>
        <form id="form" class="mt-8 space-y-6" action="{{ route('password.generate-url') }}" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                {{ session('flash_message') }}
                </a>
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
            </div>
            </div>

            <div>
            <button type="submit" class="submit_button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text- bg-gray-50 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-5">
                送信
            </button>
            <button type="submit" class="submit_button wait" disabled>
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                送信中…
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
