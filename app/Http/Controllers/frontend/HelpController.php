<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class HelpController extends Controller
{
	/*Help for Enrollers*/
    public function enrollers(){
    	return 'Trang trợ giúp dành cho học viên';
    }

	/*Help for Authors*/
    public function authors(){
    	return 'Trang trợ giúp dành cho giảng viên';
    }
}
