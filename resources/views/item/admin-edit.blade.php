@extends('layouts.app_admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">商品編集画面</div>

				<div class="panel-body">
					<form action="{{ route('admin.item.edit', ['id' => $item->id]) }}" method="POST">
						{{ csrf_field() }}
						@foreach ($errors->all() as $error)
							<div class="alert alert-danger">
									<li>{{ $error }} </li>
							</div>
						@endforeach

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 	                       <label for="name" class="col-md-4 control-label">商品名</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $item->name }}">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	                        <label for="name" class="col-md-4 control-label">商品説明</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comment" value="{{ $item->comment }}">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
      	                	<label for="name" class="col-md-4 control-label">価格 ※変更不可</label>
							<div class="col-md-6">
								<div class="form-control" name="price">{{ $item->price }}</div>
							</div>
						</div>

                        <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
	                        <label for="name" class="col-md-4 control-label">在庫</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="stock" value="{{ $item->stock }}">
							</div>
						</div>

						<div>
							<input type="submit" value="新規登録" class="btn btn-default btn-md">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
