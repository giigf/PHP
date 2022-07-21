<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserInfo;

class FirstController extends Controller
{
    public function create(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
    }

    public function list(){
        $user = User::get();

        return $user;
    }

    public function item($id){
        $user = User::where('id', $id)->with('userInfo')->first();

        return $user;
    }


    public function createUserInfo(Request $request)
    {
        $user_info = new UserInfo();
        $user_info->id = $request->id;
        $user_info->fullname = $request->fullname;
        $user_info->info = $request->info;
        $user_info->user_id = $request->user_id;
        $user_info->save();
    }

    public function listUserInfo(){
        $user_info = UserInfo::get();

        return $user_info;
    }

    public function itemUserInfo($id){
        $user_info = UserInfo::where('id', $id)->first();

        return $user_info;
    }

    public function deleteUserInfo($id){
        $user_info = UserInfo::find($id);
        $user_info->delete();
        return $user_info;
    }
    public function UpdateUserInfo($id, Request $request){
        $user_info = UserInfo::find($id);
        $user_info->id = $request->id;
        $user_info->fullname = $request->fullname;
        $user_info->info = $request->info;
        $user_info->user_id = $request->user_id;
        $user_info->save();

     
     
        return $user_info;
    }

    public function lesson(Request $request){
      //  $user = User::where('id', 1)->first();
      //  $user->email = 'test@gmail.com';
      //  $user->save();

       // $new_user = User::class;
       // $new_user->email = 'asad@gmail.com'
       // $new_user->save();

       // $user_with_info = User::with('userInfo')->get();
        



       // return "Hello browser";
    }
}
    