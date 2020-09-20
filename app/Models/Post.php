<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

protected $filables = ['title', 'post_image','body'];

    public function user(){
//Accessing user model
        return $this->belongsTo(User::class);
    }



    use HasFactory;
}
