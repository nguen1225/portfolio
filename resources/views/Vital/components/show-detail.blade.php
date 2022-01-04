<div class="bg-white px-4 py-5 sm:px-2 border-b border-gray-200 rounded-lg">
    <h4 class="text-xl font-semibold text-center">
        備考
    </h4>
    <p class="break-words mb-5 border border-black mt-3 p-4 rounded-md">
        {!! nl2br(htmlspecialchars($post_detail->content)) !!}
    </p>
    <table class="rounded-md max-w-md w-full border-separate border border-black ...">
        <tbody>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">身長</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($post_detail->height)) !!}cm
                    </span>
                </td>
            </tr>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">体重</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($post_detail->body_weight)) !!}kg
                    </span>
                </td>
            </tr>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">最高血圧</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($post_detail->max_blood_pressure)) !!}mmHg
                    </span>
                </td>
            </tr>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">最低血圧</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($post_detail->min_blood_pressure)) !!}mmHg
                    </span>
                </td>
            </tr>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">平均血圧</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($avg_blood_pressure)) !!}mmHg
                    </span>
                </td>
            </tr>
            <tr>
                <td class="rounded-md bg-gray-500 text-white p-1.5 font-bold border border-black ...">心拍数(1分間)</td>
                <td class="rounded-md p-1.5 border border-black ...">
                    <span class="font-bold">
                        {!! nl2br(htmlspecialchars($post_detail->heart_rate)) !!}回
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
