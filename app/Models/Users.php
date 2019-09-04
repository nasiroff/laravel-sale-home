<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as UserService;
use Illuminate\Notifications\Notifiable;

class Users extends UserService implements MustVerifyEmail {

    use Notifiable;
    protected $table = 'users';
	
    public $timestamps = false;


    protected $fillable = ['first_name', 'last_name', 'email', 'email_verified_at', 'password', 'role_id', 'remember_token'];

    public function Posts() {
		return $this->hasMany('App\Models\Posts', 'user_id', 'id');
    }

    public function Roles() {
		return $this->belongsTo('App\Models\Roles', 'role_id', 'id');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }



}
