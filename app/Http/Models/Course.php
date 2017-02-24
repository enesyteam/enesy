<?php
/**
 * Created by PhpStorm.
 * User: ducnv
 * Date: 7/1/2017
 * Time: 10:36 AM
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "tbl_course";
    public $timestamps = false;

    const PAGE_SIZE = 16;
    
}