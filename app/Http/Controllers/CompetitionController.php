<?php

namespace App\Http\Controllers;

use App\CompetitionInfo;
use App\CompetitionProcess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompetitionController extends Controller
{
    public function join(Request $request)
    {
        $comId = $request->comId;
        $uid = $request->uid;
        $comProcess = new CompetitionProcess();
        $comProcess->competition_id = $comId;
        $comProcess->user_id = $uid;
        $comProcess->data = 0;
        $comProcess->percent = 0;
        $result = $comProcess->save();

        if ($result) {
            return "success";
        } else {
            return "fail";
        }
    }

    public function publish(Request $request)
    {
        $datas = json_decode($request->datas);
        $compInfo = new CompetitionInfo();
        $compInfo->author_id = $datas[0];
        $compInfo->title = $datas[1];
        $compInfo->introduction = $datas[2];
        $compInfo->end_time = $datas[3];
        $compInfo->class = $datas[4];
        $compInfo->type = $datas[5];
        $compInfo->target = $datas[6];
        $result = $compInfo->save();

        $comId = CompetitionInfo::where('author_id', $datas[0])->orderBy('id', 'desc')->select('id')->get()->first();
        $comProcess = new CompetitionProcess();
        $comProcess->competition_id = $comId->id;
        $comProcess->user_id = $datas[0];
        $comProcess->data = 0;
        $comProcess->percent = 0;
        $result = $result & $comProcess->save();

        if ($result) {
            return "success";
        } else {
            return "fail";
        }
    }

    public function getMine(Request $request)
    {
        $comInfo = new CompetitionInfo();

        $published = $comInfo->where('author_id', $request->id)->take(5)->get();
        $joined = DB::table('competition_info')
            ->join('competition_process', 'competition_info.id', '=', 'competition_process.competition_id')
            ->where('competition_process.user_id', $request->id)
            ->take(5)
            ->get();

        $result = [
            "published" => $published,
            "joined" => $joined
        ];

        return json_encode($result);
    }

    public function getJoinedIndividual()
    {
        return "aaa";
    }

    public function getJoinedGroup()
    {
        return "aaa";
    }

    public function getMyIndividual()
    {
        return "aaa";
    }

    public function getMyGroup()
    {
        return "aaa";
    }

    public function getIndividual(Request $request)
    {
        $comPces = new CompetitionProcess();
        $comInfo = new CompetitionInfo();

        $all = $comInfo->where('class','INDIVIDUAL')->orderBy('end_time', 'asc')->take(10)->get();
        $mine = DB::table('competition_info')
            ->join('competition_process', 'competition_info.id', '=', 'competition_process.competition_id')
            ->where('class','INDIVIDUAL')
            ->where('competition_process.user_id', $request->id)
            ->take(5)
            ->get();
        $attend = $comPces->where('user_id',$request->id)->select('competition_id')->get();

        $result = [
            "all" => $all,
            "mine" => $mine,
            "attend" => $attend
        ];

        return json_encode($result);
    }

    public function getGroup(Request $request)
    {
        $comPces = new CompetitionProcess();
        $comInfo = new CompetitionInfo();

        $all = $comInfo->where('class','GROUP')->orderBy('end_time', 'asc')->take(10)->get();
        $mine = DB::table('competition_info')
            ->join('competition_process', 'competition_info.id', '=', 'competition_process.competition_id')
            ->where('class','GROUP')
            ->where('competition_process.user_id', $request->id)
            ->take(5)
            ->get();
        $attend = $comPces->where('user_id',$request->id)->select('competition_id')->get();

        $result = [
            "all" => $all,
            "mine" => $mine,
            "attend" => $attend
        ];

        return json_encode($result);
    }

}
