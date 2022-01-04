@section('dashboard')
<button id="dashboard_modal_open" type="button" class="bg-gray-800 fixed flex justify-between lg:hidden md:hidden top-0 w-full z-10 items-center">
    <div class="flex-shrink-0">
        <img class="h-auto w-10 m-2" src="{{ asset('img/vital.jpg') }}" alt="">
    </div>
    <svg class="h-10 m-1 text-white w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <a href="{{ route('home') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm flex">
                        <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        ホーム
                    </a>
                    <a href="{{ route('schedule') }}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm flex">
                        <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        カレンダー
                    </a>
                    <a href="{{ route('vital')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm flex">
                        <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        身体記録
                    </a>
                    <a href="{{ route('logout')}}" class="text-white font-bold hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm flex">
                        <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        ログアウト
                    </a>
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
                <svg class="text-white h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <a href="{{ route('home') }}" class="text-white hover:bg-gray-700 hover:text-white border-b-2 px-3 py-2 text-base font-medium flex">
                <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                ホーム
            </a>
            <a href="{{ route('schedule') }}" class="text-white hover:bg-gray-700 hover:text-white border-b-2 px-3 py-2 text-base font-medium flex">
                <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                カレンダー
            </a>
            <a href="{{ route('vital')}}" class="text-white hover:bg-gray-700 hover:text-white border-b-2 px-3 py-2 text-base font-medium flex">
                <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                身体記録
            </a>
            <a href="{{ route('logout')}}" class="text-white hover:bg-gray-700 hover:text-white border-b-2 px-3 py-2 text-base font-medium flex">
                <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                ログアウト
            </a>
        </div>
    </div>
</nav>
@endsection
