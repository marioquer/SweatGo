var paceChart = echarts.init(document.getElementById('paceChart'));
var mileageChart = echarts.init(document.getElementById('mileageChart'));
var timeChart = echarts.init(document.getElementById('timeChart'));
var heatChart = echarts.init(document.getElementById('heatChart'));

var pace = new Array();
var mileage = new Array();
var time = new Array();
var heat = new Array();
var date = new Array();

function getExerciseChart(id) {
    $.ajax({
        type: "post",
        async: false, //同步执行
        url: 'exercise/getAll',
        data: {"id": id},
        dataType: "json",
        success: function (result) {
            if (result != "empty") {
                for (var i = 0; i < result.length; i++) {
                    pace[i] = result[i].pace;
                    mileage[i] = result[i].mileage;
                    time[i] = result[i].time;
                    heat[i] = result[i].heat;
                    date[i] = result[i].updatedAt.split(" ")[0];
                }
            }
            getPaceChart();
            getMileageChart();
            getTimeChart();
            getHeatChart();
        },
        error: function () {
            alert("error!");
        }
    });
}

function getPaceChart() {
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: date
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'steps',
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 75,
                end: 100
            },
            {
                type: 'inside',
                start: 75,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [
            {
                name: '步数',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#78909c"
                    }
                },
                data: pace
            }
        ]
    };

    paceChart.setOption(option);

}

function getMileageChart() {
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: date
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'km',
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 75,
                end: 100
            },
            {
                type: 'inside',
                start: 75,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [
            {
                name: '运动里程',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#26a69a"
                    }
                },
                data: mileage
            }
        ]
    };

    mileageChart.setOption(option);

}

function getTimeChart() {
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: date
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'hrs',
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 75,
                end: 100
            },
            {
                type: 'inside',
                start: 75,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [
            {
                name: '运动时长',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#8d6e63"
                    }
                },
                data: time
            }
        ]
    };

    timeChart.setOption(option);
}

function getHeatChart() {
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: date
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'kCal',
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 75,
                end: 100
            },
            {
                type: 'inside',
                start: 75,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [
            {
                name: '热量',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#ffa726"
                    }
                },
                data: heat
            }
        ]
    };

    heatChart.setOption(option);
}