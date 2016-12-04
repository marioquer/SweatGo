@extends('common.setting')

@section('nav-item')
    <li><a href="index" class="white-text">首页</a></li>
    <li><a href="health/exercise" class="waves-effect waves-light white-text">健康</a></li>
    <li><a href="competition/joined" class="waves-effect waves-light white-text">竞赛</a></li>
    <li><a href="moment/all" class="waves-effect waves-light white-text">朋友圈</a></li>
    <li><a href="message" class="waves-effect waves-light teal-text white-text"><i
                    class="material-icons">notifications</i></a></li>
    <li class="active"><a href="user" class="waves-effect waves-light teal-text white-text"><i class="material-icons">account_circle</i></a>
    </li>
    <li><a href="user/logout" class="waves-effect waves-light teal-text white-text"><i class="material-icons">exit_to_app</i></a>
    </li>
@stop

@section('middle-block')
    <div class="row">
        <div class="col l2 m1"></div>
        <div class="col l8 m10 s12 margin-top-40">
            <div class="card white">
                <div class="card-content margin-left-10 min-height-500"><span
                            class="card-title teal-text text-darken-4">个人中心</span>

                    <ul class="collection with-header" style="margin-top: 20px;">
                        <li class="collection-header"><h4>&nbsp;{{Session::get('user')->nickname}}</h4></li>
                        <li class="collection-item">所在地: &nbsp;&nbsp;{{Session::get('user')->province}}
                            ·{{Session::get('user')->city}}</li>
                        <li class="collection-item">学校/单位: &nbsp;&nbsp;{{Session::get('user')->office}}</li>
                        <li class="collection-item">生日: &nbsp;&nbsp;{{Session::get('user')->birthday}}</li>
                        <li class="collection-item">个人介绍: &nbsp;&nbsp;{{Session::get('user')->introduction}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
            <a href="#editInfo" class="btn-floating btn-large yellow darken-1 waves-effect waves-light"> <i
                        class="large material-icons">mode_edit</i>
            </a>
        </div>
    </div>


    <!-- New Modal -->
    <div id="editInfo" class="modal">
        <div class="modal-content">
            <h4 class="center-align">完善信息</h4>
            <div class="row" style="margin-top: 10px;">
                <div class="input-field col s6">
                    <input id="nickname" type="text" class="validate" value="{{Session::get('user')->nickname}}">
                    <label>昵称</label>
                </div>
                <div class="input-field col s6">
                    <select id="sex" value="{{Session::get('user')->sex}}">
                        <option value="" disabled selected>选择性别</option>
                        <option value="1">汉子</option>
                        <option value="0">妹子</option>
                    </select>
                    <label>性别</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select id="province" value="{{Session::get('user')->province}}">
                        <option value="" disabled selected>选择所在省份</option>
                        <option value="江苏">江苏</option>
                        <option value="广东">广东</option>
                    </select>
                    <label>省</label>
                </div>
                <div class="input-field col s6">
                    <select id="city" value="{{Session::get('user')->city}}">
                        <option value="" disabled selected>选择所在市</option>
                        <option value="南京">南京</option>
                        <option value="苏州">苏州</option>
                        <option value="徐州">徐州</option>
                    </select>
                    <label>市</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="office" type="text" class="validate" value="{{Session::get('user')->office}}">
                    <label>学校/单位</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="生日" type="date" class="datepicker">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea value="{{Session::get('user')->introduction}}" id="introduction"
                              class="materialize-textarea"></textarea>
                    <label for="introduction">个人简介</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a onclick="editPerson({{Session::get('user')->id}})" href="#!"
               class=" modal-action waves-effect waves-teal btn-flat teal-text">确定</a>
            <a href="#!" class=" modal-action modal-close waves-effect waves-grey btn-flat">取消</a>
        </div>
    </div>
@stop

@section('extra_js')
    <script>
        @if(Session::has('new_user'))
        Materialize.toast('请尽快补充您的个人资料享受更多的服务噢~', 8000);
        @endif

        //未实现
        function editPerson(id) {

        }
    </script>
@stop
