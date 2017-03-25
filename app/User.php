<?php

namespace Features;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword as ResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    use ResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The roles that belong to the user.
     */
    public function roles()
    {
		return $this->belongsToMany('Features\Role','role_user');
	}
    
    public function items()
    {
		return $this->hasMany('Features\Item');
	}
    
    
    
    public function canDo($permission)
    {
        foreach($this->roles as $role) {
            foreach($role->perms as $perm) {
                if(str_is($permission,$perm->name)) {
                    return TRUE;
                }
            }
        }
	}
}
