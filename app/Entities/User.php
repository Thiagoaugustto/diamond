<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

	use SoftDeletes;
	use Notifiable;

	public    $timestamps = true;
	protected $table      = 'users';
	protected $fillable   = ['name', 'email', 'password', 'phone', 'telephone', 'cpf', 'rg', 'birth', 'country', 'cep', 'address', 'number', 'complement', 'neighborhood', 'city', 'state'];
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
