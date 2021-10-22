import Chart from 'chart.js/auto';

const height = [];
const weight = [];
const blood_pressure = [];
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
        blood_pressure.push(this[item].blood_pressure || 0);
        heart_rate.push(this[item].heart_rate || 0);
        day_data.push(item);
    }, health_data);
}
console.log(height);
console.log(weight);
console.log(blood_pressure);
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
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 250,
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
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 100,
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
    data = blood_pressure

    data = {
        labels: this.labels,
        datasets: [{
            label: '血圧 ',
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
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 300,
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
            label: '心拍数 ',
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
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 300,
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