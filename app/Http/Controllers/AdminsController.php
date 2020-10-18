<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{// Applying middleware
    public function __construct(){

       $this->middleware('role');
        }
        public function index(){
            return view('admin.index',array('user' => Auth::user()));
        }

    //


}
