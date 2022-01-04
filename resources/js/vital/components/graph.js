import Chart from 'chart.js/auto';

const height = [];
const weight = [];
const max_blood_pressure = [];
const min_blood_pressure = [];
const avg_blood_pressure = [];
const heart_rate = [];
const day_data = [];

if (location.pathname === "/vital") {
    fetch(location.protocol + "//" + location.host + "/vital/health").then(function (response) {
        const health_data = response.json();
        return health_data;
    }).then(function (health_data) {

        const get_month = document.querySelector('#month');
        const get_value = get_month.getAttribute('value');

        health_data_factory(health_data);

        observer.observe(get_month, config);

        const human_height  = new HUMAN_HEIGHT();
        const human_weight  = new HUMAN_WEIGHT();
        const human_blood_pressure = new HUMAN_BLOOD_PRESSURE();
        const human_heart_rate = new HUMAN_HEART_RATE();

        window.BODY_HEIGHT = new Chart(
        document.querySelector('.graph #body_height'),
        human_height.config
        );

        window.BODY_WEIGHT = new Chart(
        document.querySelector('.graph #body_weight'),
        human_weight.config
        );

        window.BODY_BLOOD_PRESSURE = new Chart(
        document.querySelector('.graph #blood_pressure'),
        human_blood_pressure.config
        );

        window.BODY_HEART_RATE = new Chart(
        document.querySelector('.graph #heart_rate'),
        human_heart_rate.config
        );
    })
}

function health_data_factory(health_data) {
    const get_month = document.querySelector('#month');
    const get_value = get_month.getAttribute('value');

    const rows = new Array();

    health_data.forEach(item => {
        rows[item.date] = item;
    });

    // 月を取得
    // Safariでnew Date()は何年何月何日まで必要
    const date_start = new Date(get_value + "/1");
    const date_end = new Date(get_value + "/1");

    // 日付を1に設定する
    date_start.setDate(1);

    // 1ヶ月加えて来月にする
    date_end.setMonth(date_end.getMonth() + 1);

    // 日付に0を設定、先月を月末にする(例えば今月が12月なら11月の月末を取得する)
    date_end.setDate(0);

    const month = new Array();

    // その月の月初めから月末まで取得
    for(const d = date_start; d <= date_end; d.setDate(d.getDate()+1)) {
        const formatedDate = d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate();

        month[formatedDate] = {
            date:formatedDate,
            height:0,
            weight:0,
            max_blood_pressure:0,
            min_blood_pressure:0,
            avg_blood_pressure:0,
            heart_rate:0
        }
    }

    // 配列を連結
    const get_month_assign = Object.assign(month, rows);

    // ソートして、欲しい月だけ検索して絞り込む
    const sort_data = get_month_assign.sort((a, b) => new Date(a.date) - new Date(b.date));
    const get_month_data = Object.values(sort_data).filter(
        function(obj) {
            return obj.date.match(get_value);
        }
    );

    Object.keys(get_month_data).forEach(function (item) {
        height.push(this[item].height || 0);
        weight.push(this[item].weight || 0);
        max_blood_pressure.push(this[item].max_blood_pressure || 0);
        min_blood_pressure.push(this[item].min_blood_pressure || 0);
        avg_blood_pressure.push(this[item].avg_blood_pressure || 0);
        heart_rate.push(this[item].heart_rate || 0);
        day_data.push(this[item].date);
    }, get_month_data);
}

// 月表示に変更があれば作動
const observer = new MutationObserver(function () {
    fetch(location.protocol + "//" + location.host + "/vital/health").then(function (response) {
        const health_data = response.json();
        return health_data;
    }).then(function (health_data) {

        if (BODY_HEIGHT || BODY_HEIGHT || BODY_BLOOD_PRESSURE || BODY_HEART_RATE) {
            BODY_HEIGHT.destroy();
            BODY_WEIGHT.destroy();
            BODY_BLOOD_PRESSURE.destroy();
            BODY_HEART_RATE.destroy();
            height.length = 0;
            weight.length = 0;
            max_blood_pressure.length = 0;
            min_blood_pressure.length = 0;
            avg_blood_pressure.length = 0;
            heart_rate.length = 0;
            day_data.length = 0;
        }

        health_data_factory(health_data);

        const human_height  = new HUMAN_HEIGHT();
        const human_weight  = new HUMAN_WEIGHT();
        const human_blood_pressure = new HUMAN_BLOOD_PRESSURE();
        const human_heart_rate = new HUMAN_HEART_RATE();

        window.BODY_HEIGHT = new Chart(
            document.querySelector('.graph #body_height'),
            human_height.config
        );

        window.BODY_WEIGHT = new Chart(
            document.querySelector('.graph #body_weight'),
            human_weight.config
        );

        window.BODY_BLOOD_PRESSURE = new Chart(
            document.querySelector('.graph #blood_pressure'),
            human_blood_pressure.config
        );

        window.BODY_HEART_RATE = new Chart(
            document.querySelector('.graph #heart_rate'),
            human_heart_rate.config
        );
    })
});

const config = {
    attributes: true
};


class HUMAN_HEIGHT {

    labels = day_data
    data = height

    data = {
        labels: this.labels,
        datasets: [{
            label: '身長 ',
            data: this.data
        }]
    }

    config = {
        type: 'line',
        data: this.data,
        options: {
            fill: true,
            plugins: {
                legend: {
                    display: true,
                    align: 'end',
                }
            },
            scales: {
                y: {
                    suggestedMin: 50,
                    suggestedMax: 250,
                    ticks: {
                        stepSize: 10
                    }
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            // pcとspで日にち表示数をかえる
                            if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                                return index % 8 === 0 ? this.getLabelForValue(val) : '';
                            } else {
                                return index % 5 === 0 ? this.getLabelForValue(val) : '';
                            };
                        }
                    }
                }
            },
            elements: {
                line: {
                    borderColor: "rgba(36,21,242,1)",
                    backgroundColor: "rgba(76,176,206,0.3)"
                },
                point: {
                    pointRadius: function () {
                        // 丸の大きさをpcとspで分ける
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgba(36,21,242,1)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
            responsive: true,
            maintainAspectRatio: true
        }
    }
}

class HUMAN_WEIGHT {

    labels = day_data
    data = weight

    data = {
        labels: this.labels,
        datasets: [{
            label: '体重 ',
            data: this.data
        }]
    }

    config = {
        type: 'line',
        data: this.data,
        options: {
            fill: true,
            plugins: {
                legend: {
                    display: true,
                    align: 'end',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 150,
                    ticks: {
                        stepSize: 5
                    }
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            // pcとspで日にち表示数をかえる
                            if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                                return index % 8 === 0 ? this.getLabelForValue(val) : '';
                            } else {
                                return index % 5 === 0 ? this.getLabelForValue(val) : '';
                            };
                        }
                    }
                }
            },
            elements: {
                line: {
                    borderColor: "rgba(39,147,14,1)",
                    backgroundColor: "rgba(67,249,155,0.3)"
                },
                point: {
                    pointRadius: function () {
                        // 丸の大きさをpcとspで分ける
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgba(39,147,14,1)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
            responsive: true,
            maintainAspectRatio: true
        }
    }
}

class HUMAN_BLOOD_PRESSURE {

    labels = day_data
    max_data = max_blood_pressure
    min_data = min_blood_pressure
    avg_data = avg_blood_pressure

    data = {
        labels: this.labels,
        datasets: [{
            label: '最高血圧 ',
            data: this.max_data,
            elements: {
                line: {
                    borderColor: "rgba(255,9,5,1)",
                    backgroundColor: "rgba(247,69,101,0.3)"
                },
                point: {
                    pointRadius: function () {
                        // 丸の大きさをpcとspで分ける
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgba(255,9,5,1)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
        },
        {
            label: '最低血圧 ',
            data: this.min_data,
            elements: {
                line: {
                    borderColor: "rgb(88,73,255)",
                    backgroundColor: "rgba( 9,206,232 , 0.3 )"
                },
                point: {
                    pointRadius: function () {
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgb(88,73,255)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
        },
        {
            label: '平均血圧 ',
            data: this.avg_data,
            elements: {
                line: {
                    borderColor: "rgb(113,22,249,1)",
                    backgroundColor: "rgb(200,103,252,0.3)"
                },
                point: {
                    pointRadius: function () {
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgb(113,22,249,1)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
        }],
    }

    config = {
        type: 'line',
        data: this.data,
        options: {
            fill: true,
            plugins: {
                legend: {
                    display: true,
                    align: 'end',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 200,
                    ticks: {
                        stepSize: 50
                    }
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            // pcとspで日にち表示数をかえる
                            if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                                return index % 8 === 0 ? this.getLabelForValue(val) : '';
                            } else {
                                return index % 5 === 0 ? this.getLabelForValue(val) : '';
                            };
                        }
                    }
                }
            },

            responsive: true,
            maintainAspectRatio: true
        }
    }
}

class HUMAN_HEART_RATE {

    labels = day_data
    data = heart_rate
    data = {
        labels: this.labels,
        datasets: [{
            label: '心拍数(1分間) ',
            data: this.data
        }]
    }

    config = {
        type: 'line',
        data: this.data,
        options: {
            fill: true,
            plugins: {
                legend: {
                    display: true,
                    align: 'end',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 150,
                    ticks: {
                        stepSize: 50
                    }
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            // pcとspで日にち表示数をかえる
                            if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                                return index % 8 === 0 ? this.getLabelForValue(val) : '';
                            } else {
                                return index % 5 === 0 ? this.getLabelForValue(val) : '';
                            };
                        }
                    }
                }
            },
            elements: {
                line: {
                    borderColor: "rgba(240,137,17,1)",
                    backgroundColor: "rgba(251,206,110,0.3)"
                },
                point: {
                    pointRadius: function () {
                        if(navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
                            // 丸の大きさをpcとspで分ける
                            return 3;
                        } else {
                            return 5;
                        };
                    },
                    pointBorderWidth: 2,
                    pointBorderColor: "rgba(240,137,17,1)",
                    pointBackgroundColor: "rgba(255, 255, 255, 1)"
                }
            },
            responsive: true,
            maintainAspectRatio: true
        }
    }
}
