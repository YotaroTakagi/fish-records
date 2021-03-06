<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    //一気に保存可能なパラメータを指定、create関数使用のため。
    protected $fillable = [
        'nickname',  "password", 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', "remember_token",
    ];
    
    public function records()
    {
        return $this->hasMany(Record::class);
    } 
}
