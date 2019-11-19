<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
	public function index() {
		$items = DB::table('items')->get();
		return view('index', ['items' => $items]);
	}
	public function detail(Request $request,$id) {
		$items = DB::table('items')->where('id', '=', compact('id'))->get();
		return view('item/detail', ['items' => $items]);
	}
}
