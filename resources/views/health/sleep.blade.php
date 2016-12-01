@extends('common.layout')

@section('nav-item')
    <li><a href="../index" class="teal-text text-darken-4">首页</a></li>
    <li class="active"><a href="exercise" class="waves-effect waves-light teal-text text-darken-4">健康</a></li>
    <li><a href="../competition/joined" class="waves-effect waves-light teal-text text-darken-4">竞赛</a></li>
    <li><a href="../moment/all" class="waves-effect waves-light teal-text text-darken-4">朋友圈</a></li>
    <li><a href="../message" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">notifications</i></a></li>
    <li><a href="../user" class="waves-effect waves-light teal-text text-darken-3"><i class="material-icons">person_pin</i></a></li>
@stop

@section('background-color')
    <div class="back-color" style="background-color: #1976d2;"></div>
@stop

@section('info-nav')
    <ul class="left-list">
        <li><a href="exercise" class="waves-effect waves-teal teal-text text-darken-4 center">运动统计</a></li>
        <li><a href="body" class="waves-effect waves-teal teal-text text-darken-4 center">身体指标</a></li>
        <li class="active"><a href="sleep" class="waves-effect waves-teal teal-text text-darken-4 center">睡眠状况</a></li>
    </ul>
@stop

@section('right-block')
    <div class="card white">
        <div class="card-content margin-left-10"> <span class="card-title teal-text text-darken-4">昨日睡眠情况</span>
            <div class="bold-divider"></div>
            <div id="sleepChart" style="height:100px;width:100%;background:#f0f0f0;"></div>
        </div>
    </div>
    <div class="card white">
        <div class="card-content margin-left-10"> <span class="card-title teal-text text-darken-4">睡眠曲线</span>
            <div class="bold-divider"></div>
            <div id="sleepChart" style="height:300px;width:100%;background:#f0f0f0;"></div>
        </div>
    </div>
@stop