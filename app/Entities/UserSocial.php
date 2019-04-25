<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use\Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    //
    use SoftDeletes;
    use Notifiable;
    public $timestamps = true;
    protected $table= 'user_social';
    protected $fillable =['user_id','social_network','social_avatar','social_id','password'];
    protected $hiden = ['passwprd','remember_token'];
}
