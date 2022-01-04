@extends('layouts.detail')
@section('body')
<div class="lg:min-h-screen lg:flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-gray-700 items-center justify-center min-h-full p-6 rounded-lg shadow-2xl lg:w-3/6 md:w-3/6 sm:w-full m-auto">
        <div class="flex justify-center">
            <div class="text-4xl font-bold text-white flex items-center">
                ログイン
            </div>
            <div>
                <img class="h-auto w-16 m-auto ml-3" src="{{ asset('img/vital.png') }}" alt="">
            </div>
        </div>
        <form id="form" class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    {{ session('flash_message') }}
                </a>
            </p>
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mb-6">
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="name"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="name">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="password">
                </div>
            </div>
            <div class="text-sm">
                <p class="font-bold text-white hover:text-purple-200">
                    テストアカウント
                </p>
                <p class="font-medium text-white hover:text-purple-200">
                    name: test
                </p>
                <p class="font-medium text-white hover:text-purple-200 mb-4">
                    password: aaaAAA111
                </p>
                <p>
                    <a href="{{ route('password.send-email') }}" class="font-medium text-white hover:text-purple-200">
                        パスワードを忘れた方はこちら
                    </a>
                </p>
                <p>
                    <a href="{{ route('sign_up.form') }}" class="font-medium text-white hover:text-purple-200">
                        新規作成はこちら
                    </a>
                </p>
            </div>
            <div class="text-sm">
            </div>
            <div>
                <button type="submit" class="submit_button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text- bg-gray-50 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-5">
                    ログイン
                </button>
                <button type="submit" class="submit_button wait" disabled>
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    ログイン中…
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
