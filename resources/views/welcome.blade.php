<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Welcome to SweatGo!!!</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ URL::asset('/assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">

        <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="{{ URL::asset('/assets/image/logo.svg') }}" alt=""></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">登录</a></li>
            <li><a href="#">注册</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="#">登录</a></li>
            <li><a href="#">注册</a></li>
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
                <a href="#" id="download-button"
                   class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{URL::asset('/assets/image/background1.jpg')}}" alt="Unsplashed background img 1"></div>
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
    <div class="parallax"><img src="{{URL::asset('/assets/image/background2.jpg')}}" alt="Unsplashed background img 2"></div>
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
    <div class="parallax"><img src="{{URL::asset('/assets/image/background3.jpg')}}" alt="Unsplashed background img 3"></div>
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{URL::asset('/assets/js/materialize.js')}}"></script>
<script src="{{URL::asset('/assets/js/init.js')}}"></script>

</body>
</html>
