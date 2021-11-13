<form action="{{route('schedule.post')}}" method="post">
    @csrf
    <div>
        <h2 class="text-2xl font-bold"></h2>
        <div>
            <label class="block mt-8">
                <span class="form_title">タイトル</span>
                <input
                    name="title" id="title"
                    value="{{old('title')}}"
                    type="text"
                    class="schedule_form"
                    placeholder="タイトルを入力してください"
                    required
              />
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
                        <option value="{{ $genre->id }}">{{$genre->name}}</option>
                    @endforeach
                </select>
            </label>
            <label class="block mt-8">
              <span class="form_title">本文</span>
              <textarea
                    name="content" id="content"
                    value="{{old('content')}}"
                    class="schedule_form"
                    rows="5"
                    placeholder="本文を入力してください"
                    required
              ></textarea>
            </label>
        </div>
        <button type="submit" class="submit_button">
            記録
        </button>
        <button type="reset" onclick='window.history.back(-1);' class="submit_button">
            キャンセル
        </button>
    </div>
</form>
