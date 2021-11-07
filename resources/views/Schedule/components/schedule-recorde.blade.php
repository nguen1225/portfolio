@foreach ($posts as $post)
<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
            <!-- phpの改行関数を使っていい感じに本文を改行させる -->
            <!-- <p>{{$post->title}}</p> -->
            <p class="schedule_title">
                <a href="{{ route('schedule.show', $post->id)}}">
                    {!! nl2br(htmlspecialchars($post->title)) !!}
                </a>
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 created_at">
            作成日:{{$post->created_at->format('Y年m月d日')}}
        </dd>
    </div>
</dl>
@endforeach
