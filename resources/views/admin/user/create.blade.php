@extends('admin.layouts.base')

@section('title')
<title>Thêm nhân viên mới</title>
@endsection

@section('content')

	<div>	
	<div  class="form-group col-sm-6">
		<button type="" class="btn btn-default"><span><i class="fa fa-chevron-left"></i></span>Quay lại</button>
		<hr>

		<label class="control-label"  for="">Mã nhân viên</label>
		<input class="form-control" type="text" name="user_code" value="" placeholder="Mã nhân viên...">

		<label class="control-label"  for="">Tên nhân viên</label>
		<input class="form-control" type="text" name="user_name" value="" placeholder="Tên dịch vụ...">

		<label class="control-label"  for="">Ngày sinh</label>
		<input class="form-control" type="date" name="birthday" value="" placeholder="Ngày sinh...">

		<label class="control-label"  for="">Số điện thoại</label>
		<input class="form-control" type="tel" name="price_service" value="" placeholder="Số điện thoại...">		
		
		<label class="control-label"  for="">Email</label>
		<input class="form-control" type="email" name="email" value="" placeholder="Email...">

		<label class="control-label"  for="">Địa chỉ</label>
		<input class="form-control" type="text" name="address" value="" placeholder="Địa chỉ...">
		
		<label class="control-label"  for="">Level</label>
		<input class="form-control" type="number" name="level" value="" placeholder="Level...">
		<hr>

		<input type="submit" name="" value="Lưu" class="btn btn-primary">
		<input type="reset" name="" value="Hủy" class="btn btn-default">
		
	</div>
	</div>
@endsection
@stop