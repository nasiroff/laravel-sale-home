<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PostImages extends Model {
	
    protected $table = 'post_images';
	
    public $timestamps = false;
	
	protected $fillable = ['post_id', 'image_path'];

    public function Posts() {
		return $this->belongsTo('App\Models\Posts', "id", "post_id");
    }
}
