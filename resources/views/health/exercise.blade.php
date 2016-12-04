@extends('common.layout')

@section('nav-item')
    <li><a href="../index" class="teal-text text-darken-4">首页</a></li>
    <li class="active"><a href="exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li><a href="../competition/joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li><a href="../moment/all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="../message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a>
    </li>
    <li><a href="../user" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">account_circle</i></a>
    </li>
    <li><a href="../user/logout" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">exit_to_app</i></a>
    </li>
@stop

@section('background-color')
    <div class="back-color" style="background-color: #1976d2;"></div>
@stop

@section('info-nav')
    <ul class="left-list">
        <li class="active"><a href="exercise" class="waves-effect waves-teal teal-text text-darken-4 center">运动统计</a>
        </li>
        <li><a href="body" class="waves-effect waves-teal teal-text text-darken-4 center">身体指标</a></li>
        <li><a href="sleep" class="waves-effect waves-teal teal-text text-darken-4 center">睡眠状况</a></li>
    </ul>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">今日运动</span><span
                    class="margin-left-10 grey-text text-darken-1" id="recentTime"></span>
            <div class="bold-divider"></div>
            <div class="row">
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">行走步数</div>
                        <div id="pace">0 步</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">运动里程</div>
                        <div id="mileage">0 km</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">运动时长</div>
                        <div id="time">0.0 hrs</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">消耗热量</div>
                        <div id="heat">0.0 kcal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">步数曲线</span>
            <div class="bold-divider"></div>
            <div id="paceChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">里程曲线</span>
            <div class="bold-divider"></div>
            <div id="mileageChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">时长曲线</span>
            <div class="bold-divider"></div>
            <div id="timeChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">热量曲线</span>
            <div class="bold-divider"></div>
            <div id="heatChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
@stop

@section('extra_js')
    <script src="{{URL::asset('/assets/js/echarts.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js-chart/exercise_chart.js')}}"></script>
    <script>
        var id = {{Session::get('user')->id}};
        $.ajax({
            method: "post",
            url: "exercise/getToday",
            async: false,
            data: {
                "id": id
            },
            success: function (result) {
                if (result != "empty") {
                    var data = JSON.parse(result);
                    $("#pace").html(data.pace + " steps");
                    $("#mileage").html(data.mileage + " km");
                    $("#time").html(data.time + " hrs");
                    $("#heat").html(data.heat + " kCal");
                    $("#recentTime").html("最后更新于: " + data.updatedAt);

                }
            },
            error: function () {
                window.location.href = "../error";
            }
        });

        getExerciseChart(id);
    </script>
@stop