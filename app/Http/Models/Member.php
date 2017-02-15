<?php
namespace App\Http\Models;
/**
 * Created by PhpStorm.
 * User: Dungtd
 * Date: 7/1/2016
 * Time: 10:36 AM
 */
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\backend\Category;

class Member extends Model
{
    protected $table = "tbl_member";
    public $timestamps = false;
    protected $fillable = array('id');
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeEmail($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('email', 'like', '%'.$value.'%');
            }
     }

     public function scopeUserName($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('username', 'like', '%'.$value.'%');
            }
     }

     public function scopeFullName($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('full_name', 'like', '%'.$value.'%');
            }
     }

     public function scopeNameOrFullName($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('full_name', 'like', '%'.$value.'%')
                ->orWhere('username', 'like', '%'.$value.'%');
            }
     }



      public function scopeStatus($query, $value) {

            if (isset($value) && !empty(trim($value)) && $value != 'none') {
                if ($value > 0 ) {
                     return $query->where('status', $value);
                } 

                
             }
     }

      public function scopeTeacher($query, $value) {

            if (isset($value) && !empty(trim($value)) && $value != 'none') {
            	if ($value == 1) {
            		 return $query->where('is_teaching', 1);
            	} else if ($value == 2)  {
            			 return $query->where('is_teaching', 0);
            	}

            	
             }
     }

     public function scopeLearning($query, $value) {

            if (isset($value) && !empty(trim($value)) && $value != 'none') {
            	if ($value == 1 ) {
            		 return $query->where('is_learning', 1);
            	}      	else if ($value == 2) {
            		return $query->where('is_learning', 0);
            	}
             }
     }

      public function scopeCreateDate($query, $start_date, $end_date) {

            if (isset($start_date) && !empty(trim($start_date))) {
                if (isset($end_date) && !empty(trim($end_date))) {
                    return $query->whereBetween('create_date', array($start_date, $end_date));
                }               
            }
            if (isset($start_date) && !empty(trim($start_date))) {              
                    return $query->where('create_date', '>=', $start_date);
            }
            if (isset($end_date) && !empty(trim($end_date))) {              
                    return $query->where('create_date', '<=', $end_date);
            }
        }

        public function scopeCoaching($query, $value) {

            if (isset($value) && !empty(trim($value)) && $value != 'none') {
                 return $query->whereIn('id', MentorCoaching::select('member_id')->where('cat_id', $value)->get());
             }
        }


       public function mentorCoaching() {
            return $this->hasOne("App\Http\Models\backend\MentorCoaching", "member_id", "id");
        }

}