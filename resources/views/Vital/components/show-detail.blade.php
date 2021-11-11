<div class="bg-white px-4 py-5 sm:px-2 border-b border-gray-200">
    <h4 class="underline text-xl">
        備考
    </h4>
    <p class="break-words mb-5 border border-black mt-3 p-4">
        {!! nl2br(htmlspecialchars($post_detail->content)) !!}
    </p>
    <table class="max-w-md w-full border-separate border border-black ...">
        <tbody>
            <tr>
            <td class="p-1.5 border border-black ...">身長</td>
            <td class="p-1.5 border border-black ...">{!! nl2br(htmlspecialchars($post_detail->height)) !!}cm</td>
            </tr>
            <tr>
            <td class="p-1.5 border border-black ...">体重</td>
            <td class="p-1.5 border border-black ...">{!! nl2br(htmlspecialchars($post_detail->body_weight)) !!}kg</td>
            </tr>
            <tr>
            <td class="p-1.5 border border-black ...">最高血圧</td>
            <td class="p-1.5 border border-black ...">{!! nl2br(htmlspecialchars($post_detail->max_blood_pressure)) !!}mmHg</td>
            </tr>
            <tr>
            <td class="p-1.5 border border-black ...">最低血圧</td>
            <td class="p-1.5 border border-black ...">{!! nl2br(htmlspecialchars($post_detail->min_blood_pressure)) !!}mmHg</td>
            </tr>
            <tr>
            <td class="p-1.5 border border-black ...">平均血圧</td>
            <td class="p-1.5 border border-black ...">{!! nl2br(htmlspecialchars($post_detail->avg_blood_pressure)) !!}mmHg</td>
            </tr>
            <tr>
            <td class="p-1.5 border border-black ...">心拍数(1分間)</td>
            <td class="p-1.5 border border-black ..."> {!! nl2br(htmlspecialchars($post_detail->heart_rate)) !!}回</td>
            </tr>
        </tbody>
    </table>
</div>
