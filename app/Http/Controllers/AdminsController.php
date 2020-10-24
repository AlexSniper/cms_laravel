<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{// Applying middleware

    public function __construct(){

        $this->middleware('IsAdmin');
         }

    public function index(){
        $users= User::all();



      //  return view('admin.users.index',['users'=>$users]);
     return view('admin.index',['users'=>$users]);

    }

}
