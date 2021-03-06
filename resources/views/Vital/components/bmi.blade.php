@include('vital.components.script.odometer')

<div class="bmi bg-white">
    <div class="today_bmi">
        <p class="bmi_title font-semibold">
            現在のBMI
        </p>
        <p class="bmi_value">
            <div class="odometer bmi_meter">00</div>
        </p>
        <p class="bmi_title font-semibold">
            適正体重
        </p>
        <p class="bmi_value">
            <div class="odometer standard_weight_meter">00.00</div><span class="text-xl font-medium mx-1">kg</span>
        </p>
        <p class="bmi_title font-semibold">
            適性体重と比較
        </p>
        <p class="bmi_value">
            <div class="odometer weight_difference_meter">00.00</div><span class="text-xl font-medium mx-1">kg</span>
        </p>
    </div>
    <div class="bmi_content">
        <table class="rounded-md bmi_table max-w-md w-full border-separate border border-black ...">
            <thead>
                <tr>
                    <th class="rounded-md ont-semibold text-white bg-gray-700 border border-black ...">BMI 範囲</th>
                    <th class="rounded-md ont-semibold text-white bg-gray-700 border border-black ...">肥満度</th>
                </tr>
            </thead>
            @if ($bmi === 0)
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @elseif ($bmi < 18.5)
            <tbody>
                <tr>
                    <td class="rounded-md bg-blue-200 p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md bg-blue-200 p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @elseif ($bmi < 25)
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md bg-blue-300 p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md bg-blue-300 p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @elseif ($bmi < 30)
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md bg-yellow-200 p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md bg-yellow-200 p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @elseif ($bmi < 35)
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md bg-yellow-300 p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md bg-yellow-300 p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @elseif ($bmi < 40)
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md bg-red-400 text-white p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md bg-red-400 text-white p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @else
            <tbody>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">低体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">18.5〜25未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">普通体重</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">25〜30未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(1度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">30〜35未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(2度)</td>
                </tr>
                <tr>
                    <td class="rounded-md p-0.5 font-bold border border-black ...">35〜40未満</td>
                    <td class="rounded-md p-0.5 border border-black ...">肥満(3度)</td>
                </tr>
                <tr>
                    <td class="rounded-md bg-red-500 text-white p-0.5 font-bold border border-black ...">40以上</td>
                    <td class="rounded-md bg-red-500 text-white p-0.5 border border-black ...">肥満(4度)</td>
                </tr>
            </tbody>
            @endif
        </table>
    </div>
</div>
