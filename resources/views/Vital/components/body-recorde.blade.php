<div class="recorde_header">
    <h3>
        身体記録管理
    </h3>
    <p class="explanation">
        日々の身体記録を表示します。
    </p>
    <a href="{{ route('vital.from') }}">
        <button class="create_new_button">
            記録作成
        </button>
    </a>
</div>
<div class="content_scroll">
    @foreach ($posts as $post)
    <dl>
        <div class="select">
            <dt class="select_title">
                <a href="{{ route('vital.show', $post->id)}}">
                        {!! nl2br(htmlspecialchars($post->title)) !!}
                    </a>
                </p>
            </dt>
            <dd class="day created_at">
                <a href="{{ route('vital.show', $post->id)}}">
                    作成日 : {{date('Y年m月d日', strtotime($post->registered_at))}}
                </a>
            </dd>
        </div>
    </dl>
    @endforeach
</div>
