<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NuB-Bus Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logo/LogoColor.png')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('panel/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/responsive.css')}}">
     <!-- modernizr css -->
     <link rel="stylesheet" href="{{asset('panel/plugins/fontawesome-free/css/all.min.css')}}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Tempusdominus Bbootstrap 4 -->
     <link rel="stylesheet" href="{{asset('panel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
     <!-- iCheck -->
   <link rel="stylesheet" href="{{asset('panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
     <!-- JQVMap -->
   <link rel="stylesheet" href="{{asset('panel/plugins/jqvmap/jqvmap.min.css')}}">
     <!-- Theme style -->
   <link rel="stylesheet" href="{{asset('panel/dist/css/adminlte.min.css')}}">
     <!-- overlayScrollbars -->
   <link rel="stylesheet" href="{{asset('panel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
     <!-- Daterange picker -->
   <link rel="stylesheet" href="{{asset('panel/plugins/daterangepicker/daterangepicker.css')}}">
     <!-- summernote -->
   <link rel="stylesheet" href="{{asset('panel/plugins/summernote/summernote-bs4.css')}}">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
       <!-- DataTables -->
       {{-- <link rel="stylesheet" href="{{asset('panel/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"> --}}
       <script src="{{asset('panel/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo mb-5">
                    <a href="/dashboard"><img src="{{asset('img/logo/nubbus02.png')}}"/></a>
                </div>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <img src="{{asset('panel/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                           <li class="active"><a href="/dashboard"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                           <li><a href="/operators"><i class="ti-dashboard"></i> <span>Operators</span></a></li>
                            <li><a href="/buses"><i class="fas fa-bus-alt"></i> <span>Bus</span></a></li>
                            <li><a href="/trips"><i class="fas fa-road"></i> <span>Trips</span></a></li>
                           <li><a href="/tickets"><i class="fas fa-ticket-alt"></i> <span>Tickets</span></a></li>
                           <li><a href="/bookings"><i class="fas fa-bookmark"></i> <span>Bookings</span></a></li>
                           <li><a href="/routes"><i class="fas fa-route"></i> <span>Routes</span></a></li>
                            {{-- <li><a href="#"><i class="ti-dashboard"></i> <span>Orders</span></a></li>
                            <li><a href="#"><i class="ti-dashboard"></i> <span>Reviews</span></a></li>
                            <li><a href="#"><i class="ti-dashboard"></i> <span>Reports</span></a></li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Settings
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">User accounts</a></li>
                                </ul>
                            </li> --}}
                            <li ><a href="/logout"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @yield('header')

            <!-- header area end -->

            <!-- page title area start -->
            @yield('page-title')

            <!-- page title area end -->
            @yield('inner-content')

        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
               <p>© Copyright 2022. All right reserved nub-bus.com Developed by <a href="#" target="_blank">Error 404</a></p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    @yield('script')
    <script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{asset('panel/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('panel/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('panel/assets/js/jquery.slicknav.min.js')}}"></script>

    <script src="{{asset('panel/js/bootstrap.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('panel/assets/js/line-chart.js')}}"></script>
    <!-- all bar chart activation -->
    <script src="{{asset('panel/assets/js/bar-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('panel/assets/js/pie-chart.js')}}"></script>


    <!-- jQuery UI 1.11.4 -->
<script src="{{asset('panel/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- Bootstrap 4 -->
<script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('panel/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('panel/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('panel/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('panel/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('panel/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('panel/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('panel/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('panel/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

<!-- others plugins -->
<script src="{{asset('panel/assets/js/plugins.js')}}"></script>
<script src="{{asset('panel/assets/js/scripts.js')}}"></script>


<!-- DatePicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  {{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $( function() {
        $( "#datepicker3" ).datepicker({
        minDate: 0,
        dateFormat: "dd-M-yy"
        });
    } );

    $( function() {
        $( "#datepicker4" ).datepicker({
        minDate: 0,
        dateFormat: "dd-M-yy"
        });
    } );
</script>

  <!-- Timepicker -->

  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

  <script type="text/javascript">
     $('#timepicker1').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

     $('#timepicker2').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    dynamic: false,
    dropdown: true,
    scrollbar: true
});


 $('#timepicker3').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
  </script>

  <script>
  $( function() {
    var avadepartdate = [
      "Dhaka",
      "Cumilla",
      "Coxs Bazar",
      "Chittagong",
    ];
    $( "#deptfrom" ).autocomplete({
      source: avadepartdate
    });

    $( "#arriveat" ).autocomplete({
      source: avadepartdate
    });
  } );
  </script>
<script type="text/javascript">
    $(document).ready(function(){
        var i=1;
        $('#add1').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="aminities[]" placeholder="Enter aminities" class="form-control name_list" required/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
        });
    });
</script>
<script type="text/javascript">
            $(document).ready(function(){
            var i=1;
            $('#add2').click(function(){
            i++;
            $('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="time" name="route_time[]" placeholder="Enter time" class="form-control name_list" /></td><td><input type="text" name="route_place[]" placeholder="Enter place" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
            });
            });
</script>
</body>

</html>
