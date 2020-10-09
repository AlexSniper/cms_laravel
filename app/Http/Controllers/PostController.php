<?php

namespace App\Http\Controllers;



use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreatePostRequest;
use Intervention\Image\ImageManagerStatic as Image;


class PostController extends Controller

{



    //
//Injecting class in order to have access to Post model


public function show(Post $post){
    return view('blog-post', ['post'=> $post]);
}





    public function create(){
//Showing user id
        $userId= Auth::user()->role_id;
        // dd($userId);

      return view('admin.post.create')->with('userId',$userId);
    }



public function store(CreatePostRequest $request){
    $input = $request->all();
    if($file =$request->file('path')){
        $name = $file->getClientOriginalName();
        $file->move('images', $name);
        $input['path']=$name;
    }

    Post::create($input);
    Session::flash('post-created-message',$input['title'].'  was created'); //Accessing sessions and showing message that post was deleted
    return redirect('/admin/posts');
}


public function index(User $user){
$posts=auth()->user()->posts()->paginate(2);
//$posts= Post::all();
  return view('admin.post.index',['posts'=>$posts]);
// return view('admin.post.index',['posts'=>$posts], ['user'=>$user]);
}

//Editing existing post in this method
public function edit(Post $post){
    $userId= Auth::user()->id;
  $this->authorize('view', $post);

        return view('admin.post.edit',['post'=>$post],['userId'=>$userId]);
    }






    //Updating existing post in this method
public function update(Post $post,Request $request){

    $inputs = request()->validate([
        'title'=> 'required|min:8|max:255',
        'path'=> 'file',
        'body'=> 'required'
    ]);
    if($request->hasfile('path')){
        $file= $request->file('path');
        $extension =$file->getClientOriginalExtension();
        $filename= md5(time()).'.'.$extension;
        $file->move(public_path().'\images',$filename);
        $post->path = $filename;
    }
      $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        //This line  of code not allowing not owner of the post to modify it Only owner could do it!!
        $this->authorize('update',$post);
        $post->save();

   Session::flash('post-updated-message',$inputs['title'].'  was updated'); //Accessing sessions and showing message that post was deleted
   //return redirect()->route('post.index');
   return redirect()->route('post.index');


}



public function destroy(Post $post){

// if(auth()->user()->id !==$post->user_id)
// {
    $this->authorize('delete', $post);
    $post->delete();
    Session::flash('message','Post '.$post->title.' was deleted'); //Accessing sessions and showing message that post was deleted

  return redirect()->route('post.index');
}




}


