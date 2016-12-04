var sleepChart = echarts.init(document.getElementById('sleepChart'));

function getSleepChart(id) {
    var time = new Array();
    var deep_sleep = new Array();
    var other_sleep = new Array();

    $.ajax({
        type: "post",
        async: false, //同步执行
        url: 'sleep/getAll',
        data: {"id": id},
        dataType: "json",
        success: function (result) {
            if (result != "empty") {
                for (var i = 0; i < result.length; i++) {
                    time[i] = result[i].updatedAt;
                    deep_sleep[i] = (result[i].deep_sleep);
                    other_sleep[i] = (result[i].duration - deep_sleep[i]);
                    other_sleep[i] = other_sleep[i].toFixed(1);
                }
            }
        },
        error: function () {
            alert("error!");
        }
    });

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
                data: time
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
                name: '深睡眠',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#0277bd"
                    }
                },
                data: deep_sleep
            },
            {
                name: '浅睡眠',
                type: 'bar',
                stack: 'all',
                itemStyle: {
                    normal: {
                        color: "#039be5"
                    }
                },
                data: other_sleep
            }
        ]
    };

    sleepChart.setOption(option);
}