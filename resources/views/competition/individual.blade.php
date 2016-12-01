@extends('common.layout')

@section('nav-item')
    <li><a href="../index" class="teal-text text-darken-4">首页</a></li>
    <li><a href="../health/exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li class="active"><a href="joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li><a href="../moment/all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="../message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a></li>
    <li><a href="../user" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">person_pin</i></a></li>
@stop

@section('background-color')
    <div class="back-color" style="background-color: #e57373;"></div>
@stop

@section('info-nav')
    <ul class="left-list">
        <li><a href="joined" class="waves-effect waves-teal teal-text text-darken-4 center">我的竞赛</a></li>
        <li class="active"><a href="individual" class="waves-effect waves-teal teal-text text-darken-4 center">个人赛</a></li>
        <li><a href="group" class="waves-effect waves-teal teal-text text-darken-4 center">小组赛</a></li>
    </ul>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10 min-height-500">
            <div class="row">
                <div class="col m4 s12">
                    <ul class="tabs">
                        <li class="tab col s6"><a class="active" href="#all">所有个人赛</a></li>
                        <li class="tab col s6"><a href="#mine">我的个人赛</a></li>
                    </ul>
                </div>
                <div id="all" class="col s12">
                    <div class="row">
                        <div class="col m3 s12 list-info">
                            <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                            <div class="game-time">10月20号结束</div>
                        </div>
                        <div class="col m3 s12 list-info">
                            <div class="game-class"><img src="../icons/cup.svg" alt="">
                                <div class="game-class-name">热量赛</div>
                            </div>
                        </div>
                        <div class="col m6 s12 list-info">
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 80% </div> <span class="game-class margin-right-10 margin-left-10">VS</span>
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 60% </div> <a class="waves-effect waves-teal btn-flat teal-text">加入</a> </div>
                    </div>
                    <div class="row">
                        <div class="col m3 s12 list-info">
                            <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                            <div class="game-time">10月20号结束</div>
                        </div>
                        <div class="col m3 s12 list-info">
                            <div class="game-class"><img src="../icons/cup.svg" alt="">
                                <div class="game-class-name">热量赛</div>
                            </div>
                        </div>
                        <div class="col m6 s12 list-info">
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 80% </div> <span class="game-class margin-right-10 margin-left-10">VS</span>
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 60% </div> <a class="waves-effect waves-teal btn-flat teal-text">加入</a> </div>
                    </div>
                </div>
                <div id="mine" class="col s12">
                    <div class="row">
                        <div class="col m3 s12 list-info">
                            <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                            <div class="game-time">10月20号结束</div>
                        </div>
                        <div class="col m3 s12 list-info">
                            <div class="game-class"><img src="../icons/cup.svg" alt="">
                                <div class="game-class-name">热量赛</div>
                            </div>
                        </div>
                        <div class="col m6 s12 list-info">
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 80% </div> <span class="game-class margin-right-10 margin-left-10">VS</span>
                            <div class="chip inline"> <img src="../image/mario.jpg" alt="Contact Person"> 完成 60% </div> <a class="waves-effect waves-teal btn-flat teal-text">查看</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red lighten-2 waves-effect waves-light"> <i class="large material-icons">add</i> </a>
    </div>
@stop