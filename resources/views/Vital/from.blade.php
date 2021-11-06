@extends('layouts.detail')
@include('vital.components.form')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                新規作成
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                身体記録を作成します。
            </p>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
          <dt class="text-sm font-medium text-gray-500">
            {{ session('flash_message') }}
                @yield('form')
            </dt>
        </div>
    </div>
</div>
@endsection
