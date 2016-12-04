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
    $user = session()->get('user');
    if(isset($user)){
        return view('index');
    }else{
        return view('welcome');
    }
});

Route::get('error', function () {
    return view('errors.503');
});

Route::get('test', function () {
    return view('test');
});

Route::get('index', function () {
    $user = session()->get('user');
    if(isset($user)){
        return view('index');
    }else{
        return redirect()->to('/');
    }
});

//健康模块
Route::group(['prefix' => 'health'], function () {
    //运动数据
    Route::group(['prefix' => 'exercise'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view('health.exercise');
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getToday', 'HealthController@getTodayExercise');
        Route::post('getAll', 'HealthController@getAllExercise');
        Route::post('addToday', 'HealthController@addTodayExercise');
        Route::post('addMany', 'HealthController@addManyExercise');
    });

    //身体数据
    Route::group(['prefix' => 'body'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view('health.body');
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getRecent', 'HealthController@getRecentBody');
        Route::post('getAll', 'HealthController@getAllBody');
        Route::post('addToday', 'HealthController@addTodayBody');
        Route::post('addMany', 'HealthController@addManyBody');
    });

    //睡眠数据
    Route::group(['prefix' => 'sleep'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view('health.sleep');
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getToday', 'HealthController@getTodaySleep');
        Route::post('getAll', 'HealthController@getAllSleep');
        Route::post('addToday', 'HealthController@addTodaySleep');
        Route::post('addMany', 'HealthController@addManySleep');
    });
});


//竞赛模块
Route::group(['prefix' => 'competition'], function () {
    Route::post('join', 'CompetitionController@join');
    Route::post('publish', 'CompetitionController@publish');

    //我的竞赛
    Route::group(['prefix' => 'joined'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view("competition.joined");
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getMine', 'CompetitionController@getMine');
        Route::post('getJoinedIndividual', 'CompetitionController@getJoinedIndividual');
        Route::post('getJoinedGroup', 'CompetitionController@getJoinedGroup');
        Route::post('getMyIndividual', 'CompetitionController@getMyIndividual');
        Route::post('getMyGroup', 'CompetitionController@getMyGroup');
    });


    //个人赛
    Route::group(['prefix' => 'individual'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view("competition.individual");
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getIndividual', 'CompetitionController@getIndividual');
    });


    //小组赛
    Route::group(['prefix' => 'group'], function () {
        Route::get('', function () {
            $user = session()->get('user');
            if(isset($user)){
                return view("competition.group");
            }else{
                return redirect()->to('/');
            }
        });
        Route::post('getGroup', 'CompetitionController@getGroup');
    });
});


//朋友圈模块
Route::group(['prefix' => 'moment'], function () {
    //所有动态
    Route::get('all', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view("moment.all");
        }else{
            return redirect()->to('/');
        }
    });

    //我的评论
    Route::get('comment', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view('moment.comment');
        }else{
            return redirect()->to('/');
        }
    });

    //我的好友
    Route::get('friend', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view('moment.friend');
        }else{
            return redirect()->to('/');
        }
    });

    //好友动态
    Route::get('friend-post', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view('moment.friend-post');
        }else{
            return redirect()->to('/');
        }
    });

    //收到的赞
    Route::get('like', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view('moment.like');
        }else{
            return redirect()->to('/');
        }
    });

    //我的发布
    Route::get('published', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view('moment.published');
        }else{
            return redirect()->to('/');
        }
    });

    Route::post('publish', 'MomentController@publish');
    Route::post('getAll', 'MomentController@getAll');
    Route::post('getNew', 'MomentController@getNew');
    Route::post('getFriendPost', 'MomentController@getFriendPost');
    Route::post('getMine', 'MomentController@getMine');
    Route::post('comment', 'MomentController@comment');
    Route::post('like', 'MomentController@like');
    Route::post('receiveComment', 'MomentController@receiveComment');
    Route::post('receiveLike', 'MomentController@receiveLike');
});

//好友模块
Route::group(['prefix' => 'friend'], function () {
    Route::post('getMine', 'FriendController@getMine');
    Route::post('add', 'FriendController@add');
    Route::post('agree', 'FriendController@agree');
    Route::post('ignore', 'FriendController@ignore');
    Route::post('delete', 'FriendController@delete');
    Route::post('getRank', 'FriendController@getRank');
});

//用户模块
Route::group(['prefix' => 'user'], function () {
    Route::get('', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view("personal.person");
        }else{
            return redirect()->to('/');
        }
    });
    Route::post('getInfo', 'UserController@getInfo');
    Route::post('login', 'UserController@login');
    Route::get('logout', 'UserController@logout');
    Route::post('logup', 'UserController@logup');
    Route::post('applyRole', 'UserController@applyRole');
    Route::post('agreeRole', 'UserController@agreeRole');
    Route::post('rejectRole', 'UserController@rejectRole');
});

//消息模块
Route::group(['prefix' => 'message'], function () {
    Route::get('', function () {
        $user = session()->get('user');
        if(isset($user)){
            return view("personal.message");
        }else{
            return redirect()->to('/');
        }
    });
});



