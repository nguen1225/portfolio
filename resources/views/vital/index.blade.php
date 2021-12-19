@extends('layouts.detail')
@section('body')

<div class="container mx-auto mt-6">
    <div class="content_flex lg:space-x-16">
        <div class="width-50 mb-10">
            @include('vital.components.graph')
            @include('vital.components.bmi')
        </div>
        <div class="width-50 mb-5">
            <div class="shadow overflow-hidden sm:rounded-lg bg-white">
                @include('vital.components.body-recorde')
            </div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@include('vital.from')
@endsection
