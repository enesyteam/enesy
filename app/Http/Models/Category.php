<?php
namespace App\Http\Models;
/**
 * Created by PhpStorm.
 * User: Dungtd
 * Date: 7/1/2016
 * Time: 10:36 AM
 */
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "tbl_categories";
    public $timestamps = false;

    protected $fillable = array('id', 'parent_id', 'title', 'create_date', 'status');


     public function getCategories(){

        $categories=Category::where('parent_id',0)->get();

        $categories=$this->addRelation($categories);

        return $categories;

    }

    protected function selectChild($id)
    {
        $categories=Category::where('parent_id',$id)->get();

        $categories=$this->addRelation($categories);

        return $categories;

    }

    protected function addRelation($categories){

        $categories->map(function ($item, $key) {
            
            $sub=$this->selectChild($item->id); 
            
            return $item=array_add($item,'subCategory',$sub);

        });

        return $categories;
    }

   
   

        public function scopeParentId($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('parent_id', $value);
            }
        }

        public function scopeTitle($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                return $query->where('title', 'like', '%'.$value.'%');
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

        public function scopeStatus($query, $value) {

            if (isset($value) && !empty(trim($value))) {
                if ($value == 1) {

                    return $query->where('status', '=', '1');
                } else if ($value == 2) {

                    return $query->where('status', '=', '0');
                }

                
            }
        }



}