<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name','username', 'email','password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function store(){
         return $this->belongsTo('App\Models\Store', 'store_id', 'id');
    }
}
