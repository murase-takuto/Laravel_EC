<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Item;
class ItemController extends Controller
{
	public function index() {
		$items = Item::get();
		return view('index', ['items' => $items]);
	}
	public function detail(Request $request,$id) {
		$item = Item::find($id);
		return view('item/detail', ['item' => $item]);
	}
}
