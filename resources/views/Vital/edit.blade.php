@extends('base')
@include('dashboard')
@section('title', '日程書き込み')

@section('body')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-xl font-semibold text-gray-900">
                身体記録編集
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                身体記録を編集します。
            </p>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
            <dt class="text-sm font-medium text-gray-500">
                <form action="{{route('update', $post_detail->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="">
                        <h2 class="text-2xl font-bold"></h2>
                        <div class="mt-8 max-w-md">
                          <div class="grid grid-cols-1 gap-6">
                            <label class="block">
                              <span class="text-gray-700">タイトル</span>
                              <input
                                name="title" id="title"
                                value="{{old('title') ?? $post_detail->title}}"
                                type="text"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                placeholder="タイトルを入力してください"
                              />
                            </label>
                            <label class="block">
                              <span class="text-gray-700">身長</span>
                              <input
                                name="height" id="height"
                                value="{{old('height') ?? $post_detail->height}}"
                                type="text"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                placeholder="タイトルを入力してください"
                              />
                            </label>
                            <label class="block">
                              <span class="text-gray-700">体重</span>
                              <input
                                name="body_weight" id="body_weight"
                                value="{{old('body_weight') ?? $post_detail->body_weight}}"
                                type="text"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                placeholder="タイトルを入力してください"
                              />
                            </label>
                            <label class="block">
                              <span class="text-gray-700">血圧</span>
                              <input
                                name="blood_pressure" id="blood_pressure"
                                value="{{old('blood_pressure') ?? $post_detail->blood_pressure}}"
                                type="text"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                placeholder="タイトルを入力してください"
                              />
                            </label>
                            <label class="block">
                              <span class="text-gray-700">心拍数(1分間)</span>
                              <input
                                name="heart_rate" id="heart_rate"
                                value="{{old('heart_rate') ?? $post_detail->heart_rate}}"
                                type="text"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                placeholder="タイトルを入力してください"
                              />
                            </label>
                            <label class="block">
                              <span class="text-gray-700">本文</span>
                              <textarea
                                name="content" id="content"
                                value="{{old('content') ?? $post_detail->content}}"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                                rows="5"
                                placeholder="本文を入力してください"
                              >{{old('content') ?? $post_detail->content}}</textarea>
                            </label>
                          </div>
                        </div>
                        <button type="submit" class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 mt-6 mb-6 mr-2">
                            変更
                        </button>
                        <button type="reset" onclick='window.history.back(-1);'>
                            キャンセル
                        </button>
                    </div>
                </form>
            </dt>
        </div>
    </div>
</div>
@endsection