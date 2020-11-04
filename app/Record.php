<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Record extends Model
{
    protected $fillable = ["content", "length", "timefix",];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
