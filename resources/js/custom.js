import Chart from 'chart.js/auto';

const height = [];
const weight = [];
const max_blood_pressure = [];
const min_blood_pressure = [];
const avg_blood_pressure = [];
const heart_rate = [];
const day_data = [];

fetch(location.protocol + "//" + location.host + "/vital/health").then(function (response) {
    const health_data = response.json();
    return health_data;
}).then(function (health_data) {

    health_data_factory(health_data);
    const human_height  = new HUMAN_HEIGHT();
    const human_weight  = new HUMAN_WEIGHT();
    const human_blood_pressure = new HUMAN_BLOOD_PRESSURE();
    const human_heart_rate = new HUMAN_HEART_RATE();

    const BODY_HEIGHT = new Chart(
    document.querySelector('.samples #body_height'),
    human_height.config
    );

    const BODY_WEIGHT = new Chart(
    document.querySelector('.samples #body_weight'),
    human_weight.config
    );

    const BODY_BLOOD_PRESSURE = new Chart(
    document.querySelector('.samples #blood_pressure'),
    human_blood_pressure.config
    );

    const BODY_HEART_RATE = new Chart(
    document.querySelector('.samples #heart_rate'),
    human_heart_rate.config
    );

})

function health_data_factory(health_data) {
    Object.keys(health_data).forEach(function (item) {
        height.push(this[item].height || 0);
        weight.push(this[item].weight || 0);
        max_blood_pressure.push(this[item].max_blood_pressure || 0);
        min_blood_pressure.push(this[item].min_blood_pressure || 0);
        avg_blood_pressure.push(this[item].avg_blood_pressure || 0);
        heart_rate.push(this[item].heart_rate || 0);
        day_data.push(item);
    }, health_data);
}
console.log(height);
console.log(weight);
console.log(max_blood_pressure);
console.log(min_blood_pressure);
console.log(avg_blood_pressure);
console.log(heart_rate);
console.log(day_data);


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
                    suggestedMin: 0,
                    suggestedMax: 250,
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
                            return index % 4 === 0 ? this.getLabelForValue(val) : '';
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
                    pointRadius: 6,
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
                        stepSize: 10
                    }
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            return index % 4 === 0 ? this.getLabelForValue(val) : '';
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
                    pointRadius: 6,
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
                    pointRadius: 6,
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
                    pointRadius: 6,
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
                    pointRadius: 6,
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
                            return index % 4 === 0 ? this.getLabelForValue(val) : '';
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
                            return index % 4 === 0 ? this.getLabelForValue(val) : '';
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
                    pointRadius: 6,
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



// function get(url) {
//     return fetch(url)
// }

// async function fn() {
//     const results = [];
//     const urls = [
//         location.protocol + "//" + location.host + "/vital/day",
//         location.protocol + "//" + location.host + "/vital/height",
//         location.protocol + "//" + location.host + "/vital/weight",
//         location.protocol + "//" + location.host + "/vital/blood-pressure",
//         location.protocol + "//" + location.host + "/vital/heart-rate"
//     ]

//     console.log(await Promise.all(urls.map(get)));
// }
// fn();


document.addEventListener('DOMContentLoaded', () => {
    const tabTriggers = document.querySelectorAll('.js-tab-trigger');
    const tabTargets = document.querySelectorAll('.js-tab-target');

    for (let i = 0; i < tabTriggers.length; i++) {
        tabTriggers[i].addEventListener('click', (e) => {
            let currentMenu = e.currentTarget;
            let currentContent = document.getElementById(currentMenu.dataset.id);

            for (let i = 0; i < tabTriggers.length; i++) {
                tabTriggers[i].classList.remove('is-active');
            }
            currentMenu.classList.add('is-active');

            for (let i = 0; i < tabTargets.length; i++) {
                tabTargets[i].classList.remove('is-active');
            }
            if(currentContent !== null) {
                currentContent.classList.add('is-active');
            }
        });
    }
});

