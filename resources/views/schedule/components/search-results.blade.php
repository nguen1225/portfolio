@if ($results)
@foreach ($results as $item)
<dl>
    <div class="select">
        <dt class="text-sm font-medium text-gray-500">
            <p class="hover:text-gray-900">
                <a href="{{ route('schedule.show', $item->s_id)}}">
                    {!! nl2br(htmlspecialchars($item->s_title)) !!}
                </a>
            </p>
        </dt>
        <dd class="day created_at">
            <a href="{{ route('schedule.show', $item->s_id)}}">
                作成日:{{$item->s_created}}
            </a>
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
