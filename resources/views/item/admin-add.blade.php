@extends('layouts.app_admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">商品登録画面</div>

                <div class="panel-body">
					<form action="{{ route('admin.item.add') }}" method="post">
						{{ csrf_field() }}
						@foreach ($errors->all() as $error)
							<div class="alert alert-danger">
									<li>{{ $error }} </li>
							</div>
						@endforeach

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
 	                       <label for="name" class="col-md-4 control-label">商品名</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
	                        <label for="name" class="col-md-4 control-label">商品説明</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comment">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
      	                	<label for="name" class="col-md-4 control-label">価格</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
	                        <label for="name" class="col-md-4 control-label">在庫</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="stock">
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
