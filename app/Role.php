<?php

namespace Features;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The users that belong to the role.
     */
    public function users() {
		return $this->belongsToMany('Features\User');
	}
	
    /**
     * The permissions that belong to the role.
     */
	public function perms() {
		return $this->belongsToMany('Features\Permission');
	}
}
