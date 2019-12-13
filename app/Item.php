<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $guarded = [
		'id',
		'deleted_at',
	];
	protected $fileable = [
		'name',
		'comment',
		'price',
		'stock',
	];
}
