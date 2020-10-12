<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\UserAdmin as Authenticatable;

class UserAdmin extends Authenticatable
{
	use SoftDeletes;
	use Notifiable;

	public    $timestamps = true;
	protected $table      = 'user_admins';
	protected $fillable   = ['name', 'email'];
	protected $hidden     = ['password', 'remember_token']; 

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
	}

	public function eventos()
	{
		return $this->hasMany(Eventos::class);
	}

}
