<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
    //

// public function index(){

//     $users= User::all();

//     return view('admin.users.index',['users'=>$users]);
// }

    public function show(User $user){
        return view('admin.users.profile',array('user' => Auth::user()));
    }


//It's Update method
    public function update(User $user,Request $request){
$inputs =request()->validate([
    'username'=>['required','string','max:255', 'alpha_dash'],
    'name'=> ['required', 'string', 'max:255'],
    'email'=> ['required', 'email', 'max:255'],
    'avatar'=> ['file'],
   // 'password'=>['min:6','max:255','confirmed']
]);

if($request->hasFile('avatar')){
    $avatar = $request->file('avatar');
    $filename = time() . '.' . $avatar->getClientOriginalExtension();
    Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    $user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
}



        $user->username = $inputs['username'];
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
      // $user->avatar = $inputs['avatar'];

        $this->authorize('update',$user);
        $user->save();
        return back();
     //   return view('admin.users.profile',['user'=>$user]);
    }


    public function destroy(User $user){

        // if(auth()->user()->id !==$post->user_id)
        // {
            $this->authorize('delete', $user);
            $user->delete();
            session()->flash('user-deleted','user '.$user->name.' has been deleted');

          return redirect()->route('user.index');
        }
}
