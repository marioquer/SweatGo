<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//健康模块
Route::group(['prefix' => 'health'], function () {
    Route::group(['prefix' => 'exercise'], function () {
//        return view("exercise");
        Route::get('getToday', 'HealthController@getTodayExercise');
        Route::post('getAll', 'HealthController@getAllExercise');
        Route::post('addToday', 'HealthController@addTodayExercise');
        Route::post('addMany', 'HealthController@addManyExercise');
    });

    Route::group(['prefix' => 'body'], function () {
//        return view("body");
        Route::get('getRecent','HealthController@getRecentBody');
        Route::post('getAll', 'HealthController@getAllBody');
        Route::post('addToday', 'HealthController@addTodayBody');
        Route::post('addMany', 'HealthController@addManyBody');
    });

    Route::group(['prefix' => 'sleep'], function () {
//        return view("sleep");
        Route::get('getToday', 'HealthController@getTodaySleep');
        Route::post('getAll', 'HealthController@getTodaySleep');
        Route::post('addToday', 'HealthController@getTodaySleep');
        Route::post('addMany', 'HealthController@getTodaySleep');
    });
});


//竞赛模块
Route::group(['prefix' => 'competition'], function () {
    Route::post('join','CompetitionController@join');
    Route::post('publish','CompetitionController@publish');


    //我的竞赛
    Route::group(['prefix' => 'mine'], function () {
//        return view("exercise");
        Route::post('getJoinedIndividual', 'CompetitionController@getJoinedIndividual');
        Route::post('getJoinedGroup', 'CompetitionController@getJoinedGroup');
        Route::post('getMyIndividual', 'CompetitionController@getMyIndividual');
        Route::post('getMyGroup', 'CompetitionController@getMyGroup');
    });


    //个人赛
    Route::group(['prefix' => 'individual'], function () {
//        return view("body");
        Route::post('getAll', 'CompetitionController@getAllIndividual');
    });


    //小组赛
    Route::group(['prefix' => 'grouo'], function () {
//        return view("sleep");
        Route::post('getAll', 'CompetitionController@getAllGroup');
    });
});


//朋友圈模块
Route::group(['prefix' => 'moment'], function () {
    //        return view("moment");
    Route::post('getAll','MomentController@getAll');
    Route::post('getNew','MomentController@getNew');
    Route::post('getFriendPost','MomentController@getFriendPost');
    Route::post('getMine','MomentController@getMine');
    Route::post('comment','MomentController@comment');
    Route::post('like','MomentController@like');
    Route::post('receiveComment','MomentController@receiveComment');
    Route::post('receiveLike','MomentController@receiveLike');
});

//好友模块
Route::group(['prefix' => 'friend'], function () {
    //        return view("friend");
    Route::post('getMine','FriendController@getMine');
    Route::post('add','FriendController@add');
    Route::post('agree','FriendController@agree');
    Route::post('ignore','FriendController@ignore');
    Route::post('delete','FriendController@delete');
    Route::post('getRank','FriendController@getRank');
});

//用户模块
Route::group(['prefix' => 'user'], function () {
    //        return view("user");
    Route::post('getInfo','UserController@getInfo');
    Route::post('login','UserController@login');
    Route::post('logout','UserController@logout');
    Route::post('logup','UserController@logup');
    Route::post('applyRole','UserController@applyRole');
    Route::post('agreeRole','UserController@agreeRole');
    Route::post('rejectRole','UserController@rejectRole');
});
