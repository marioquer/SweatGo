@extends('common.moment-layout')

@section('nav-item')
    <li><a href="../index" class="teal-text text-darken-4">首页</a></li>
    <li><a href="../health/exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li><a href="../competition/joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li class="active"><a href="all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="../message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a>
    </li>
    <li><a href="../user" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">account_circle</i></a>
    </li>
    <li><a href="../user/logout" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">exit_to_app</i></a>
    </li>
@stop

@section('info-nav')
    <ul class="left-list">
        <li><a href="all" class="waves-effect waves-teal teal-text text-darken-4 center">全部动态</a></li>
        <li class="active"><a href="friend-post" class="waves-effect waves-teal teal-text text-darken-4 center">好友动态</a></li>
        <li><a href="friend" class="waves-effect waves-teal teal-text text-darken-4 center">我的好友</a></li>
        <li><a href="published" class="waves-effect waves-teal teal-text text-darken-4 center">我的发布</a></li>
        <li><a href="comment" class="waves-effect waves-teal teal-text text-darken-4 center">收到评论</a></li>
        <li><a href="like" class="waves-effect waves-teal teal-text text-darken-4 center">收到的赞</a></li>
    </ul>
@stop

@section('middle-block')
    <div class="card white">
        <div id="momentList" class="card-content margin-left-10 "><span class="card-title teal-text text-darken-4">好友动态</span>
            <div onclick="window.location.href='friend-post'" class="refreshButton grey-text text-darken-3 material-icons right margin-top-5">autorenew</div>
            <div class="bold-divider"></div>

            <div id="momentItem" class="none">
                <div class="list-info">
                    <div class="chip inline left"><img src="{{URL::asset('/assets/image/mario.jpg')}}"
                                                       alt="Contact Person">
                        <span class="nickname"></span></div>
                    <div class="moment-time inline margin-left-10 time"> 10月20日 20:00:00</div>
                    <div class="moment-time inline margin-left-10 right"> 12 赞</div>
                    <div class="moment-time inline margin-left-10 right"> 10 评论</div>
                </div>
                <div class="margin-top-10 moment-intent blue-grey-text text-darken-2">

                </div>
            </div>
        </div>
    </div>
@stop
