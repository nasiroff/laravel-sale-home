<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model {
	
    protected $table = 'posts';
	
    public $timestamps = false;
	
	protected $fillable = ['user_id', 'city_id', 'address', 'title', 'desc', 'post_type', 'room_count', 'home_type', 'area', 'price', 'status', 'email_allowed'];

    public function Users() {
		return $this->hasOne('App\Models\Users', 'id', 'user_id');
    }

    public function Cities() {
        return $this->hasOne('App\Models\Cities', 'id', 'city_id');
    }

    public function PostImages() {
		return $this->hasMany('App\Models\PostImages', "post_id", "id");
    }
}
