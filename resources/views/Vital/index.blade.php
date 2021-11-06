@extends('layouts.detail')
@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="flex space-x-16">
        <div class="width-50">
            @include('vital.components.graph')
            @include('vital.components.bmi')
        </div>
        <div class="shadow overflow-hidden sm:rounded-lg width-50">
            @include('vital.components.body-recorde')
        </div>
    </div>
    {{ $posts->links() }}
</div>
@endsection
