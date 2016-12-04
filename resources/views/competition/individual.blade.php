@extends('common.layout')

@section('nav-item')
    <li><a href="../index" class="teal-text text-darken-4">首页</a></li>
    <li><a href="../health/exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li class="active"><a href="joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li><a href="../moment/all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="../message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a>
    </li>
    <li><a href="../user" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">account_circle</i></a>
    </li>
    <li><a href="../user/logout" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">exit_to_app</i></a>
    </li>
@stop

@section('background-color')
    <div class="back-color" style="background-color: #e57373;"></div>
@stop

@section('info-nav')
    <ul class="left-list">
        <li><a href="joined" class="waves-effect waves-teal teal-text text-darken-4 center">我的竞赛</a></li>
        <li class="active"><a href="individual" class="waves-effect waves-teal teal-text text-darken-4 center">个人赛</a>
        </li>
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
                    <div id="comItem" class="row none">
                        <span class="none comId"></span>
                        <div class="col m5 s6 list-info">
                            <div class="game-name blue-grey-text text-darken-3">WEB的超级竞赛</div>
                            <div class="game-time">10月20号结束</div>
                        </div>
                        <div class="col m3 s6 list-info" style="margin-top: 25px;">
                            <div class="chip inline"><img src="{{URL::asset('/assets/image/mario.jpg')}}"
                                                          alt="Contact Person"> <span class="comClass">小组赛</span></div>
                        </div>
                        <div class="col m2 s6 list-info">
                            <div class="game-class"><img src="{{URL::asset('/assets/icons/cup.svg')}}" alt="">
                                <div class="game-class-name">热量赛</div>
                            </div>
                        </div>
                        <div class="col m2 s6 list-info" style="margin-top: 23px;">
                            <a onclick="join(this,{{Session::get('user')->id}})"
                               class="action-button waves-effect waves-teal btn-flat teal-text">查看</a>
                        </div>
                    </div>
                </div>
                <div id="mine" class="col s12">
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a href="#newCom" class="btn-floating btn-large red lighten-2 waves-effect waves-light"> <i
                    class="large material-icons">add</i> </a>
    </div>

    <!-- New Modal -->
    <div id="newCom" class="modal">
        <div class="modal-content">
            <h4 class="center-align">发起比赛</h4>
            <div class="row">
                <div class="input-field col s12">
                    <input id="comName" type="text" class="validate">
                    <label>活动名称</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select id="comClass">
                        <option value="" disabled selected>选择竞赛类别</option>
                        <option value="INDIVIDUAL">个人赛</option>
                        <option value="GROUP">小组赛</option>
                    </select>
                    <label>类别</label>
                </div>
                <div class="input-field col s6">
                    <select id="comType">
                        <option value="" disabled selected>选择竞赛项目</option>
                        <option value="PACE">步数赛</option>
                        <option value="TIME">时间赛</option>
                        <option value="MILEAGE">里程赛</option>
                        <option value="HEAT">热量赛</option>
                    </select>
                    <label>项目</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="截止时间" type="date" class="datepicker">
                </div>
                <div class="input-field col s6">
                    <input id="target" type="text" class="validate">
                    <label>目标值</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="introduction" class="materialize-textarea"></textarea>
                    <label for="introduction">比赛简介</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a onclick="newCompetition({{Session::get('user')->id}})" href="#!"
               class=" modal-action waves-effect waves-teal btn-flat teal-text">新建</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-grey btn-flat">取消</a>
        </div>
    </div>
@stop

@section('extra_js')
    <script src="{{URL::asset('/assets/js/competition.js')}}"></script>
    <script>
        var uid = {{Session::get('user')->id}}, allCom, mineCom, attend;

        $.ajax({
            type: "post",
            async: false, //同步执行
            url: 'individual/getIndividual',
            data: {"id": uid},
            dataType: "json",
            success: function (result) {
                var uId = new Array();
                allCom = result.all;
                mineCom = result.mine;
                attend = result.attend;
                for (var i = 0; i < mineCom.length; i++) {
                    var div = document.createElement("div");
                    div.className = "row";
                    div.innerHTML = document.getElementById("comItem").innerHTML;
                    div.getElementsByClassName("game-name")[0].innerHTML = mineCom[i].title;
                    div.getElementsByClassName("game-time")[0].innerHTML = mineCom[i].end_time + " 结束";
                    div.getElementsByClassName("comId")[0].innerHTML = mineCom[i].id;
                    if (mineCom[i].class == "INDIVIDUAL") {
                        div.getElementsByClassName("comClass")[0].innerHTML = " 个人赛";
                    } else if (mineCom[i].class == "GROUP") {
                        div.getElementsByClassName("comClass")[0].innerHTML = " 小组赛";
                    }

                    if (mineCom[i].type == "PACE") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "步数赛";
                    } else if (mineCom[i].type == "MILEAGE") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "里程赛";
                    } else if (mineCom[i].type == "HEAT") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "热量赛";
                    } else if (mineCom[i].type == "TIME") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "时间赛";
                    }
                    document.getElementById("mine").appendChild(div);
                }

                for (var i = 0; i < allCom.length; i++) {
                    var div = document.createElement("div");
                    div.className = "row";
                    div.innerHTML = document.getElementById("comItem").innerHTML;
                    div.getElementsByClassName("game-name")[0].innerHTML = allCom[i].title;
                    div.getElementsByClassName("game-time")[0].innerHTML = allCom[i].end_time + " 结束";
                    div.getElementsByClassName("comId")[0].innerHTML = allCom[i].id;
                    if (allCom[i].class == "INDIVIDUAL") {
                        div.getElementsByClassName("comClass")[0].innerHTML = " 个人赛";
                    } else if (allCom[i].class == "GROUP") {
                        div.getElementsByClassName("comClass")[0].innerHTML = " 小组赛";
                    }

                    if (allCom[i].type == "PACE") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "步数赛";
                    } else if (allCom[i].type == "MILEAGE") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "里程赛";
                    } else if (allCom[i].type == "HEAT") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "热量赛";
                    } else if (allCom[i].type == "TIME") {
                        div.getElementsByClassName("game-class-name")[0].innerHTML = "时间赛";
                    }
                    if (!isAttend(allCom[i].id, attend)) {
                        div.getElementsByClassName("action-button")[0].innerHTML = "加入";
                    } else {
                        div.getElementsByClassName("action-button")[0].setAttribute("onclick","detail()");
                    }
                    document.getElementById("all").appendChild(div);
                }
            },
            error: function () {
                Materialize.toast('服务器出问题啦,获取数据失败!', 1200);
            }
        });

        function isAttend(id, attend) {
            var isIn = false;
            for (var i = 0; i < attend.length; i++) {
                if (id == attend[i].competition_id) {
                    isIn = true;
                    break;
                }
            }
            return isIn;
        }

    </script>
@stop