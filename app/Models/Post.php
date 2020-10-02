<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

protected $fillable = ['title', 'path','body','user_id'];

    public function user(){
//Accessing user model
        return $this->belongsTo(User::class);
    }




 //getting access to the photos
public function photos(){
    return $this->morphMany('App\Photo', 'imageable');
}
 //Including directory for storing images
 public $directory ="/images/";

//Mutator for image
    // public function setPathAttribute($value){
    //     $this->attributes['path']= asset($value);
    // }

//     // Accessing images
public function getPathAttribute($value){
    return $this->directory.$value;
}

// public function getPathAttribute($value){

//     return asset($value);
// }



    use HasFactory;
}
