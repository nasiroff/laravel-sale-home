<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model {
	
    protected $table = 'cities';
	
    public $timestamps = false;
	
	protected $fillable = ['name'];

    public function Posts() {
		return $this->hasMany('App\Models\Posts', 'city_id', 'id');
    }
}
