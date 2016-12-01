<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @section('head')
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Sweat Go!!!</title>
        <!-- CSS  -->
        <link href="{{URL::asset('/assets/css/materialize.css')}}" type="text/css" rel="stylesheet"
              media="screen,projection">
        <link href="{{URL::asset('/assets/css/index.css')}}" type="text/css" rel="stylesheet">
        <link href="{{URL::asset('/assets/css/common.css')}}" type="text/css" rel="stylesheet">
    @show
</head>

<body class="min-height-700">
@section('background-color')
    <div class="back-color" style="background-color: #00897b;"></div>
@show
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo"><img class="responsive-img" src="{{URL::asset('/assets/image/logo.svg')}}" alt=""></a>
        <ul class="right hide-on-med-and-down">
            @section('nav-item')
            @show
        </ul>
        <!--begin sidenav-->
        <ul id="nav-mobile" class="side-nav">
            <li>
                <div class="userView"><img class="background" src="{{URL::asset('/assets/image/background.jpg')}}">
                    <a href="#!"><img class="circle" src="{{URL::asset('/assets/image/mario.jpg')}}"></a> <a
                            href="#!"><span
                                class="white-text name">Marioquer</span></a> <span class="white-text email"></span>
                </div>
            </li>
            <ul>
                <li><a href="/sweatgo/public/index" class="waves-effect waves-teal teal-text text-darken-4 ">首 页
                        &nbsp;&nbsp;Home</a></li>
            </ul>
            <ul>
                <li><a href="/sweatgo/public/health/exercise" class="waves-effect waves-teal teal-text text-darken-4 ">健
                        康 &nbsp;&nbsp;Health</a>
                </li>
                <li><a href="/sweatgo/public/health/exercise" class="hin-text grey-text">&nbsp;&nbsp;运动统计 &nbsp;&nbsp;Exercise</a>
                </li>
                <li><a href="/sweatgo/public/health/body" class="thin-text grey-text">&nbsp;&nbsp;身体指标
                        &nbsp;&nbsp;Body</a></li>
                <li><a href="/sweatgo/public/health/sleep" class="thin-text grey-text">&nbsp;&nbsp;睡眠状况 &nbsp;&nbsp;Sleep</a>
                </li>
            </ul>
            <ul>
                <li><a href="/sweatgo/public/competition/joined"
                       class="waves-effect waves-teal teal-text text-darken-4 ">竞 赛 &nbsp;&nbsp;Competitions</a>
                </li>
                <li><a href="/sweatgo/public/competition/joined" class="thin-text grey-text">&nbsp;&nbsp;我的竞赛
                        &nbsp;&nbsp;Joined</a></li>
                <li><a href="/sweatgo/public/competition/individual" class="thin-text grey-text">&nbsp;&nbsp;个人赛 &nbsp;&nbsp;Individual</a>
                </li>
                <li><a href="/sweatgo/public/competition/group" class="thin-text grey-text">&nbsp;&nbsp;小组赛
                        &nbsp;&nbsp;Groups</a></li>
            </ul>
            <ul>
                <li><a href="/sweatgo/public/moment/all" class="waves-effect waves-teal teal-text text-darken-4 ">朋友圈
                        &nbsp;&nbsp;Moments</a>
                </li>
                <li><a href="/sweatgo/public/moment/all" class="thin-text grey-text">&nbsp;&nbsp;全部动态
                        &nbsp;&nbsp;All</a></li>
                <li><a href="/sweatgo/public/moment/friend-post" class="thin-text grey-text">&nbsp;&nbsp;好友动态 &nbsp;&nbsp;Friends
                        post</a></li>
                <li><a href="/sweatgo/public/moment/friend" class="thin-text grey-text">&nbsp;&nbsp;我的好友 &nbsp;&nbsp;Friends</a>
                </li>
                <li><a href="/sweatgo/public/moment/published" class="thin-text grey-text">&nbsp;&nbsp;我的发布
                        &nbsp;&nbsp;Published</a></li>
                <li><a href="/sweatgo/public/moment/comment" class="thin-text grey-text">&nbsp;&nbsp;收到评论
                        &nbsp;&nbsp;Comments</a></li>
                <li><a href="/sweatgo/public/moment/like" class="thin-text grey-text">&nbsp;&nbsp;收到的赞
                        &nbsp;&nbsp;Likes</a></li>
            </ul>
            <ul>
                <li><a href="/sweatgo/public/lesson" class="waves-effect waves-teal teal-text text-darken-4 ">教程 &nbsp;&nbsp;Lessons</a>
                </li>
            </ul>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse active teal-text text-darken-4"><i
                    class="material-icons">menu</i></a></div>
    <!--end sidenav-->
</nav>
<!--    <div class="background" style="height:30px;background-color:#333;"> </div>-->
<div class="container margin-top-10">
    <div class="row">
        <div class="col l2-5 m4 s12" id="userInfo">
            <div class="card white padding-bottom-20">
                <div class="card-content center">
                    <div class="image-container"><img src="{{URL::asset('/assets/image/mario.jpg')}}" alt="" class="responsive-img circle">
                    </div>
                    <div class="my-userName teal-text text-darken-4">Marioquer <img style="margin-left:4px;"
                                                                                    src="{{URL::asset('/assets/icons/boy.svg')}}" alt=""><span>18</span>
                    </div>
                    <div class="my-userInfo">江苏·南京 南京大学</div>
                    <div class="divider"></div>
                </div>
                @section('info-nav')
                @show
            </div>
        </div>
        <div class="col l5-0 m5 s12">
            @section('middle-block')
            @show
        </div>
        <div class="col l2-5 m3 s12">
            @section('right-block')
            @show
        </div>
        <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large yellow darken-1 waves-effect waves-light"> <i class="large material-icons">mode_edit</i>
            </a>
        </div>
    </div>
</div>
<footer class="page-footer teal">
    @section('footer')
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">SweatGo Info</h5>
                    <p class="grey-text text-lighten-4 thin-text">SweatGo is a platform helping us analyze our daily
                        statistics of body, have new friends with the same interests and also complete with our friends.
                        Aiming to keep everyone healthy and dynamic, we are on the way.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container"> Made and Designed by <a class="yellow-text text-darken-2"
                                                            href="https://github.com/marioquer"><em>Marioquer</em></a>
            </div>
        </div>
    @show
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>
</body>

</html>