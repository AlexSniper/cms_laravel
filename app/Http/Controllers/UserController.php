<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $user){
        return view('admin.users.profile',['user'=>$user]);
    }
//It's avatar method
    public function update(User $user){

        if(request('avatar')){
            dd(request('avatar'));
        }
     //   return view('admin.users.profile',['user'=>$user]);
    }
}
