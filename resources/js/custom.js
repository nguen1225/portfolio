import Chart from 'chart.js/auto';

const height = [];
const weight = [];
const blood_pressure = [];
const heart_rate = [];
const day_data = [];


fetch(location.protocol + "//" + location.host + "/vital/day").then(function (response) {
    const day = response.json();
    return day;
}).then(function (day) {
    
    day_data_factory(day);

})


fetch(location.protocol + "//" + location.host + "/vital/height").then(function (response) {
    const height_data = response.json();
    return height_data;
}).then(function (height_data) {
    
    height_data_factory(height_data);
    const human_height  = new HUMAN_HEIGHT();
    
    const BODY_HEIGHT = new Chart(
    document.querySelector('.samples #body_height'),
    human_height.config
    );

})


fetch(location.protocol + "//" + location.host + "/vital/weight").then(function (response) {
    const weight_data = response.json();
    return weight_data;
}).then(function (weight_data) {
    
    weight_data_factory(weight_data);
    const human_weight  = new HUMAN_WEIGHT();

    const BODY_WEIGHT = new Chart(
    document.querySelector('.samples #body_weight'),
    human_weight.config
    );
        
})


fetch(location.protocol + "//" + location.host + "/vital/blood-pressure").then(function (response) {
    const blood_pressure_data = response.json();
    return blood_pressure_data;
}).then(function (blood_pressure_data) {
    
    blood_pressure_data_factory(blood_pressure_data);
    const human_blood_pressure = new HUMAN_BLOOD_PRESSURE();

    const BODY_BLOOD_PRESSURE = new Chart(
    document.querySelector('.samples #blood_pressure'),
    human_blood_pressure.config
    );
        
})


fetch(location.protocol + "//" + location.host + "/vital/heart-rate").then(function (response) {
    const heart_rate_data = response.json();
    return heart_rate_data;
}).then(function (heart_rate_data) {
    
    heart_rate_data_factory(heart_rate_data);
    const human_heart_rate = new HUMAN_HEART_RATE();

    const BODY_HEART_RATE = new Chart(
    document.querySelector('.samples #heart_rate'),
    human_heart_rate.config
    );
        
})



function day_data_factory(day) {
    day.forEach((item) => {
        day_data.push(item);
    });
    console.log(day_data);
}


function height_data_factory(height_data) {
    height_data.forEach(function (item) {
        height.push(item.height);
    });
}
console.log(height);


function weight_data_factory(weight_data) {
    weight_data.forEach(function (item) {
        weight.push(item.body_weight);
    });
}
console.log(weight);


function blood_pressure_data_factory(blood_pressure_data) {
    blood_pressure_data.forEach(function (item) {
        blood_pressure.push(item.blood_pressure);
    });
}
console.log(blood_pressure);


function heart_rate_data_factory(heart_rate_data) {
    heart_rate_data.forEach(function (item) {
        heart_rate.push(item.heart_rate);
    });
}
console.log(heart_rate);


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

