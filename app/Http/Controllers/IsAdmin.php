<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class IsAdmin extends Controller
{
    //
    public function __construct(){

 //   $this->middleware('role');
     }

public function index(){
    $users= User::all();



   return view('admin.users.index',['users'=>$users]);


}
}
