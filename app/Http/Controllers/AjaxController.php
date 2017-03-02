<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    public function checkuser($username) {

    	$user = User::where('username', $username)->first();

    	if ($user) {
    		$msg = "Username already exist";

    		return $msg;
    	}
    }
}
