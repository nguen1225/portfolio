@extends('base')
@include('dashboard')
@section('body')


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="flex space-x-16">
        <div class="width-50">
            <ul class="tab-menu">
                <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 font-semibold text-white is-active" data-id="tab01">身長</span></li>
                <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 font-semibold text-white" data-id="tab02">体重</span></li>
                <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 font-semibold text-white" data-id="tab03">血圧</span></li>
                <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 font-semibold text-white" data-id="tab04">心拍数</span></li>
                {{-- <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger" data-id="tab05">全体</span></li> --}}
            </ul>
            <div class="tab-content">
                <div class="tab-content__item js-tab-target is-active" id="tab01">
                    <p>
                    <div class="samples">
                        <div class="graph_row">
                            <canvas id="body_height"></canvas>
                        </div>
                    </div>
                    </p>
                </div><!-- .tab-content__item -->
                <div class="tab-content__item js-tab-target" id="tab02">
                    <p>
                    <div class="samples">
                        <div class="graph_row">
                            <canvas id="body_weight"></canvas>
                        </div>
                    </div>
                    </p>
                </div><!-- .tab-content__item -->
                <div class="tab-content__item js-tab-target" id="tab03">
                    <p>
                    <div class="samples">
                        <div class="graph_row">
                            <canvas id="blood_pressure"></canvas>
                        </div>
                    </div>
                    </p>
                </div><!-- .tab-content__item -->
                <div class="tab-content__item js-tab-target" id="tab04">
                    <p>
                    <div class="samples">
                        <div class="graph_row">
                            <canvas id="heart_rate"></canvas>
                        </div>
                    </div>
                    </p>
                </div><!-- .tab-content__item -->
                {{-- <div class="tab-content__item js-tab-target" id="tab05">
                    <p>
                    <div class="global-contents">
                        <h1 class="graph_title">記録図</h1>
                        <div class="samples">
                            <div class="graph_row right">
                                <canvas id="body_height"></canvas>
                            </div>
                            <div class="graph_row">
                                <canvas id="body_weight"></canvas>
                            </div>
                        </div>
                        <div class="samples bottom">
                            <div class="graph_row right">
                                <canvas id="blood_pressure"></canvas>
                            </div>
                            <div class="graph_row">
                                <canvas id="heart_rate"></canvas>
                            </div>
                        </div>
                    </div>
                    </p>
                </div><!-- .tab-content__item --> --}}
            </div>
            <div class="bmi">BMIを追加予定</div>
        </div>

        <div class="shadow overflow-hidden sm:rounded-lg width-50">
            <div class="bg-gray-200 px-4 py-5 sm:px-6 border-b border-gray-200">
                <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                    身体記録管理
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    日々の身体記録を表示します。
                </p>
                <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 mt-6">
                    <a href="{{ route('vital.from') }}">記録作成</a>
                </button>
            </div>


            @foreach ($posts as $post)
            <dl>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">
                            <a href="{{ route('vital.show', $post->id)}}">
                                    {!! nl2br(htmlspecialchars($post->title)) !!}
                                </a>
                            </p>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        作成日 : {{$post->created_at->format('Y年m月d日')}}
                    </dd>
                </div>
            </dl>
            @endforeach
        </div>
    </div>
    {{ $posts->links() }}





</div>
@endsection
