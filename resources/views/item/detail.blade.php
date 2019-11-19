@extends('layouts.app')
@section('content')
<h1>商品詳細</h1>
@foreach($items as $item)
	<p> 商品名 ：{{$item->name}}</p>
	<p>商品説明：{{$item->comment}}</p>
	<p>  価格  ：{{$item->price}} 円</p>
	<p>  在庫  ：
	@if ($item->stock != 0)
		あり({{$item->stock}})
	@else
		無し
	@endif
	</p>
@endforeach
@endsection
