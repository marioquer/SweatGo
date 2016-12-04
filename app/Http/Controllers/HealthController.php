<?php

namespace App\Http\Controllers;

use App\BodyData;
use App\ExerciseData;
use App\SleepData;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{

    //Exercise
    public function getTodayExercise(Request $request)
    {
        $id = $request->id;
        $exercise = new ExerciseData();
        $result = $exercise->where('user_id', $id)->where('updatedAt', date("Y-m-d"))->get()->first();
        if(!isset($result)){
            return "empty";
        }
        return json_encode($result);
    }

    public function getAllExercise(Request $request)
    {
        $id = $request->id;
        $exercise = new ExerciseData();
        $result = $exercise->where('user_id', $id)->get();
        if(!isset($result)){
            return "empty";
        }
        return json_encode($result);
    }

    public function addTodayExercise()
    {
        return "aaa";
    }

    public function addManyExercise(Request $request)
    {
        $datas = json_decode($request->datas);
        for ($i = 0; $i < count($datas, 0); $i++) {
            $exercise_data = new ExerciseData();
            $exercise_data->user_id = $datas[$i][0];
            $exercise_data->pace = $datas[$i][1];
            $exercise_data->mileage = $datas[$i][2];
            $exercise_data->time = $datas[$i][3];
            $exercise_data->heat = $datas[$i][4];
//            if (floor($i % 28) < 9) {
//                $exercise_data->createdAt = "2016-0" . (floor($i / 28)+1 + "") . "-0".(floor($i % 28)+1+"");
//                $exercise_data->updatedAt = "2016-0" . (floor($i / 28)+1 + "") . "-0".(floor($i % 28)+1+"");
//            } else {
//                $exercise_data->createdAt = "2016-0" . (floor($i / 28)+1 + "") . "-".(floor($i % 28)+1+"");
//                $exercise_data->updatedAt = "2016-0" . (floor($i / 28)+1 + "") . "-".(floor($i % 28)+1+"");
//            }
            $exercise_data->save();
        }
        return "success";
    }

    //Body
    public function getRecentBody(Request $request)
    {
        $id = $request->id;
        $body = new BodyData();
        $result = $body->where('user_id', $id)->orderBy('createdAt', 'desc')->get()->first();
        return json_encode($result);
    }

    public function getAllBody(Request $request)
    {
        $id = $request->id;
        $body = new BodyData();
        $result = $body->where('user_id', $id)->get();
        if(!isset($result)){
            return "empty";
        }
        return json_encode($result);
    }

    public function addTodayBody()
    {
        return "aaa";
    }

    public function addManyBody(Request $request)
    {
        $datas = json_decode($request->datas);
        for ($i = 0; $i < count($datas, 0); $i++) {
            $body_data = new BodyData();
            $body_data->user_id = $datas[$i][0];
            $body_data->height = $datas[$i][1];
            $body_data->weight = $datas[$i][2];
            $body_data->heart_rate = $datas[$i][3];
//            $body_data->createdAt = "200".(floor($i/11)+"")."-10-01 13:00:00";
//            $body_data->updatedAt = "200".(floor($i/11)+"")."-10-01 13:00:00";
            $body_data->save();
        }
        return "success";
    }

    //Sleep
    public function getTodaySleep(Request $request)
    {
        $datas = SleepData::where('user_id',$request->id)->where('updatedAt', date("Y-m-d"))->get()->first();
        if(!isset($datas)){
            return "empty";
        }
        return json_encode($datas);
    }

    public function getAllSleep(Request $request)
    {
        $datas = SleepData::where('user_id',$request->id)->get();
        if(!isset($datas)){
            return "empty";
        }
        return json_encode($datas);
    }

    public function addTodaySleep()
    {
        return "aaa";
    }

    public function addManySleep(Request $request)
    {
        $datas = json_decode($request->datas);
        for ($i = 0; $i < count($datas, 0); $i++) {
            $sleep_data = new SleepData();
            $sleep_data->user_id = $datas[$i][0];
            $sleep_data->startedAt = $datas[$i][1];
            $sleep_data->endedAt = $datas[$i][2];
            $sleep_data->duration = $datas[$i][3];
            $sleep_data->deep_sleep = $datas[$i][4];
            $sleep_data->wake_up_times = $datas[$i][5];
            if (floor($i % 28) < 9) {
                $sleep_data->createdAt = "2016-0" . (floor($i / 28)+1 + "") . "-0".(floor($i % 28)+1+"");
                $sleep_data->updatedAt = "2016-0" . (floor($i / 28)+1 + "") . "-0".(floor($i % 28)+1+"");
            } else {
                $sleep_data->createdAt = "2016-0" . (floor($i / 28)+1 + "") . "-".(floor($i % 28)+1+"");
                $sleep_data->updatedAt = "2016-0" . (floor($i / 28)+1 + "") . "-".(floor($i % 28)+1+"");
            }
            $sleep_data->save();
        }
        return "success";
    }


}
