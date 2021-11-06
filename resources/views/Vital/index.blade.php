@extends('layouts.detail')
@include('vital.components.body-recorde')
@include('vital.components.graph')
@include('vital.components.bmi')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="flex space-x-16">
        <div class="width-50">
            @yield('graph')
            @yield('bmi')
        </div>
        <div class="shadow overflow-hidden sm:rounded-lg width-50">
            @yield('body-recorde')
        </div>
    </div>
    {{ $posts->links() }}
</div>
@endsection
