<div class="bmi bg-white">
    <div class="today_bmi">
        <p class="bmi_title font-semibold">
            本日のBMI
        </p>
        <p class="bmi_value">
            {{ $bmi }}
        </p>
        <p class="bmi_title font-semibold">
            適正体重
        </p>
        <p class="bmi_value">
            {{ $standard_weight }} kg
        </p>
        <p class="bmi_title font-semibold">
            適性体重と比較
        </p>
        <p class="bmi_value">
            {{ $weight_difference }} kg
        </p>
    </div>
    <div class="bmi_content">
        <table class="bmi_table max-w-md w-full border-separate border border-black ...">
            <thead>
                <tr>
                  <th class="ont-semibold text-white bg-gray-700 border border-black ...">範囲</th>
                  <th class="ont-semibold text-white bg-gray-700 border border-black ...">肥満度</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="p-0.5 border border-black ...">18.5未満</td>
                <td class="p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                <td class="p-0.5 border border-black ...">18.5〜25未満</td>
                <td class="p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                <td class="p-0.5 border border-black ...">25〜30未満</td>
                <td class="p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                <td class="p-0.5 border border-black ...">30〜35未満</td>
                <td class="p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                <td class="p-0.5 border border-black ...">35〜40未満</td>
                <td class="p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                <td class="p-0.5 border border-black ...">40以上</td>
                <td class="p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
