<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function index() {
		$data = [
			'var' => 'hello!'
		];
		return view('index', $data);
	}
}
