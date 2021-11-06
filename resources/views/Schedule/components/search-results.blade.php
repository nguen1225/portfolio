@if ($results)
@foreach ($results as $item)
<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            <p>
            <a href="{{ route('schedule.show', $item->id)}}">
                    {!! nl2br(htmlspecialchars($item->title)) !!}
                </a>
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            作成日:{{$item->created_at->format('Y年m月d日')}}
        </dd>
    </div>
</dl>
@endforeach
@else
<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            検索結果は0件です。
        </dt>
    </div>
</dl>
@endif
