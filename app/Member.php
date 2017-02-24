<?php
/**
 * Created by PhpStorm.
 * User: dungtd
 * Date: 2/15/2017
 * Time: 2:47 PM
 */

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;

class Member extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $table = 'tbl_member';

    protected $dateFormat = 'U';

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

    protected function validatorEditProfile(array  $data){
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'sex' => 'required',
            'dob' => 'required',
            'social' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'skype' => 'required',
            'facebook' => 'required',
        ];

        return Validator::make($data , $rules);
    }

    protected function validatorChangePass(array  $data){
        $rules = [
            'old_pass' => 'required',
            'new_pass' => 'required',
            'new_pass_confirm' => 'required|same:new_pass',
        ];

        return Validator::make($data , $rules);
    }

     protected function  validatordoRegister(array $data){
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'username' => 'required|checkusername',
            'email' => 'required|email|checkemail',
            'password' => 'required|min:6|max:12',
            'confirm-password' => 'required|min:6|max:12|same:password',
        ];

        Validator::extend('checkemail', function( $attribute, $value, $parameters ) {
            $check = Member::all()->where('email' , $value);
            if ( $check->count() != 0 ){
                return false;
            }
            return true;
        });

        Validator::extend('checkusername', function( $attribute, $value, $parameters ) {
            $check = Member::all()->where('username' , $value);
            if ( $check->count() != 0 ){
                return false;
            }
            return true;
        });

        $message = [
            'email.checkemail' => 'Email đã tồn tại',
            'username.checkusername' => 'Username đã tồn tại'
        ];

        return Validator::make($data , $rules , $message);
    }
}
