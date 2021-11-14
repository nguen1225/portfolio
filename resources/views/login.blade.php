@extends('layouts.detail')
@section('body')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-gray-700 p-6 rounded-lg shadow-2xl">
            <div>
                <h2>
                    ログイン
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                <p class="mt-2 text-sm text-gray-600 text-center">
                    <a class="explanation_white">
                        {{ session('flash_message') }}
                    </a>
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
            </div>
            </form>
        </div>
        </div>
@endsection
