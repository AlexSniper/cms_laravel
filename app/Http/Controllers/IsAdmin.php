<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class IsAdmin extends Controller
{
    //
    public function __construct(){

    $this->middleware('IsAdmin');
     }

public function index(){
    $users= User::all();



   return view('admin.users.index',['users'=>$users]);


}
}
