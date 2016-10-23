
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('title')
    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="{{url('http://fonts.googleapis.com/css?family=Open+Sans')}}" rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        @include('admin.partials.header') 
        @include('admin.partials.nav')
        <div id="page-wrapper" >
            <div id="">
            <!-- id = "page-inner" -->
                <div class="row">
                    <div class="col-md-12">
                     @yield('content')
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                
               
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{url('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{url('assets/js/jquery.metisMenu.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{url('assets/js/custom.js')}}"></script>
    
   
</body>
</html>
