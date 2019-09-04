<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model {
	
    protected $table = 'roles';
	
    public $timestamps = false;
	
	protected $fillable = ['type'];

    public function Actions() {
		return $this->belongsToMany('App\Models\Actions', 'role_action', 'role_id', 'action_id');
    }

    public function Users() {
		return $this->hasMany('App\Models\Users', 'role_id', 'id');
    }
}
