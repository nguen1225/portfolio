<form action="{{route('schedule.post')}}" method="post">
    @csrf
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="mt-8 max-w-md">
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">タイトル</span>
              <input
                name="title" id="title"
                value="{{old('title')}}"
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                placeholder="タイトルを入力してください"
              />
            </label>
            <label class="block">
              <span class="text-gray-700">本文</span>
              <textarea
                name="content" id="content"
                value="{{old('content')}}"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 px-3 py-2"
                rows="5"
                placeholder="本文を入力してください"
              ></textarea>
            </label>
          </div>
        </div>
        <button type="submit" class="group relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text- text-white bg-gray-700 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-50 mt-6 mb-6">
            投稿
        </button>
        <button type="reset" onclick='window.history.back(-1);'>
            キャンセル
        </button>
    </div>
</form>