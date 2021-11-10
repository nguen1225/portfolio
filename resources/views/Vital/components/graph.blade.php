<ul class="tab-menu">
    <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white is-active" data-id="tab01">身長</span></li>
    <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab02">体重</span></li>
    <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab03">血圧</span></li>
    <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger bg-gray-700 hover:bg-gray-900 font-semibold text-white" data-id="tab04">心拍数</span></li>
    {{-- <li class="tab-menu__item"><span class="tab-trigger js-tab-trigger" data-id="tab05">全体</span></li> --}}
</ul>
<div class="tab-content">
    <div class="tab-content__item js-tab-target is-active" id="tab01">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="body_height"></canvas>
            </div>
        </div>
        </p>
    </div><!-- .tab-content__item -->
    <div class="tab-content__item js-tab-target" id="tab02">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="body_weight"></canvas>
            </div>
        </div>
        </p>
    </div><!-- .tab-content__item -->
    <div class="tab-content__item js-tab-target" id="tab03">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="blood_pressure"></canvas>
            </div>
        </div>
        </p>
    </div><!-- .tab-content__item -->
    <div class="tab-content__item js-tab-target" id="tab04">
        <p>
        <div class="samples">
            <div class="graph_row">
                <canvas id="heart_rate"></canvas>
            </div>
        </div>
        </p>
    </div><!-- .tab-content__item -->
    {{-- <div class="tab-content__item js-tab-target" id="tab05">
        <p>
        <div class="global-contents">
            <h1 class="graph_title">記録図</h1>
            <div class="samples">
                <div class="graph_row right">
                    <canvas id="body_height"></canvas>
                </div>
                <div class="graph_row">
                    <canvas id="body_weight"></canvas>
                </div>
            </div>
            <div class="samples bottom">
                <div class="graph_row right">
                    <canvas id="blood_pressure"></canvas>
                </div>
                <div class="graph_row">
                    <canvas id="heart_rate"></canvas>
                </div>
            </div>
        </div>
        </p>
    </div><!-- .tab-content__item --> --}}
</div>
