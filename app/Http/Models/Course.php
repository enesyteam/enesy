<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "tbl_course";
    public $timestamps = false;

    const PAGE_SIZE = 24; // CÔNG: Số chia hết cho 2,3,4 để hiện thị đủ số lượng trên 2 cột, 3 cột, 4 cột
    
}