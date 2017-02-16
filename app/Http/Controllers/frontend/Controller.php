<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Category;
use DB;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $layout = 'frontend.layouts.dashboard';

    public function __construct()
    {
       // menu 
       $query  = DB::table('tbl_categories')
        ->orderBy('id', 'desc')
        ->select('id','title','alias','parent_id');  
       $query   = $query->where('status', '=', 1);
       $result = $query->get();

       $list_cat_parent = array();
       $list_cat_child  = array();

       foreach($result as $key=>$value){
        if($value->parent_id==0){
           $list_cat_parent[] = $value;
        } else {
           $list_cat_child[$value->parent_id][] = $value;
        }

       }
       View::share ( 'list_cat_parent', $list_cat_parent );
       View::share ( 'list_cat_child', $list_cat_child );
       // end menu

    }

    /**
     * Show the user profile.
     */
    public function setContent($view, $data = [])
    {

        if ( ! is_null($this->layout))
        {
            return $this->layout->nest('child', $view, $data);
        }

        return view($view, $data);

    }

    /**
     * Set the layout used by the controller.
     *
     * @param $name
     * @return void
     */
    protected function setLayout($name)
    {
        $this->layout = $name;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = view($this->layout);
        }
    }


    public function callAction($method, $parameters)
    {
        $this->setupLayout();

        $response = call_user_func_array(array($this, $method), $parameters);


        if (is_null($response) && ! is_null($this->layout))
        {
            $response = $this->layout;
        }

        return $response;
    }      
}
