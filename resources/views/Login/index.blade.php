<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        ログイン
                    </h2>
                </div>
                <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    {{ session('flash_message') }}
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="rounded-md shadow-sm -space-y-px">
                  <div>
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="name"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="name">
                  </div>
                  <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password"  required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="password">
                  </div>
                </div>
                <div class="text-sm">
                  <a href="/admin/password/change" class="font-medium text-indigo-600 hover:text-indigo-500">
                    パスワードを忘れた方はこちら
                  </a>
                </div>
                <div>
                  <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    ログイン
                  </button>
                </div>
              </form>
            </div>
          </div>
    </body>
</html>