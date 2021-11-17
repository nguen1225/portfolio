<form action="{{route('vital.post')}}" method="post">
    @csrf
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-4">
                <span class="form_title">タイトル</span>
                <p class="explanation_white text-sm">
                    {!! nl2br($errors->first('title'), false) !!}
                </p>
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
                @if (old('height'))
                <p class="explanation_white text-sm">
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
                @if (old('body_weight'))
                <p class="explanation_white text-sm">
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
                @if (old('max_blood_pressure'))
                <p class="explanation_white text-sm">
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
                @if (old('min_blood_pressure'))
                <p class="explanation_white text-sm">
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
                @if (old('heart_rate'))
                <p class="explanation_white text-sm">
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
                @if (old('content'))
                <p class="explanation_white text-sm">
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
        <button type="reset" onclick='window.history.back(-1);' class="submit_button">
            キャンセル
        </button>
    </div>
</form>
