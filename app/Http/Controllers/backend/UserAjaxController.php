<?php

/**
 * Created by PhpStorm.
 * User: dungt
 * Date: 7/7/2016
 * Time: 3:30 PM
 */
namespace App\Http\Controllers\backend;

use App\Http\Models\backend\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class UserAjaxController extends Controller
{
    public function changeStatusActive( Request $request ){
        $id = $request->get('id');
        $active = $request->get('active');
        $checkStatus = User::where('id' , $id)->update(['active' => $active ]);
        if ( $checkStatus !== 0 ){
            return json_encode(['active' => $active]);
        }
    }
}