<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class MemberOther extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $table = 'tbl_member';

    const CREATED_AT = 'create_date';
    
    const UPDATED_AT = 'modify_date';

    protected $fillable = [
        'username', 'email', 'password','last_name', 'first_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
