<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddRequest;
use App\Http\Requests\EditRequest;

class AdminItemController extends Controller
{
    public function __construct() {
		$this->middleware('auth:admin');
    }
	public function index() {
			$items = Item::get();
			return view('admin', ['items' => $items]);
	}
	public function detail(Request $request, $id) {
		$item = Item::find($id);
		return view('item.admin-detail', ['item' => $item]);
	}
	public function showAddForm() {
		return view('item.admin-add');
	}
	public function add(AddRequest $request) {
		Item::create($request->all());
		return redirect()->route('admin.item.index')->with('flash_message', '新規登録が完了しました。');
	}
	public function showEditForm(Request $request, $id) {
		$item = Item::find($id);
		return view('item.admin-edit', ['item' => $item]);
	}
	public function edit(EditRequest $request, $id) {
		Item::where('id', $id)->update(
			[
				'name' => $request->name,
				'comment' => $request->comment,
				'stock' => $request->stock
			]
		);
		return redirect()->route('admin.item.index')->with('flash_message', '編集が完了しました。');
	}
}
