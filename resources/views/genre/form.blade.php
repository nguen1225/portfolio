@extends('layouts.detail')
@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                新規作成
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
            <a class="explanation_white">
                ジャンルを作成します。
            </a>
            {{ session('flash_message') }}
            </p>
        </div>
        <form action="{{route('genre.post')}}" method="post">
            @csrf
            <div class="aa">
                <h2 class="text-2xl font-bold"></h2>
                <div>
                    <label class="block mt-8">
                        <span class="form_title">タイトル</span>
                        <input
                            id="name"
                            name="name"
                            value="{{old('name')}}"
                            type="text"
                            class="schedule_form"
                            placeholder="ジャンルを入力してください"
                            required
                      />
                    </label>
                </div>
                <button type="submit" class="submit_button">
                    作成
                </button>
                <button type="reset" onclick='window.history.back(-1);' class="submit_button">
                    キャンセル
                </button>
            </div>
        </form>

        </div>
    </div>
</div>
@endsection
