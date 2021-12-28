<form id="form" action="{{route('schedule.update', $post_detail->id)}}" method="post">
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
        <button type="submit" class="submit_button wait" disabled>
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            変更中…
        </button>
        <button type="reset" onclick='window.history.back(-1);' class="submit_button">
            キャンセル
        </button>
    </div>
</form>
