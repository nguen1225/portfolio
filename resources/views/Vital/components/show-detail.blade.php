<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->title)) !!}
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                備考：{!! nl2br(htmlspecialchars($post_detail->content)) !!}
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                身長
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->height)) !!}cm
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                体重
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->body_weight)) !!}kg
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                最高血圧
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->max_blood_pressure)) !!}mmHg
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                最低血圧
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->min_blood_pressure)) !!}mmHg
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                平均血圧
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->avg_blood_pressure)) !!}mmHg
            </p>
        </dd>
        <dt class="text-sm font-medium text-gray-500">
            <p>
                心拍数(1分間)
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->heart_rate)) !!}回
            </p>
        </dd>
    </div>
</dl>
