<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name','avatar', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function getAvatarAttribute($value){
        return asset($value);
    }

    //Accessing Post Model
     public function posts(){
        return $this->hasMany(Post::class);
    }
    public function roles(){

        return $this->belongsToMany(Role::class);

    }
    public function permissions(){


        return $this->belongsToMany(Permission::class);
    }
public function userHasRole($role){
    foreach($this->roles as $role){
        if($role == $role->name)
            return true;
    }
    return false;
}

}
