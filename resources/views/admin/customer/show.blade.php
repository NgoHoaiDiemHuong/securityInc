
@extends('admin.layouts.base')

@section('title')
<title>Update Khách hàng</title>
@endsection

@section('content')

	<div>	
	<div  class="form-group col-sm-6">
			<a href="{{Redirect::action('CustomerController@create')}}" ><button type="" class="btn btn-default"><span><i class="fa fa-chevron-left"></i></span>Quay lại</button></a>
		<hr>

		<div class="form-group">
			<label class="control-label"  for="">Tên khách hàng</label>
			<input class="form-control" type="text" name="name" value="{!!$customer->name!!}" placeholder="Tên khách hàng...">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Số điện thoại</label>
			<input class="form-control" type="tel" name="phone_number" placeholder="Số điện thoại..." value="{!!$customer->phone_number!!}">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Email</label>
			<input class="form-control" type="email" name="email" value="{!!$customer->email!!}" placeholder="email...">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Ngày sinh</label>
			<input class="form-control" type="date" name="birthday" placeholder="birthday..." value="{!!$customer->birthday!!}">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Công ty</label>
			<input class="form-control" type="text" name="company" placeholder="Công ty..." value="{!!$customer->company!!}">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Địa chỉ</label>
			<input class="form-control" type="text" name="address" value="{!!$customer->address!!}" placeholder="Địa chỉ...">
		</div>

		
		<hr>

		<input type="submit" name="" value="Lưu" class="btn btn-primary">
		<input type="reset" name="" value="Hủy" class="btn btn-default">
		
	</div>
	</div>
@endsection
@stop