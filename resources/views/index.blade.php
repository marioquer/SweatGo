@extends('common.layout')

<?php
$user = Session::get('user');
?>

@section('nav-item')
    <li class="active"><a href="index" class="teal-text text-darken-4">首页</a></li>
    <li><a href="health/exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li><a href="competition/joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li><a href="moment/all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a>
    </li>
    <li><a href="user" class="waves-effect waves-light teal-text text-darken-3"><i
                    class="material-icons">account_circle</i></a>
    </li>
    <li><a href="user/logout" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">exit_to_app</i></a>
    </li>
@stop

@section('info-nav')
    <ul class="my-info">
        <li id="height" class="thin-text center grey-text text-darken-3">-- cm</li>
        <li id="weight" class="thin-text center grey-text text-darken-3">-- kg</li>
        {{--<li id="sleep" class="thin-text center grey-text text-darken-3">-- hrs</li>--}}
        <li id="rate" class="thin-text center grey-text text-darken-3">-- bpm</li>
        <li id="recentTime" class="thin-text center grey-text text-dartken-2" style="font-size: 14px;">-- bpm</li>
    </ul>
    <a class="waves-effect waves-light btn" href="health/body">查看健康详情</a>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">今日运动</span>
            <div class="bold-divider"></div>
            <div class="row">
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">行走步数</div>
                        <div id="pace">0 steps</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">运动里程</div>
                        <div id="mileage">0.0 km</div>
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
                        <div id="heat">0 kcal</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">我的竞赛</span>
            <div class="bold-divider"></div>
            <div class="row">
                <div class="col m3 s12 list-info">
                    <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                    <div class="game-time">10月20号结束</div>
                </div>
                <div class="col m3 s12 list-info">
                    <div class="game-class"><img src="{{URL::asset('/assets/icons/cup.svg')}}" alt="">
                        <div class="game-class-name">热量赛</div>
                    </div>
                </div>
                <div class="col m6 s12 list-info">
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person">
                        完成 80%
                    </div>
                    <span class="game-class margin-right-10 margin-left-10">VS</span>
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person">
                        完成 60%
                    </div>
                    <a class="waves-effect waves-teal btn-flat teal-text">查看</a></div>
            </div>
            <!--                        <div class="divider"></div>-->
            <div class="row">
                <div class="col m3 s12 list-info">
                    <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                    <div class="game-time">10月20号结束</div>
                </div>
                <div class="col m3 s12 list-info">
                    <div class="game-class"><img src="{{URL::asset('/assets/icons/cup.svg')}}" alt="">
                        <div class="game-class-name">热量赛</div>
                    </div>
                </div>
                <div class="col m6 s12 list-info">
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person">
                        完成 80%
                    </div>
                    <span class="game-class margin-right-10 margin-left-10">VS</span>
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person">
                        完成 60%
                    </div>
                    <a class="waves-effect waves-teal btn-flat teal-text">查看</a></div>
            </div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">朋友圈动态</span>
            <div class="bold-divider"></div>
            <div class="list-info">
                <div class="chip inline left"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person">
                    Marioquer
                </div>
                <div class="moment-time inline margin-left-10"> 10月20日 20:00:00</div>
                <div class="moment-time inline margin-left-10 right"> 12 赞</div>
                <div class="moment-time inline margin-left-10 right"> 10 评论</div>
            </div>
            <div class="margin-top-10 moment-intent blue-grey-text text-darken-2">
                我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈我的天啊哈哈哈
            </div>
        </div>
    </div>
@stop

@section('extra_js')
    <script>
        var id = {{Session::get('user')->id}};
        $.ajax({
            method: "post",
            url: "health/body/getRecent",
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
                 window.location.href = "error";
            }
        });

        $.ajax({
            method: "post",
            url: "health/exercise/getToday",
            async: false,
            data: {
                "id": id
            },
            success: function (result) {
                if(result != "empty"){
                    var data = JSON.parse(result);
                    $("#pace").html(data.pace + " steps");
                    $("#mileage").html(data.mileage + " km");
                    $("#time").html(data.time + " hrs");
                    $("#heat").html(data.heat + " kCal");
                }
            },
            error: function () {
                window.location.href = "error";
            }
        });
    </script>
@stop