@extends('admin.layouts.base')

@section('title')
<title>Thêm đơn dặt hàng mới</title>
@endsection

@section('content')

	<div class ="row">	
	<div class="form-group col-sm-12">
		<button type="" class="btn btn-default"><span><i class="fa fa-chevron-left"></i></span>Quay lại</button>
		<hr>
	</div>
	</div>
	<form action="" method="get" accept-charset="utf-8">
	<div class ="row">	
	<div class="form-group col-sm-6">
		<div class="form-group">
			<label class="control-label"  for="">Tên dịch vụ</label>
			<input class="form-control" type="text" name="service_name" value="" placeholder="Tên dịch vụ...">
		</div>
		

		<div class="form-group">
			<label class="control-label"  for="">Tên khách hàng</label>
			<input class="form-control" type="text" name="customer_name" value="" placeholder="Tên khách hàng...">
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Ngày đặt hàng</label>
			<input class="form-control" type="date" name="order_date" value="" placeholder="Ngày đặt hàng...">
		</div>
	
		<div class="form-group">
			<div class="row">
				
				<div class="col-sm-2">
				<label class="control-label"  for="">Trạng thái </label>
				</div>
				
				<div class="col-sm-3 offset-2">
					<label><input type="radio" name="status" value="0" checked="true" >Pending...</label>
				</div>
				<div class="col-sm-4 offset-8">
					<label><input type="radio" name="status" value="1">Đang tiến hành...</label>
				</div>
				<div class="col-sm-3 offset-10">
					<label><input type="radio" name="status" value="2">Hoàn thành</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Ghi chú</label>
			<textarea  class="form-control" name="decription" placeholder="Ghi chú..."></textarea>
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Nhân viên tạo đơn đặt hàng</label>
			<input class="form-control" type="text" name="employee_init" value="" placeholder="Nhân viên tạo đơn đặt hàng...">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Task công việc</label>
			{{-- <input class="form-control" type="text" name="customer_name" value="" placeholder="Nhân viên thực hiện...">
		</div> --}}
		</div>
		
	</div>
	
	
	

	<div class ="row">	
		<div class="col-sm-12">
			<hr>
				<input type="submit" name="" value="Lưu" class="btn btn-primary ">
				<input type="reset" name="" value="Hủy" class="btn btn-default ">
			<hr>
		</div>
	</div>
	</form>


	
	
	
		
@endsection
@stop



{{-- llll --}}
