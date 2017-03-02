<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\User;
use Auth;

class ProfileController extends Controller
{
    public function profile($username) {
    	$user = User::where('username', $username)->first();

    	if (empty($user)) {
    		abort('404');
    	}

    	elseif ($user == Auth::user()) {
    		return view('user.profile', compact('user'));
    	}
    	else {
    		return "You are not allowed login with different account to visit this page.";
    	}
    }

    public function upload(Request $request) {
        $file = $request->file('image');
        $user = Auth::user();
        if ($file) {
            $filename = $user->username.'-'.$user->id.'.jpg';
            Storage::disk('local')->put($filename, File::get($file));
        }

        return redirect()->route('profile', ['username' => $user->username ]);
    }

    public function getImage($filename) {
        $file = Storage::disk('local')->get($filename);
        return response($file, 200);
    }
}
