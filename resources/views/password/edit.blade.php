@extends('layouts.detail')
@section('body')
<div class="lg:min-h-screen lg:flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-20">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
            パスワード変更
            </h2>
            <p class="mt-2 text-gray-600">
                <div class="explanation_white sm:text-xs lg:text-sm text-center">
                    <a>
                        大文字・小文字・数字をそれぞれ1つ以上含む、<br>6文字以上の半角英数字で入力してください。
                    </a>
                </div>
            </p>
        </div>
        <form id="form" class="mt-8 space-y-6" action="{{ route('password.update', $get_user->id) }}" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    {!! nl2br(session('flash_message'), false) !!}
                    {!! nl2br($errors->first('change_password'), false) !!}
                </a>
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
            <div class="mb-6">
                <label for="change_password" class="sr-only">change_password</label>
                <input id="change_password" name="change_password" type="password" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="新しいパスワード">
            </div>
            <div>
                <label for="reconfirmation_password" class="sr-only">reconfirmation_password</label>
                <input id="reconfirmation_password" name="reconfirmation_password" type="password" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="確認用">
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
