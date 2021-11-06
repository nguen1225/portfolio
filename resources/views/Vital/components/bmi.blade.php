<div class="bmi">
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
        <table class="bmi_table">
            <thead>
                <tr>
                <th class="bg-gray-700 font-semibold text-white">範囲</th>
                <th class="bg-gray-700 font-semibold text-white">肥満度</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                <td>18.5未満</td>
                <td>低体重</td>
                </tr>
                <tr class="">
                <td>18.5〜25未満</td>
                <td>普通体重</td>
                </tr>
                <tr class="">
                <td>30〜35未満</td>
                <td>肥満（１度）</td>
                </tr>
                <tr class="">
                <td>25〜30未満</td>
                <td>肥満（２度）</td>
                </tr>
                <tr class="">
                <td>35〜40未満</td>
                <td>肥満（３度）</td>
                </tr>
                <tr class="">
                <td>40以上</td>
                <td>肥満（４度）</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
