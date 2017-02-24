<?php
namespace App\Http\Models;
/**
 * Created by PhpStorm.
 * User: ducnv
 * Date: 7/1/2017
 * Time: 10:36 AM
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class User extends Model
{
    protected $table = "tbl_user";

    public $timestamps = false;
    
    protected $sortable = [
        'username'
    ];

    protected function  validatordoLogin(array $data){
        $rules = [
            'username' => 'required|min:6|max:12',
            'password' => 'required|max:12',
            'captcha' => 'required|captcha'
        ];
        $message = [
            'captcha.captcha' => 'Captcha sai ! Xin nhập lại'
        ];
        return Validator::make($data , $rules,$message);
    }

    protected function validatorCreate(array $data ){
        $rules = [
            'email' => 'required|email|max:255|checkemail',
            'username' => 'required|min:6|max:12',
            'full_name' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:12|confirmed',
            'password_confirmation' => 'required|min:6|max:12'
        ];
        Validator::extend('checkemail', function( $attribute, $value, $parameters ) {
            $check = User::all()->where('email' , $value);
            if ( $check->count() != 0 ){
                return false;
            }
            return true;
        });
        $message = [
            'email.required' => 'Email not empty',
            'email.email' => 'Please enter an email address',
            'email.max' => 'Email max length 255',
            'email.checkemail' => 'Email exits',
            'username.required' => 'Username not empty',
            'username.min' => 'Username min length 6',
            'username.max' => 'Username max length 12',
            'full_name.required' => 'FullName not empty',
            'full_name.min' => 'FullName min length 3',
            'full_name.max' => 'FullName max length 255',
            'password.required' => 'Password not empty',
            'password.min' => 'Password min length 6',
            'password.max' => 'Password max length 12',
            'password_confirmation.required' => 'Password Confirmation not empty',
            'password_confirmation.min' => 'Password Confirmation min length 6',
            'password_confirmation.max' => 'Password Confirmation max length 12'
        ];
        return Validator::make($data ,$rules, $message);
    }

    protected function validatorEdit(array $data ){
        $rules = [
            'email' => 'required|email|max:255',
            'full_name' => 'required|min:3|max:255',
        ];
        $message = [
            'email.required' => 'Email not empty',
            'email.email' => 'Please enter an email address',
            'email.max' => 'Email max length 255',
            'email.checkemail' => 'Email exits',
            'full_name.required' => 'FullName not empty',
            'full_name.min' => 'FullName min length 3',
            'full_name.max' => 'FullName max length 255',

        ];
        return Validator::make($data ,$rules, $message);
    }

    protected function validatorChangePass(array $data){
        $rules = [
            'password' => 'required|min:6|max:12|confirmed',
            'password_confirmation' => 'required|min:6|max:12',
        ];
        
        $message = [
            'password.required' => 'Password not empty',
            'password.min' => 'Password min length 6',
            'password.max' => 'Password max length 12',
            'password_confirmation.required' => 'Password Confirmation not empty',
            'password_confirmation.min' => 'Password Confirmation min length 6',
            'password_confirmation.max' => 'Password Confirmation max length 12'

        ];
        return Validator::make($data ,$rules, $message);
    }

    protected $fillable = [ 'username' ,'email','full_name','info'];
}