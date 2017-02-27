<?php

namespace Features;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles() {
		return $this->belongsToMany('Features\Role','permission_role');
	}
}
