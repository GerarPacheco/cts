<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use EntrustUserTrait {EntrustUserTrait::restore insteadof SoftDeletes;}

    protected $guarded = ['id'];

    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($value){
        if (!$value ==NULL) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
}
