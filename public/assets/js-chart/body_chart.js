var heightChart = echarts.init(document.getElementById('heightChart'));
var weightChart = echarts.init(document.getElementById('weightChart'));
var heartrateChart = echarts.init(document.getElementById('heartrateChart'));

var height = new Array();
var weight = new Array();
var heartRate = new Array();
var date = new Array();

function getBodyChart(id) {
    $.ajax({
        type: "post",
        async: false, //同步执行
        url: 'body/getAll',
        data: {"id": id},
        dataType: "json",
        success: function (result) {
            if (result != "empty") {
                for (var i = 0; i < result.length; i++) {
                    height[i] = result[i].height;
                    weight[i] = result[i].weight;
                    weight[i] = weight[i];
                    heartRate[i] = result[i].heart_rate;
                    date[i] = result[i].updatedAt.split(" ")[0];
                }
            }
            getHeightChart();
            getWeightChart();
            getHeartRateChart();
        },
        error: function () {
            alert("error!");
        }
    });
}

function getHeightChart() {
    option = {
        tooltip: {
            trigger: 'axis'
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: date
        },
        yAxis: [
            {
                type: 'value',
                name: 'cm',
                scale: true
            }
        ],
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
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
                name: '身高',
                type: 'line',
                data: height,
                // markPoint: {
                //     data: [
                //         {type: 'max', name: '最高点'},
                //     ]
                // },
                // markLine: {
                //     data: [
                //         {type: 'average', name: '平均值'}
                //     ]
                // }
            }
        ]
    };

    heightChart.setOption(option);

}

function getWeightChart() {
    option = {
        tooltip: {
            trigger: 'axis'
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: date
        },
        yAxis: [
            {
                type: 'value',
                name: 'kg',
                scale: true
            }
        ],
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
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
                name: '体重',
                type: 'line',
                data: weight,
                markPoint: {
                    data: [
                        {type: 'max', name: '最高点'},
                        {type: 'min', name: '最低点'}
                    ]
                },
                markLine: {
                    data: [
                        {type: 'average', name: '平均值'}
                    ]
                }
            }
        ]
    };

    weightChart.setOption(option);

}

function getHeartRateChart() {
    option = {
        tooltip: {
            trigger: 'axis'
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: date
        },
        yAxis: [
            {
                type: 'value',
                name: 'bpm',
                scale: true
            }
        ],
        grid: {
            top: '10%',
            left: '0%',
            right: '10%',
            containLabel: true
        },
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
                name: '心率',
                type: 'line',
                data: heartRate,
                markPoint: {
                    data: [
                        {type: 'max', name: '最高点'},
                        {type: 'min', name: '最低点'}
                    ]
                },
                markLine: {
                    data: [
                        {type: 'average', name: '平均值'}
                    ]
                }
            }
        ]
    };

    heartrateChart.setOption(option);
}
