<form id="form" action="{{route('schedule.post')}}" method="post">
    @csrf
    <div>
        <h2 class="text-2xl font-bold"></h2>
        <div>
            <label class="block mt-8">
                <span class="form_title">タイトル</span>
                    @if ($errors->first('title'))
                    <p class="explanation_white text-sm error">
                        {!! nl2br($errors->first('title'), false) !!}
                    </p>
                    @endif
                <input
                    name="title" id="title"
                    value="{{old('title')}}"
                    type="text"
                    class="schedule_form"
                    placeholder="タイトルを入力してください"
                    required
            />
            </label>
            <label class="block mt-4">
                <span class="form_title">記録日</span>
                <input
                    id="registered_at"
                    name="registered_at"
                    value="{{old('registered_at')}}"
                    type="date"
                    class="schedule_form"
                    required
                    min="2021-01-01"
                    max="3000-12-31"
                >
            </label>
            <label class="block mt-8">
                <span class="form_title">ジャンル</span>
                <select
                    id="genre_id"
                    type="text"
                    class="schedule_form"
                    name="genre_id"
                    required
                >
                <option class="select_color" value='' hidden >ジャンルを選択してください</option>
                @foreach($get_genres as $key => $genre)
                    <option value="{{ $genre->id }}" @if((int)old('genre_id') === $genre->id) selected @endif>{{$genre->name}}</option>
                @endforeach
            </select>
            @if (!count($get_genres))
                <p class="mt-2">
                    <a href="{{ route('genre') }}" class=" text-gray-50 hover:text-purple-200 font-bold">
                        ジャンルの選択項目がない方はこちら
                    </a>
                </p>
                @endif
            </label>
            <label class="block mt-8">
            <span class="form_title">本文</span>
            @if ($errors->first('content'))
            <p class="explanation_white text-sm error">
                {!! nl2br($errors->first('content'), false) !!}
            </p>
            @endif
            <textarea
                    name="content" id="content"
                    value=""
                    class="schedule_form"
                    rows="5"
                    placeholder="本文を入力してください"
                    required
            >{{old('content')}}</textarea>
            </label>
        </div>
        <button type="submit" class="submit_button">
            記録
        </button>
        <button type="submit" class="submit_button wait" disabled>
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            記録中…
        </button>
        <button type="reset" class="submit_button modal_close">
            キャンセル
        </button>
    </div>
</form>
