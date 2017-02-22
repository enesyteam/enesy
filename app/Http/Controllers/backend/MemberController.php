<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;
use App\Http\Models\Member;
use App\Http\Requests;
use Config;


class MemberController extends Controller
{

	function index(){
		 $data = array();
		 $custom_link = array();
		$email = '';
		$name = '';
		$teacher = '';
		$learning = '';
		$status =  '';
		$create_date  = '';
		$to_date = '';
		$search = Input::get('search', 'false');
		$data['email'] = $email;
			$data['fullName'] = $name;
			
			$data['teacher'] = $teacher;
			$data['learning'] = $learning;
			$data['status'] = $status;
			$data['createDate'] = $create_date;
			$data['toDate'] = $to_date;
		
		if ($search == 'true') {
			$email = Input::get('email');
			$name = Input::get('fullName');
			
			$teacher = Input::get('teacher');
			$learning = Input::get('learning');
			$status =  Input::get('status');
			$create_date  = Input::get('createDate');
			$to_date = Input::get('toDate');
			$search = Input::get('search', 'false');
			$data['email'] = $email;
			$data['fullName'] = $name;
			
			$data['teacher'] = $teacher;
			$data['learning'] = $learning;
			
			$data['createDate'] = $create_date;
			$data['toDate'] = $to_date;
			$custom_link['search'] = true;
			$custom_link['email'] = $email;
			$custom_link['fullName'] = $name;
			
			$custom_link['teacher'] = $teacher;
			$custom_link['learning'] = $learning;
			
			$custom_link['createDate'] = $create_date;
			$custom_link['toDate'] = $to_date;
		}
		$data['status'] = Config::get('params.status_user');

		$all_member = Member::
						email($email)
						->nameOrFullName($name)						
						->teacher($teacher)
						->learning($learning)
						->status($status)
						->createDate(MemberController::getDate($create_date), MemberController::getDate($to_date))
						->paginate(Config::get('params.row_page'));
		$data['all_member'] = $all_member;
		
		$all_member->appends($custom_link);

		//
		//$data1 = array();
		//$data1['status'] = Config::get('params.status_user');

		return view('backend.member.list', $data);//->withData1($data1);
	}

	//cong
	function executeAdd(Request $req) {
    	$mem = new Member;    	
    	
    	$mem->username     = $req->username;
        $mem->email     = $req->email;
        $mem->password     = $req->password;

    	if (isset($req->status)) {
    		$mem->status = $req->status;
    	}
    
    	$mem->save();
        return \Redirect::route('memberIndex')->with('status', 'successed');
    }

	function getDate($value) {
		if (isset($value) && strlen($value) > 0) {
			return date('Ymd', strtotime($value));
		}
		return '';
	}


	function deleteById() {
		$id = $_GET['id'];
		if (isset($id)) {
			$member = Member::find($id);
			if ($member != null) {
				$member->delete();
			}
		}
	}

	function deleteAllCheck() {
		foreach ($_GET['data'] as $value) {
			if (isset($value)) {
				$m = Member::find($value);
				if ($m != null) {
					$m->delete();
				}
			}
		}
	}


	function changeActive() {
		$id = $_GET['id'];
		$email = $_GET['email'];
		if (isset($id)) {
			$m = Member::find($id);
			if ($m != null) {
				if ($m->active == 1) {
					$m->active = 0;									
				} else {
					$m->active = 1;					
				}
				if ($m->create_user == null)
				{
					$m->create_user = $email;
					$m->create_date = date('Ymd');
				}
			$m->modify_user = $email;
					$m->modify_date = date('Ymd');	

				$m->save();
			}
		}
	}

	function edit() {
		$id = Input::get('id');
		$data = array();
		$data['member'] = Member::find($id);
		 $data['status'] = Config::get('params.status_user');
		return view('backend.member.edit', $data);
	}

	function postEdit(Request $Request) {
		$id = Input::get('id');
		$mm = Member::find($id);
		$status = $Request->status;
		if ($mm != null) {
			$mm->status = $status;
			if ($status == 1) {
				$mm->modify_date = date('Ymd');
			}
			$mm->save();
		}
		return \Redirect::route('memberIndex');
	}
	function changeIsTeacher () {
    	$id  = $_GET['id'];
    	$mm = Member::find($id);
    	if ($mm != null) {
    		if ($mm->is_teaching == 1) {
    			$mm->is_teaching = 0;
    		} else {
    			$mm->is_teaching = 1;
    		}
    		$mm->save();
    	}
      return response()->json(array('status'=> "updated", 'id'=> $id));
    }
	

}
	