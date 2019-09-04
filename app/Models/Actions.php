<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model {
	
    protected $table = 'actions';
	
    public $timestamps = false;
	
	protected $fillable = ['controller', 'method'];

    public function Roles() {
		return $this->belongsToMany('App\Models\Roles', 'role_action', 'action_id', 'role_id');
    }
}
