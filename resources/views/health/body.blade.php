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
        <li><a href="exercise" class="waves-effect waves-teal teal-text text-darken-4 center">运动统计</a></li>
        <li class="active"><a href="body" class="waves-effect waves-teal teal-text text-darken-4 center">身体指标</a></li>
        <li><a href="sleep" class="waves-effect waves-teal teal-text text-darken-4 center">睡眠状况</a></li>
    </ul>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">目前指标</span><span class="margin-left-10 grey-text text-darken-1" id="recentTime"></span>
            <div class="bold-divider"></div>
            <div class="row">
                <div class="col m4 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">身 高</div>
                        <div id="height">-- cm</div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">体 重</div>
                        <div id="weight">-- kg</div>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">心 率</div>
                        <div id="rate">-- bpm</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">身高曲线</span>
            <div class="bold-divider"></div>
            <div id="heightChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">体重曲线</span>
            <div class="bold-divider"></div>
            <div id="weightChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">心率曲线</span>
            <div class="bold-divider"></div>
            <div id="heartrateChart" style="height:300px;width:100%;background:#e1f5fe;"></div>
        </div>
    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red waves-effect waves-light"> <i class="large material-icons">add</i> </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">publish</i></a></li>
            <li>
                <a class="btn-floating blue"><img style="margin-top:5px;"
                                                  src="{{URL::asset('/assets/icons/height.svg')}}" alt=""></a>
            </li>
            <li>
                <a class="btn-floating green"><img src="{{URL::asset('/assets/icons/weight.svg')}}" alt=""></a>
            </li>
        </ul>
    </div>
@stop

@section('extra_js')
    <script src="{{URL::asset('/assets/js/echarts.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js-chart/body_chart.js')}}"></script>
    <script>
        var id = {{Session::get('user')->id}};
        $.ajax({
            method: "post",
            url: "body/getRecent",
            async: false,
            data: {
                "id": id
            },
            success: function (result) {
                var data = JSON.parse(result);
                $("#height").html(data.height + " cm");
                $("#weight").html(data.weight + " kg");
                $("#rate").html(data.heart_rate + " bpm");
                $("#recentTime").html("最后更新于  "+ data.updatedAt.split(" ")[0]);
            },
            error: function () {
                window.location.href = "../error";
            }
        });

        getBodyChart(id);
    </script>
@stop