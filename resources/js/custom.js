import Chart from 'chart.js/auto';

const dayData = [1];
const countData = [1];


class HUMAN_HEIGHT {

    labels = dayData
    data = countData

    data = {
        labels: this.labels,
        datasets: [{
            label: '集い回数 ',
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
                    display: false,
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 20,
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            return index % 2 === 0 ? this.getLabelForValue(val) : '';
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

class HUMAN_WEIGHT {

    labels = dayData
    data = countData

    data = {
        labels: this.labels,
        datasets: [{
            label: '集い回数 ',
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
                    display: false,
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 20,
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            return index % 2 === 0 ? this.getLabelForValue(val) : '';
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

class HUMAN_BLOOD_PRESSURE {

    labels = dayData
    data = countData

    data = {
        labels: this.labels,
        datasets: [{
            label: '集い回数 ',
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
                    display: false,
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 20,
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            return index % 2 === 0 ? this.getLabelForValue(val) : '';
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

class HUMAN_HEART_RATE {

    labels = dayData
    data = countData

    data = {
        labels: this.labels,
        datasets: [{
            label: '集い回数 ',
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
                    display: false,
                    align: 'start',
                }
            },
            scales: {
                y: {
                    suggestedMin: 0,
                    suggestedMax: 20,
                },
                x: {
                    ticks: {
                        maxTicksLimit: 31,
                        maxRotation: 0,
                        minRotation: 0,
                        callback: function (val, index) {
                            return index % 2 === 0 ? this.getLabelForValue(val) : '';
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
