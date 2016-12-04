<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Welcome to SweatGo!!!</title>

    <!-- CSS  -->
    <link href="{{ URL::asset('/assets/css/materialize.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="{{ URL::asset('/assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('/assets/css/common.css')}}" type="text/css" rel="stylesheet">
    <style type="text/css">

        .sprite {
            background-image: url("{{ URL::asset('/assets/image/sprite.png') }}");
            background-repeat: no-repeat;
            display: block;
        }

        .sprite-background1 {
            width: 1440px;
            height: 743px;
            background-position: -5px -5px;
        }

        .sprite-background2 {
            width: 1440px;
            height: 801px;
            background-position: -5px -758px;
        }

        .sprite-background3 {
            width: 1440px;
            height: 835px;
            background-position: -1455px -5px;
        }
    </style>
</head>

<?php
$user = Session::get('user');
?>

<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">

        <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img"
                                                                src="{{ URL::asset('/assets/image/logo.svg') }}" alt=""></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#login">登录</a></li>
            <li><a href="#logup">注册</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#login">登录</a></li>
            <li><a href="#logup">注册</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-3">SweatGo Sports</h1>
            <div class="row center">
                <h5 class="header col s12 light">A website helps you record your daily exercise</h5>
            </div>
            <div class="row center">
                <a href="#login" id="download-button"
                   class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax" ><img class="sprite sprite-background1" src="" alt="Unsplashed background img 1">
    </div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Improves motivation</h5>

                    <p class="center-align light">Records everything of your daily sports</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Finds friends</h5>

                    <p class="center-align light">Many people with same goals can be friends</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to manage</h5>

                    <p class="center-align light">Simple UX design helps you manage it easily</p>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A platform you can compete with others</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sprite sprite-background2" alt="Unsplashed background img 2">
    </div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>About Mario</h4>
                <p class="center-align light">A student in Junior year in NJU</p>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A stage where you can find friends with same interests</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="sprite sprite-background3" alt="Unsplashed background img 3">
    </div>
</div>

<!-- Login Modal -->
<div id="login" class="modal" style="width: 360px">
    <div class="modal-content">
        <h4 class="center-align">登 录</h4>
        <div class="row">
            <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">用户名</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">密码</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a onclick="login()" href="#!" class=" modal-action waves-effect waves-teal btn-flat teal-text">确认</a>
        <a onclick="trans(0)" href="#!" class=" modal-action waves-effect waves-orange btn-flat orange-text">注册</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-grey btn-flat">取消</a>
    </div>
</div>

<!-- Logup Modal -->
<div id="logup" class="modal" style="width: 360px">
    <div class="modal-content">
        <h4 class="center-align teal-text">注 册</h4>
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="不超过16位英文或8位中文" id="new_first_name" type="text" class="validate">
                <label for="new_first_name">用户名</label>
            </div>
            <div class="input-field col s12">
                <input placeholder="不超过20位字母或数字" id="new_password" type="password" class="validate">
                <label for="new_password">密码</label>
            </div>
            <div class="input-field col s12">
                <select id="sex">
                    <option value="" disabled selected>选择你的性别</option>
                    <option value="1">汉子</option>
                    <option value="0">妹子</option>
                </select>
                <label>性别</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a onclick="logup()" href="#!" class=" modal-action waves-effect waves-teal btn-flat teal-text">确认</a>
        <a onclick="trans(1)" href="#!" class=" modal-action waves-effect waves-orange btn-flat orange-text">登录</a>
        <a href="#!" class=" modal-action modal-close waves-effect waves-grey btn-flat">取消</a>
    </div>
</div>


<footer class="page-footer teal">
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
</footer>


<!--  Scripts-->
<script src="{{URL::asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('/assets/js/materialize.js')}}"></script>
<script src="{{URL::asset('/assets/js/init.js')}}"></script>
<script>

    function trans(flag) {
        if (flag == 1) {
            $('#logup').modal('close');
            $('#login').modal('open');
        } else {
            $('#login').modal('close');
            $('#logup').modal('open');
        }
    }

    function login() {
        var username = $("#first_name").val();
        var password = $("#password").val();

        $.ajax({
            method: "post",
            url: "user/login",
            async: false,
            data: {
                "username": username,
                "password": password
            },
            success: function (result) {
                if (result == "success") {
                    Materialize.toast('登录成功!', 1200);
                    window.location.href = "index";
                } else {
                    Materialize.toast('登录失败!', 1200);
                }
            },
            error: function () {
                window.location.href = "error";
            }
        });
    }

    function logup() {
        var username = $("#new_first_name").val();
        var password = $("#new_password").val();
        var sex = $("#sex").val();

        $.ajax({
            method: "post",
            url: "user/logup",
            async: false,
            data: {
                "username": username,
                "password": password,
                "sex": sex
            },
            success: function (result) {
                if (result == "success") {
                    window.location.href = "user";
                } else if (result == "exist") {
                    Materialize.toast('用户已存在!', 1200);
                } else {
                    Materialize.toast('注册失败!', 1200);
                }
            },
            error: function () {
                window.location.href = "error";
            }
        });
    }

</script>
</body>
</html>
