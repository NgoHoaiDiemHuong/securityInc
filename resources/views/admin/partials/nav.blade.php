<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">
          <li class="text-center">
          <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
      
          
          <li>
              <a  href="{{ asset('admin') }}" class=""><i class="fa fa-dashboard "></i> Dashboard</a>
          </li>
            <li>
              <a  href="{{ asset('admin/register') }}"><i class="fa fa-desktop "></i>Đăng kí dịch vụ</a>
          </li>
          <li>
              <a  href="{{ asset('admin/order') }}"><i class="fa fa-qrcode "></i>Đặt hàng </a>
          </li>
                 <li  >
              <a  href="{{ asset('admin/service') }}"><i class="fa fa-bar-chart-o"></i>Dịch vụ</a>
          </li>   
            <li  >
              <a  href="{{asset('admin/customer')}}"><i class="fa fa-table"></i> Khách hàng </a>
          </li>
          <li  >
              <a  href="{{ asset('admin/user') }}"><i class="fa fa-edit "></i> Nhân viên  </a>
          </li>               
          <li  >
              <a   href="{{ asset('admin/system') }}"><i class="fa fa-bolt "></i> Hệ thống</a>
          </li>   
          <li>
              <a   href="registeration.html"><i class="fa fa-laptop "></i> Hình ảnh</a>
          </li>   
      </ul>
     
  </div>
            
</nav>  
 <!-- /. NAV SIDE  -->