@section('dashboard')
<nav class="bg-gray-800">
    <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
            </div>
            <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
                <a href="{{ route('home') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">home</a>
                <a href="{{ route('schedule') }}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">schedule</a>
                <a href="{{ route('vital')}}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">vital</a>
                <a href="{{ route('logout')}}" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">logout</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">home</a>
            <a href="{{ route('schedule') }}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">schedule</a>
            <a href="{{ route('vital')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">vital</a>
            <a href="{{ route('logout')}}" class="text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">logout</a>
        </div>
    </div>
</nav>
@endsection
