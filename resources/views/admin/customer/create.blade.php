@extends('admin.layouts.base')

@section('title')
<title>Thêm Khách hàng mới</title>
@endsection

@section('content')

	<div class="panel-body">	
	<a href="{{action('CustomerController@index')}}" title=""><button type="" class="btn btn-default" ><span><i class="fa fa-chevron-left" ></i></span>Quay lại</button></a>
		<hr>
	</div>
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">
					Thêm khách hàng
				</h3>
			</div>
			<form action="{{route('admin.customer.store')}}" method="POST" accept-charset="utf-8" role="form">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="box-body">
				<div class="form-group">
				<label class="control-label"  for="">Tên khách hàng</label>
				<input class="form-control" type="text" name="name" value="" placeholder="Tên khách hàng...">
			</div>

		<div class="form-group">
			<label class="control-label"  for="">Số điện thoại</label>
			<input class="form-control" type="tel" name="phone_number" value="" placeholder="Số điện thoại...">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Email</label>
			<input class="form-control" type="email" name="email" value="" placeholder="Email...">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Ngày sinh</label>
			<input class="form-control" type="date" name="birthday" value="" placeholder="birthday...">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Công ty</label>
			<input class="form-control" type="text" name="company" value="" placeholder="Tên công ty...">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Địa chỉ</label>
			<input class="form-control" type="text" name="address" value="" placeholder="Địa chỉ...">
		</div>


		<div class="form-group">
			<label class="control-label"  for="">Ghi chú</label>
			<textarea name="description" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Số CMND</label>
			<input class="form-control" type="number" name="identity_card_number" value="" placeholder="Số CMND..">
		</div>
		
		<hr>
		<input type="submit" name="" value="Lưu" class="btn btn-primary">
		<input type="reset" name="" value="Hủy" class="btn btn-default">	
		</div>
		
		
		
		
		
		
	</div>
	</form>	
</div>
	
	
	
@endsection
@stop