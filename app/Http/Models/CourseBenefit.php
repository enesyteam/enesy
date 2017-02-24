<?php
namespace App\Http\Models;
/**
 * Created by PhpStorm.
 * User: Dungtd
 * Date: 7/1/2016
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