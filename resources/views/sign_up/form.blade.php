@extends('layouts.detail')
@section('body')
<div class="lg:min-h-screen lg:flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full lg:flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8 m-auto">
        <div>
            <h2>
                新規作成
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    日程を作成します。
                </a>
            </p>
        </div>
        <form id="form" class="mt-8 space-y-6" action="{{ route('sign_up') }}" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                {!! nl2br(session('flash_message'), false) !!}
                {!! nl2br($errors->first('password'), false) !!}
                </a>
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="max-w-md">
                <label class="block mt-4">
                    <span class="form_title">名前</span>
                        <input
                        id="name"
                        name="name"
                        value="{{old('name')}}"
                        type="text"
                        class="vital_form"
                        required
                        placeholder="名前を入力してください"
                    />
                <label class="block mt-4">
                    <span class="form_title">Email</span>
                        <input
                        id="email"
                        name="email"
                        value="{{old('email')}}"
                        type="email"
                        class="vital_form"
                        required
                        placeholder="メールアドレスを入力してください"
                    />
                <label class="block mt-4">
                    <span class="form_title">パスワード</span>
                        <input
                        id="password"
                        name="password"
                        value="{{old('password')}}"
                        type="password"
                        class="vital_form"
                        required
                        placeholder="パスワードを入力してください"
                    />
                <label class="block mt-4 mb-3">
                    <span class="form_title">確認用パスワード</span>
                        <input
                        id="reconfirmation_password"
                        name="reconfirmation_password"
                        value="{{old('reconfirmation_password')}}"
                        type="password"
                        class="vital_form"
                        required
                        placeholder="確認用パスワードを入力してください"
                    />
            </div>
            <button type="submit" class="submit_button">
                登録
            </button>
            <button type="submit" class="submit_button wait" disabled>
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                登録中…
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
