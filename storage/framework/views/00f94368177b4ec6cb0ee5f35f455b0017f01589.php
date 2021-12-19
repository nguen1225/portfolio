<ul class="tab-menu">
    <li class="tab-menu__item"><span class="tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white is-active" data-id="tab01">血圧</span></li>
    <li class="tab-menu__item"><span class="tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab02">心拍数</span></li>
    <li class="tab-menu__item"><span class="tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab03">体重</span></li>
    <li class="tab-menu__item"><span class="tab-trigger trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab04">身長</span></li>
</ul>
<div class="tab-content bg-white">
    <h1 id="header"></h1>

    <!-- ボタンクリックで月移動 -->
    <div id="next-prev-button">
        <button id="prev">‹</button>
        <button id="next">›</button>
    </div>
    <div class="tab-content__item target is-active" id="tab01">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="blood_pressure"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab-content__item target" id="tab02">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="heart_rate"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab-content__item target" id="tab03">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="body_weight"></canvas>
            </div>
        </div>
        </p>
    </div>
    <div class="tab-content__item target" id="tab04">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="body_height"></canvas>
            </div>
        </div>
        </p>
    </div>
</div>
<?php /**PATH /work/resources/views/Vital/components/graph.blade.php ENDPATH**/ ?>