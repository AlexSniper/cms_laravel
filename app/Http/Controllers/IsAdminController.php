<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsAdminController extends Controller
{
    //

    public function __construct(){

        $this->middleware('isAdmin');
         }
         // public function index(){
         //     return view('admin.index',array('user' => Auth::user()));
         // }

     //

 public function index(){

    $users= User::all();

     return view('admin.users.index',['users'=>$users]);

 }



}
