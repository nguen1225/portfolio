<form action="{{route('vital.update', $post_detail->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-4">
                <span class="form_title">タイトル</span>
                @if (old('title'))
                <p class="explanation_white text-sm">
                    {!! nl2br($errors->first('title'), false) !!}
                </p>
                @endif
                <input
                name="title" id="title"
                value="{{old('title') ?? $post_detail->title}}"
                type="text"
                class="vital_form"
                placeholder="タイトルを入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">身長</span>
                @if (old('height'))
                <p class="explanation_white text-sm">
                    {!! nl2br($errors->first('height'), false) !!}
                </p>
                @endif
                <input
                name="height" id="height"
                value="{{old('height') ?? $post_detail->height}}"
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
                name="body_weight" id="body_weight"
                value="{{old('body_weight') ?? $post_detail->body_weight}}"
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
                name="max_blood_pressure" id="max_blood_pressure"
                value="{{old('max_blood_pressure')  ?? $post_detail->max_blood_pressure}}"
                class="vital_form"
                type="text"
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
                name="min_blood_pressure" id="min_blood_pressure"
                value="{{old('min_blood_pressure')  ?? $post_detail->min_blood_pressure}}"
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
                name="heart_rate" id="heart_rate"
                value="{{old('heart_rate') ?? $post_detail->heart_rate}}"
                type="text"
                class="vital_form"
                placeholder="心拍数を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">備考</span>
                @if (old('content'))
                <p class="explanation_white text-sm">
                    {!! nl2br($errors->first('content'), false) !!}
                </p>
                @endif
                <textarea
                name="content" id="content"
                value="{{old('content') ?? $post_detail->content}}"
                class="vital_form"
                rows="5"
                placeholder="本文を入力してください"
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
