@foreach ($posts as $post)
<dl>
    <div class="select">
        <dt class="text-sm font-medium text-gray-500">
            {{-- <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2> --}}
            <!-- phpの改行関数を使っていい感じに本文を改行させる -->
            <!-- <p>{{$post->title}}</p> -->
            <a href="{{ route('schedule.show', $post->id)}}">
                <p class="select_title hover:text-gray-900">
                    {!! nl2br(htmlspecialchars($post->title)) !!}
                </p>
            </a>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 created_at">
            <a href="{{ route('schedule.show', $post->id)}}">
                作成日:{{$post->created_at->format('Y年m月d日')}}
            </a>
        </dd>
    </div>
</dl>
@endforeach
