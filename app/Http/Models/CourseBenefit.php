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

class CourseBenefit extends Model
{
    protected $table = "tbl_course_benefit";

    public $timestamps = false;
      
}