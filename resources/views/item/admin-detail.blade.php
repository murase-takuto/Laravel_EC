@extends('layouts.app_admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">商品詳細</div>

				<div class="panel-body">
					<a href="{{ route('admin.item.edit-form', ['id' => $item->id]) }}">商品編集画面へ</a>
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
				</div>
			</div>
		</div>
	</div>
</div>


@endsection