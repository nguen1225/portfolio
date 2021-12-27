<div class="flex justify-center mb-2.5">
    <div id="next-prev-button" class="for_sp bg-gray-700 rounded-md">
        <button id="prev" class="month_prev bg-gray-700 hover:bg-gray-900 text-white mr-0.5 lg:mx-5 p-1.5 rounded-l-md">‹</button>
        <span id="month" class="month text-white" name="month" value=""></span>
        <button id="next" class="month_next bg-gray-700 hover:bg-gray-900 text-white ml-0.5 lg:mx-5 p-1.5 rounded-r-md">›</button>
    </div>
</div>
<ul class="tab-menu">
    <li class="tab_menu_item"><span class="rounded-t-md tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white is-active" data-id="tab01">血圧</span></li>
    <li class="tab_menu_item"><span class="rounded-t-md tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab02">心拍数</span></li>
    <li class="tab_menu_item"><span class="rounded-t-md tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab03">体重</span></li>
    <li class="tab_menu_item"><span class="rounded-t-md tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white mr-1.5" data-id="tab04">身長</span></li>
    <div id="next-prev-button" class="flex for_pc bg-gray-700 rounded-t-lg">
        <button id="prev" class="month_prev bg-gray-700 hover:bg-gray-900 text-white mr-3 p-1.5 rounded-tl-md">‹</button>
        <span id="month" class="month text-white" name="month" value=""></span>
        <button id="next" class="month_next bg-gray-700 hover:bg-gray-900 text-white ml-3 p-1.5 rounded-tr-md">›</button>
    </div>
</ul>

<div class="tab-content bg-white">
    <div class="tab_content_item target is-active" id="tab01">
        <p>
        <div class="graph">
            <div class="graph_row">
                <canvas id="blood_pressure"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab_content_item target" id="tab02">
        <p>
        <div class="graph">
            <div class="graph_row">
                <canvas id="heart_rate"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab_content_item target" id="tab03">
        <p>
        <div class="graph">
            <div class="graph_row">
                <canvas id="body_weight"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab_content_item target" id="tab04">
        <p>
        <div class="graph">
            <div class="graph_row">
                <canvas id="body_height"></canvas>
            </div>
        </div>
        </p>
    </div>
</div>
