<form action="{{route('schedule.post')}}" method="post">
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
                    min="1900-01-01"
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
                @foreach($get_genres as $key => $genre)
                    <option value='' hidden>ジャンルを選択してください</option>
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
        <button type="reset" class="submit_button modal_close">
            キャンセル
        </button>
    </div>
</form>
