@extends('layouts.detail')
@section('body')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
<div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
    <div class="max-w-md w-full space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-50">
          パスワード変更
        </h2>
        <p class="mt-2 text-sm text-gray-600 text-center">
          <a class="font-medium  text-gray-50">
            ご登録頂いているメールアドレスを入力してください。<br>
            <span class="text-xs">
                ※　受信設定等によりメールが届かない場合がございます、受信許可に設定してください。
            </span>
          </a>
        </p>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('password.generate-url') }}" method="POST">
        {{ session('flash_message') }}
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="email" class="sr-only">Email address</label>
            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
          </div>
        </div>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text- bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-5">
            送信
          </button>
        </div>
      </form>
    </div>
</div>
</div>

@endsection
