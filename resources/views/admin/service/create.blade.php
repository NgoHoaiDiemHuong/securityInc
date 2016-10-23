@extends('admin.layouts.base')

@section('title')
<title>Thêm dịch vụ mới</title>
@endsection

@section('content')
	<div class="row col-sm-12">
		<button type="" class="btn btn-default" onclick="{{url('admin.service')}}"><span><i class="fa fa-chevron-left"></i></span>Quay lại</button>
	<hr/>
	</div>
	<div class="row">
	<form action="" method="get" accept-charset="utf-8">
	
	
	<div  class="form-group col-sm-6">
		

		<div class="form-group">
			<label class="control-label"  for="">Mã dịch vụ</label>
			<input class="form-control" type="text" name="service_code" value="" placeholder="*Mã dịch vụ...">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Tên dịch vụ</label>
			<input class="form-control" type="text" name="service_name" value="" placeholder="*Tên dịch vụ...">
		</div>

		<div class="form-group">
			<label class="control-label"  for="">Giá dịch vụ</label>
			<input class="form-control" type="number" name="price_service" value="" placeholder="Giá dịch vụ...">
		</div>

		<div class="form-group">
			<div class = "row">
			<div class="col-sm-4">
				<label class="control-label"  for="">Trạng thái </label>
			</div>
			
			<div class="col-sm-4 offset-2">
			<label><input type="radio" name="service_status" value="kinh_doanh" checked="true" >Đang kinh doanh</label>
			</div>
			<div class="col-sm-4 offset-8">
				<label><input type="radio" name="service_status" value="khong_kinh_doanh">Ngưng kinh doanh</label>
			</div>
		</div>
		
		</div>
		
		<div class="form-group">
			<label class="control-label"  for="">Mô tả</label>
			<textarea  class="form-control" name="service_decription" placeholder="Mô tả dịch vụ..."></textarea>
		</div>
		
	</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-12">
		<hr/>
		<input type="submit" name="" value="Lưu" class="btn btn-primary">
		<input type="reset" name="" value="Hủy" class="btn btn-default">
		<hr>
	</div>
	</div>
	</form>
	
	
@endsection
@stop