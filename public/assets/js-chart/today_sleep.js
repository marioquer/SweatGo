var sleepForm = echarts.init(document.getElementById('sleepForm'));

function getSleepForm(id) {
    var other_sleep, deep_sleep, isEmpty = false;

    $.ajax({
        type: "post",
        async: false, //同步执行
        url: 'sleep/getToday',
        data: {"id": id},
        dataType: "json",
        success: function (result) {
            if(result!="empty"){
                deep_sleep = result.deep_sleep;
                other_sleep = result.duration - deep_sleep;
            }else {
                isEmpty = true;
            }
        },
        error: function () {
            alert("error222!");
        }
    });

    var option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {            // 坐标轴指示器，坐标轴触发有效
                type: 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            top: '12%',
            left: '0%',
            right: '0%',
            bottom: '20%',
            containLabel: false
        },
        xAxis: {
            show: false,
            type: 'value'
        },
        yAxis: {
            show: false,
            type: 'category',
            data: ['']
        },
        series: [
            {
                name: '深睡眠',
                type: 'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        color: "#0277bd"
                    }
                },
                label: {
                    normal: {
                        show: true,
                        formatter: deep_sleep + 'h  深睡眠'
                    }
                },
                data: [deep_sleep]
            },
            {
                name: '浅睡眠',
                type: 'bar',
                stack: '总量',
                itemStyle: {
                    normal: {
                        color: "#039be5"
                    }
                },
                label: {
                    normal: {
                        show: true,
                        formatter: other_sleep + 'h  浅睡眠'
                    }
                },
                data: [other_sleep.toFixed(1)]
            }
        ]
    };

    if(!isEmpty){
        sleepForm.setOption(option);
    }else{
        aler(1)
        document.getElementById('sleepForm').innerHTML = "昨日数据没有录入噢~"
    }

}
