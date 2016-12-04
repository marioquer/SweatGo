<?php

namespace App\Http\Controllers;

use App\Moment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MomentController extends Controller
{
    public function getAll()
    {
        $result = DB::table('moment')
            ->join('user', 'user.id', '=', 'moment.author_id')
            ->orderBy('createdAt','desc')
            ->take(10)
            ->get();
        return $result;
    }

    public function getNew()
    {
        return "aaa";
    }

    public function getFriendPost()
    {
        return "aaa";
    }

    public function getMine(Request $request)
    {
        $uid = $request->uid;
        $result = DB::table('moment')
            ->join('user', 'user.id', '=', 'moment.author_id')
            ->where('author_id', $uid)
            ->orderBy('createdAt','desc')
            ->take(10)
            ->get();
        return $result;
    }

    public function comment()
    {
        return "aaa";
    }

    public function like()
    {
        return "aaa";
    }

    public function receiveComment()
    {
        return "aaa";
    }

    public function receiveLike()
    {
        return "aaa";
    }

    public function publish(Request $request)
    {
        $text = $request->text;
        $uid = $request->uid;
        $moment = new Moment();
        $moment->author_id = $uid;
        $moment->content = $text;
        $result = $moment->save();

        if ($result) {
            return "success";
        } else {
            return "fail";
        }

    }
}
