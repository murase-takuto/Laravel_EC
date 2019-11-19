@extends('layouts.app')
@section('content')
<table border=1>
	<tr>
		<th>商品名</th>
		<th>価格 (円)</th>
		<th>在庫 (数)</th>
	</tr>
	@foreach ($items as $item)
		<tr>
			<td><a href=<?php echo route('detail', ['id' => $item->id]); ?>>{{$item->name}}</a></td>
			<td>{{$item->price}}</td>
			<td>
			@if ($item->stock != 0)
				<p>在庫あり({{$item->stock}})</p>
			@else
				<p>在庫無し</p>
			@endif
			</td>
		</tr>
	@endforeach
</table>
@endsection
