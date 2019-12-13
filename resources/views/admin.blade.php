@extends('layouts.app_admin')
@section('content')
@if (session('flash_message'))
	<div class='flash_message bg-success text-center py-3 my-0'>
		{{ session('flash_message') }}
	</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
					商品一覧
					<a href="{{ route('admin.item.add-form') }}" class="btn btn-default btn-md">商品を追加する</a>
				</div>

				<div class="panel-body">
					<table border=1>
						<tr>
							<th>商品名</th>
							<th>価格 (円)</th>
							<th>在庫 (数)</th>
						</tr>
						@foreach ($items as $item)
							<tr>
								<td><a href="{{ route('admin.item.detail', ['id' => $item->id]) }}">{{$item->name}}</a></td>
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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
