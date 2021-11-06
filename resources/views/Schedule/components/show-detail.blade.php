<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->title)) !!}
            </p>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <p>
                {!! nl2br(htmlspecialchars($post_detail->content)) !!}
            </p>
        </dd>
    </div>
</dl>
