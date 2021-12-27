@section('dashboard')
<nav class="bg-gray-800">
    <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="h-auto w-10" src="{{ asset('img/vital.jpg') }}" alt="">
            </div>
            <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
                <a href="{{ route('home') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">ホーム</a>
                <a href="{{ route('schedule') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">カレンダー</a>
                <a href="{{ route('vital')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">記録</a>
                <a href="{{ route('logout')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">ログアウト</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ホーム</a>
            <a href="{{ route('schedule') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">カレンダー</a>
            <a href="{{ route('vital')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">記録</a>
            <a href="{{ route('logout')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ログアウト</a>
        </div>
    </div>
</nav>
@endsection
