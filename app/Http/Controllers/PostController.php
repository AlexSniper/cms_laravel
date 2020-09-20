<?php

namespace App\Http\Controllers;



use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
//Injecting class in order to have access to Post model


public function show(Post $post){
 //  $post= Post::findOrFail();

// $post = Post::findOrFail(1);

 return view('blog-post',['post'=>$post]);
       // return view('blog-post',['post'=>$post]);
    }
    public function imageable(){
        return $this->morphTo();
    }
    public function create(){
        return view('admin.post.create');
    }
public function store(){


$inputs= request()->validate(
    ['title'=>'required|min:8|max:255',
    'post_image'=>'file',
    'body'=>'required'
    ]);
    if(request('post_image')){
        $inputs['post_image']= request('post_image')->store('images');
        return 'Post was created';
    }
   // auth()->user()->posts()->create($inputs);
    return back();
//dd($request->input('post_image'));
//DD die dump function
  //  dd(request()->all());

}
public function index(){


    return view('admin.post.index');
}



}
