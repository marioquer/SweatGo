@extends('common.layout')

@section('nav-item')
    <li class="active"><a href="index.html" class="teal-text text-darken-4">首页</a></li>
    <li><a href="health-exercise.html" class="waves-effect waves-light grey-text text-darken-1">健康</a></li>
    <li><a href="competitions-joined.html" class="waves-effect waves-light grey-text text-darken-1">竞赛</a></li>
    <li><a href="moments-all.html" class="waves-effect waves-light grey-text text-darken-1">朋友圈</a></li>
    <li><a href="messages.html" class="waves-effect waves-light grey-text text-darken-1"><i class="material-icons">notifications</i></a>
    </li>
    <li><a href="personal.html" class="waves-effect waves-light grey-text text-darken-1"><i class="material-icons">person_pin</i></a>
    </li>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">运动数据</span>
            <div class="bold-divider"></div>
            <div class="row">
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">行走步数</div>
                        <div>100 步</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">运动里程</div>
                        <div>2.0 km</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">运动时长</div>
                        <div>1.6 hrs</div>
                    </div>
                </div>
                <div class="col m3 s12">
                    <div class="grey inline" style="border-radius:100px;height:50px;width:50px; margin-top:10px;"></div>
                    <div class="inline margin-left-10 blue-grey-text text-darken-3" style="height:50px;">
                        <div style="font-size:18px;">消耗热量</div>
                        <div>100 kcal</div>
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
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person"> 完成 80%</div>
                    <span class="game-class margin-right-10 margin-left-10">VS</span>
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person"> 完成 60%</div>
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
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person"> 完成 80%</div>
                    <span class="game-class margin-right-10 margin-left-10">VS</span>
                    <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person"> 完成 60%</div>
                    <a class="waves-effect waves-teal btn-flat teal-text">查看</a></div>
            </div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"><span class="card-title teal-text text-darken-4">朋友圈动态</span>
            <div class="bold-divider"></div>
            <div class="list-info">
                <div class="chip inline left"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="Contact Person"> Marioquer</div>
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