@extends('common.setting')

@section('nav-item')
    <li><a href="index" class="white-text">首页</a></li>
    <li><a href="health/exercise" class="waves-effect waves-light white-text">健康</a></li>
    <li><a href="competition/joined" class="waves-effect waves-light white-text">竞赛</a></li>
    <li><a href="moment/all" class="waves-effect waves-light white-text">朋友圈</a></li>
    <li><a href="message" class="waves-effect waves-light teal-text white-text"><i class="material-icons">notifications</i></a></li>
    <li class="active"><a href="user" class="waves-effect waves-light white-text"><i class="material-icons">person_pin</i></a></li>
@stop

@section('middle-block')
    <div class="row">
        <div class="col l2 m1"></div>
        <div class="col l8 m10 s12 margin-top-40">
            <div class="card white">
                <div class="card-content margin-left-10 min-height-700"><span
                            class="card-title teal-text text-darken-4">个人中心</span>
                    <div class="bold-divider"></div>
                </div>
            </div>
        </div>
        <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large yellow darken-1 waves-effect waves-light"> <i class="large material-icons">mode_edit</i>
            </a>
        </div>
    </div>
@stop