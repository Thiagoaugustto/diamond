<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDelete;

class UserSocial extends Model
{
    use SoftDelete;
	use Notifiable;

	public    $timestamps = true;
	protected $table      = 'users';
	protected $fillable   = ['user_id', 'social_network', 'social_id', 'social_email', 'social_avatar'];
	protected $hidden     = []; 

}
