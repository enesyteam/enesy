<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "tbl_course";
    public $timestamps = false;

    const PAGE_SIZE = 16;
    
}