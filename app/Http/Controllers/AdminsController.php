<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{// Applying middleware
    public function __construct(){

       //$this->middleware('isAdmin');
        }
        // public function index(){
        //     return view('admin.index',array('user' => Auth::user()));
        // }

    //

public function index(){

    $users= User::all();

    return view('admin.users.index',['users'=>$users]);
}

    public function show(User $user){
        return view('admin.users.profile',array('user' => Auth::user()));
    }


}
