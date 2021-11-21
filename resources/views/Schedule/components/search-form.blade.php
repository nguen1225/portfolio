<form action="{{ route('schedule.search') }}" method="GET">
    <div class="mt-1">
        <a href="#" id="search" class="text-lg leading-6 font-xl font-semibold text-gray-900">検索</a>
        <div class="flex">
            <div class="form-check mx-2">
                <input class="form-check-input" type="radio" name="deposit" id="Radios1" value="title">
                <label class="form-check-label" for="Radios1">
                    タイトル
                </label>
            </div>
            <div class="form-check mx-2">
                <input class="form-check-input" type="radio" name="deposit" id="Radios2" value="content">
                <label class="form-check-label" for="Radios2">
                    本文
                </label>
            </div>
            <div class="form-check mx-2">
                <input class="form-check-input" type="radio" name="deposit" id="Radios3" value="genre">
                <label class="form-check-label" for="Radios3">
                    ジャンル
                </label>
            </div>
        </div>
    </div>
    <div id="search_items" class="mt-3">
        <div class="search_flex">
            <input type="text" name="key_word" value="" placeholder="キーワード" class="mr-3 px-3 rounded-md"/>
            <input type="submit" value="検索" class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-gray-700 hover:bg-gray-900"/>
        </div>
    </div>
</form>
