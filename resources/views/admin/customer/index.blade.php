{{-- Test database --}}

{{-- //  	echo "<pre>";
//  	print_r($customers);
//  	echo "</pre>";

//  --}} 

<?php 
// use Illuminate\Pagination\LengthAwarePaginator as Paginator;

// $paginator = new Paginator($items, $count, $limit, $page, [
//             'path'  => $this->request->url(),
//             'query' => $this->request->query(),
// ]);
?>
@extends('admin.layouts.base')

@section('title')
<title>Danh sách khách hàng</title>
@endsection

@section('header')
<h1>Danh sách khách hàng</h1>
@endsection

@section('content')
<div class="col-md-12 panel-body">
	<div class="form-group">
	<input type="button" name="" value="Thêm" id =""class="btn btn-default" onclick="location.assign('{{action('CustomerController@create')}}')">
	<input type="button" name="" value="Xóa" class="btn btn-default">
	<div class="pull-right">
		<input type="text" name="" value="" id="search-input" placeholder="Tìm kiếm" class="form-control" onKeyDown="down()" onKeyUp="up()">
	</div>
	<div class="search-results">
	</div>

</div>
</div>

<hr>
	@if($customers->count())
            <div class="col-md-12">
            <!-- Bang Ds khach hang -->           		
                <div class="box">
					
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                	<th>
										<input type="checkbox" name="select_all" value="" class="">
									</th>
									<th>Họ tên</th>
									<th>SĐT</th>
									<th>Email</th>
									<th>Ngày sinh</th>
									<th>CMNN</th>
									<th>Tổ chức</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($customers as $customer)
									
								<tr onclick="location.assign('{{action('CustomerController@edit',$customer->id)}}')" class="hover"  onMouseover=this.bgColor='lightgrey' onMouseout=this.bgColor='#FFFFFF'>
									<td>
									<input type="checkbox" name="select_all" value="" class="">
									</td>
									<td>{!!$customer->name!!}</td>
									<td>{!!$customer->phone_number!!}</td>
									<td>{!!$customer->email!!}</td>
									<td>{!!$customer->birthday!!}</td>
									<td>{!!$customer->identity_card_number!!}</td>
									<td>{!!$customer->company!!}</td>
									</tr>
									
								@endforeach
                                
                            </tbody>
                        </table>
                        
                       <div class="row">
                       <hr>
	                       <div class="col-sm-6">
		                       <p>Hiển thị từ {{$customers->currentPage()*$customers->perPage()-$customers->perPage()+1}} đến {{$customers->currentPage()*$customers->perPage()}}  
		                       </p>
		                    </div>
		                    
		                    <div class="col-sm-6 ">
			                    {{-- {!! $customers->render() !!} --}}
								<nav>
								  <ul class="pagination">
								  @if($customers->currentPage()!=1)
								    <li>
								    <?php
								    	$prev=$customers->currentPage()-1; 
								     ?>
								      <a href="{{url('admin/customer?page='.$prev)}}" aria-label="Previous">							      
								        <span aria-hidden="true">&laquo;</span>
								        Prev
								      </a>
								      
								    </li>
								   @endif
								    @for($i =1;$i<$customers->lastPage()+1;$i++)
								    <li class="{!!($customers->currentPage()==$i)?'active':''!!}"><a href="{{url('admin/customer?page='.$i)}}">{!!$i!!}</a></li>
								    @endfor
								     @if($customers->currentPage()!=$customers->lastPage())
								    <li>
								    	<?php  $next=$customers->currentPage()+1;?>
								      <a href="{{url('admin/customer?page='.$next)}}" aria-label="Next">
								      	 Next
								        <span aria-hidden="true">&raquo;</span>
								      </a>
								     
								    </li>
								    @endif
								  </ul>
								</nav>
							</div>
			                    
		                   
	                    </div>
                   </div>
                    
                </div>
		</div>
            <!--End Advanced Tables -->
 

        <script type="text/javascript" charset="utf-8" >
        var timer;

				function up()
				{
					
				    timer = setTimeout(function()
				    {
				        var keywords = $('#search-input').val();

				        if (keywords.length > 0)
				        {
				        	// alert(keywords);
				            $.post(
				            	"'{{action('CustomerController@search')}}", 
				            	{keywords: keywords}
				            );
				        }
				    }, 500);
				}

				function down()
				{

				    clearTimeout(timer);

				}
	</script>
	@else
		khong ton tai customer
	@endif


@endsection
@stop