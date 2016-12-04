<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('username',$request->username)->get()->first();
        if(isset($user)){
            if($user->password == $request->password){
                session()->put("user",$user);
                return "success";
            }
        }else{
            return "fail";
        }
    }

    public function logout(){
        session()->forget('user');
        return redirect()->to('/');
    }

    public function logup(Request $request){
        $user = User::where('username',$request->username)->get()->first();
        if(isset($user)){
            return "exist";
        }else{
            $user = new User();
            $user->nickname = $request->username;
            if($request->sex == 1){
                $user->sex = "男";
            }else{
                $user->sex = "女";
            }
            $user->avatar_url = "/assets/image/mario.jpg";
            $user->role_id = 1;
            $user->username = $request->username;
            $user->password = $request->password;
            $isSave = $user->save();
            if($isSave){
                session()->put("user",$user);
                session()->put("new_user","new_user");
                return "success";
            }else{
                return "fail";
            }
        }
    }

    public function getInfo(){
        return "a";
    }

    public function applyRole(){
        return "a";
    }

    public function agreeRole(){
        return "a";
    }

    public function rejectRole(){
        return "a";
    }
}
