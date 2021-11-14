<form action="{{route('schedule.update', $post_detail->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-8">
              <span class="form_title">タイトル</span>
              <p class="explanation_white text-sm">
                {!! nl2br($errors->first('title'), false) !!}
              </p>
              <input
                name="title" id="title"
                value="{{old('title') ?? $post_detail->title}}"
                type="text"
                class="schedule_form"
                placeholder="タイトルを入力してください"
                required
              />
            </label>
            <label class="block mt-8">
              <span class="form_title">本文</span>
              <p class="explanation_white text-sm">
                {!! nl2br($errors->first('content'), false) !!}
              </p>
              <textarea
                name="content" id="content"
                value="{{old('content') ?? $post_detail->content}}"
                class="schedule_form"
                rows="5"
                placeholder="本文を入力してください"
                required
              >{{old('content') ?? $post_detail->content}}</textarea>
            </label>
        </div>
        <button type="submit" class="submit_button">
            変更
        </button>
        <button type="reset" onclick='window.history.back(-1);' class="submit_button">
            キャンセル
        </button>
    </div>
</form>
