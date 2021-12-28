<form id="form" action="{{route('vital.post')}}" method="post">
    @csrf
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-4">
                <span class="form_title">タイトル</span>
                @if ($errors->first('title'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('title'), false) !!}
                </p>
                @endif
                <input
                    id="title"
                    name="title"
                    value="{{old('title')}}"
                    type="text"
                    class="vital_form"
                    required
                    placeholder="タイトルを入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">記録日</span>
                <input
                    id="registered_at"
                    name="registered_at"
                    value="{{old('registered_at')}}"
                    type="date"
                    class="vital_form"
                    required
                    min="1900-01-01"
                    max="3000-12-31"
                >
            </label>
            <label class="block mt-4">
                <span class="form_title">身長</span>
                @if ($errors->first('height'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('height'), false) !!}
                </p>
                @endif
                <input
                id="height"
                name="height"
                value="{{old('height')}}"
                type="text"
                class="vital_form"
                placeholder="身長を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">体重</span>
                @if ($errors->first('body_weight'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('body_weight'), false) !!}
                </p>
                @endif
                <input
                    id="body_weight"
                    name="body_weight"
                    value="{{old('body_weight')}}"
                    type="text"
                    class="vital_form"
                    placeholder="体重を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">最高血圧</span>
                @if ($errors->first('max_blood_pressure'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('max_blood_pressure'), false) !!}
                </p>
                @endif
                <input
                    id="max_blood_pressure"
                    name="max_blood_pressure"
                    value="{{old('max_blood_pressure')}}"
                    type="text"
                    class="vital_form"
                    placeholder="最高血圧を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">最低血圧</span>
                @if ($errors->first('min_blood_pressure'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('min_blood_pressure'), false) !!}
                </p>
                @endif
                <input
                    id="min_blood_pressure"
                    name="min_blood_pressure"
                    value="{{old('min_blood_pressure')}}"
                    class="vital_form"
                    type="text"
                    placeholder="最低血圧を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">心拍数(1分間)</span>
                @if ($errors->first('heart_rate'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('heart_rate'), false) !!}
                </p>
                @endif
                <input
                    id="heart_rate"
                    name="heart_rate"
                    value="{{old('heart_rate')}}"
                    type="text"
                    class="vital_form"
                    placeholder="心拍数を入力してください"
                />
            </label>
            <label class="block mt-8">
                <span class="form_title">備考</span>
                @if ($errors->first('content'))
                <p class="explanation_white text-sm error">
                    {!! nl2br($errors->first('content'), false) !!}
                </p>
                @endif
                <textarea
                    id="content"
                    name="content"
                    value="{{old('content')}}"
                    class="vital_form"
                    rows="5"
                    placeholder="本文を入力してください"
                ></textarea>
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
