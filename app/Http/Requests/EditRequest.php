<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => ['required'],
			'comment' => ['required'],
			'stock' => ['required', 'numeric', 'min:0']           //
		];
	}

	public function messages()
	{
		return [
			'name.required' =>	'名前を入力してください。',
			'comment.required' =>	'コメントを入力してください。',
			'stock.required' => '在庫を入力してください。',
			'stock.numeric' => '在庫には整数値をを入力してください。',
			'stock.min' => '在庫には0以上の値をを入力してください。'
		];
	}
}
