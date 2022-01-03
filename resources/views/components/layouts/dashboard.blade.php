@section('dashboard')
<button id="dashboard_modal_open" type="button" class="md:hidden lg:hidden flex justify-end w-full fixed top-0 z-10">
    <svg class="h-10 m-1 text-gray-500 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
<nav>

    <!-- PC menu -->
    <div class="md:bg-gray-800 lg:bg-gray-800 fixed lg:px-8 max-w-10xl mx-auto p-2.5 px-4 sm:px-6 top-0 w-full z-10">
        <div class="hidden md:block">
            <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <img class="h-auto w-10" src="{{ asset('img/vital.jpg') }}" alt="">
                    </div>
                    <a href="{{ route('home') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">ホーム</a>
                    <a href="{{ route('schedule') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">カレンダー</a>
                    <a href="{{ route('vital')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">記録</a>
                    <a href="{{ route('logout')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">ログアウト</a>
                </div>
            </div>
    </div>

    <!-- Mobile menu -->


    <div id="dashboard_modal_content" class="md:hidden dashboard_modal fixed top-0 z-10 w-full bg-gray-800">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <button type="button" class="dashboard_modal_close flex justify-between w-full mb-2">
                <div class="flex-shrink-0">
                    <img class="h-auto w-10" src="{{ asset('img/vital.jpg') }}" alt="">
                </div>
                <svg class="text-gray-500 h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="{{ route('home') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ホーム</a>
            <a href="{{ route('schedule') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">カレンダー</a>
            <a href="{{ route('vital')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">記録</a>
            <a href="{{ route('logout')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ログアウト</a>
        </div>
    </div>
</nav>
@endsection
