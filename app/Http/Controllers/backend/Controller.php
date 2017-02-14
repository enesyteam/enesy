<?php

namespace App\Http\Controllers\backend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $layout = 'backend.layouts.dashboard';

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
