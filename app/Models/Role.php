<?php

namespace App\Models;
namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];


    public function permissions(){


        return $this->belongsToMany(Permission::class);
    }


//Accessing User class


public function users(){
    return $this->belongsToMany(User::class);
}


}
