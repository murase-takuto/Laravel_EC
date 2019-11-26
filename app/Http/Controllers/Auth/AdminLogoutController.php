<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLogoutController extends Controller
{
	public function logout()
	{
		$user = Auth::user();
		Auth::logout();
		return redirect()->route('admin.login.submit');
	}
}
