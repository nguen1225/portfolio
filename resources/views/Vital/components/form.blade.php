<form action="{{route('vital.post')}}" method="post">
    @csrf
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-4">
                <span class="form_title">タイトル</span>
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
                <input
                    id="heart_rate"
                    name="heart_rate"
                    value="{{old('heart_rate')}}"
                    type="text"
                    class="vital_form"
                    placeholder="心拍数を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">備考</span>
                <textarea
                    id="content"
                    name="content"
                    value="{{old('content')}}"
                    class="vital_form"
                    rows="5"
                    placeholder="本文を入力してください"
                    >{{old('content')}}
                </textarea>
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
