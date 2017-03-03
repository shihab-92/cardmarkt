<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dashboard Panel | CardMarkt</title>
      <!-- Bootstrap -->
      <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- iCheck -->
      <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- bootstrap-progressbar -->
      <link href="/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <!-- jVectorMap -->
      <link href="/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
      <!-- iCheck -->
      <link href="/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <!-- Datatables -->
      <link href="/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
      <link href="/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
      <link href="/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
      <link href="/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="/build/css/custom.min.css" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                     <a href="{{url('/')}}" class="site_title"><i class="fa fa-dashboard"></i> <span>Cardmarkt</span></a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  <div class="profile">
                     <div class="profile_pic">
                        <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{Auth::user()->username}}</h2>
                     </div>
                  </div>
                  <!-- /menu profile quick info -->
                  <br />
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                           <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a>
                           </li>
                           @if(Auth::check() && Auth::user()->role == "admin")
                           <li>
                              <a><i class="fa fa-edit"></i> Category management <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/add-category">Add category</a></li>
                                 <li><a href="/add-subcategory">Add Subcategory</a></li>
                                 <li><a href="/view-category">View category & Subcategory</a></li>
                                 <li><a href="/add-brand">Add Brand</a></li>
                                 <li><a href="/view-brands">View Brands</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-edit"></i> User management <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/add-users">Add user</a></li>
                                 <li><a href="/view-users">View users</a></li>
                              </ul>
                           </li>
                           @endif
                           <li>
                              <a><i class="fa fa-edit"></i> Card management <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="/add-card">Add card</a></li>
                                 <li><a href="/view-card">View cards</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
               </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                     </div>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <img src="/images/img.jpg" alt="">{{Auth::user()->username}}
                           <span class=" fa fa-angle-down"></span>
                           </a>
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="javascript:;"> Profile</a></li>
                              <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            @yield('admin_content')
            <!-- footer content -->
            <footer>
               <div class="pull-right">
                  Dashboard panel designed and developed by <a href="http://shihab-sharar.com"> Shihab Sharar.</a>
               </div>
               <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="/vendors/nprogress/nprogress.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- Flot -->
      <script src="/vendors/Flot/jquery.flot.js"></script>
      <script src="/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="/vendors/Flot/jquery.flot.time.js"></script>
      <script src="/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="/vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="/js/flot/jquery.flot.orderBars.js"></script>
      <script src="/js/flot/date.js"></script>
      <script src="/js/flot/jquery.flot.spline.js"></script>
      <script src="/js/flot/curvedLines.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="/js/moment/moment.min.js"></script>
      <script src="/js/datepicker/daterangepicker.js"></script>
      <!-- Datatables -->
      <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
      <script src="/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
      <script src="/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
      <script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
      <script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
      <script src="/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
      <script src="/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
      <script src="/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
      <script src="/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
      <script src="/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
      <script src="/vendors/jszip/dist/jszip.min.js"></script>
      <script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
      <script src="/vendors/pdfmake/build/vfs_fonts.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="/build/js/custom.min.js"></script>
      <!-- Flot -->
      <script>
         $(document).ready(function() {
           var data1 = [
           [gd(2012, 1, 1), 17],
           [gd(2012, 1, 2), 74],
           [gd(2012, 1, 3), 6],
           [gd(2012, 1, 4), 39],
           [gd(2012, 1, 5), 20],
           [gd(2012, 1, 6), 85],
           [gd(2012, 1, 7), 7]
           ];
         
           var data2 = [
           [gd(2012, 1, 1), 82],
           [gd(2012, 1, 2), 23],
           [gd(2012, 1, 3), 66],
           [gd(2012, 1, 4), 9],
           [gd(2012, 1, 5), 119],
           [gd(2012, 1, 6), 6],
           [gd(2012, 1, 7), 9]
           ];
           $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
             data1, data2
             ], {
               series: {
                 lines: {
                   show: false,
                   fill: true
                 },
                 splines: {
                   show: true,
                   tension: 0.4,
                   lineWidth: 1,
                   fill: 0.4
                 },
                 points: {
                   radius: 0,
                   show: true
                 },
                 shadowSize: 2
               },
               grid: {
                 verticalLines: true,
                 hoverable: true,
                 clickable: true,
                 tickColor: "#d5d5d5",
                 borderWidth: 1,
                 color: '#fff'
               },
               colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
               xaxis: {
                 tickColor: "rgba(51, 51, 51, 0.06)",
                 mode: "time",
                 tickSize: [1, "day"],
                 //tickLength: 10,
                 axisLabel: "Date",
                 axisLabelUseCanvas: true,
                 axisLabelFontSizePixels: 12,
                 axisLabelFontFamily: 'Verdana, Arial',
                 axisLabelPadding: 10
               },
               yaxis: {
                 ticks: 8,
                 tickColor: "rgba(51, 51, 51, 0.06)",
               },
               tooltip: false
             });
         
           function gd(year, month, day) {
             return new Date(year, month - 1, day).getTime();
           }
         });
      </script>
      <!-- /Flot -->
      <!-- bootstrap-daterangepicker -->
      <script>
         $(document).ready(function() {
         
           var cb = function(start, end, label) {
             console.log(start.toISOString(), end.toISOString(), label);
             $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
           };
         
           var optionSet1 = {
             startDate: moment().subtract(29, 'days'),
             endDate: moment(),
             minDate: '01/01/2012',
             maxDate: '12/31/2015',
             dateLimit: {
               days: 60
             },
             showDropdowns: true,
             showWeekNumbers: true,
             timePicker: false,
             timePickerIncrement: 1,
             timePicker12Hour: true,
             ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
             },
             opens: 'left',
             buttonClasses: ['btn btn-default'],
             applyClass: 'btn-small btn-primary',
             cancelClass: 'btn-small',
             format: 'MM/DD/YYYY',
             separator: ' to ',
             locale: {
               applyLabel: 'Submit',
               cancelLabel: 'Clear',
               fromLabel: 'From',
               toLabel: 'To',
               customRangeLabel: 'Custom',
               daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
               monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
               firstDay: 1
             }
           };
           $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
           $('#reportrange').daterangepicker(optionSet1, cb);
           $('#reportrange').on('show.daterangepicker', function() {
             console.log("show event fired");
           });
           $('#reportrange').on('hide.daterangepicker', function() {
             console.log("hide event fired");
           });
           $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
             console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
           });
           $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
             console.log("cancel event fired");
           });
           $('#options1').click(function() {
             $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
           });
           $('#options2').click(function() {
             $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
           });
           $('#destroy').click(function() {
             $('#reportrange').data('daterangepicker').remove();
           });
         });
      </script>
      <!-- /bootstrap-daterangepicker -->
      <!-- Datatables -->
      <script>
         $(document).ready(function() {
           var handleDataTableButtons = function() {
             if ($("#datatable-buttons").length) {
               $("#datatable-buttons").DataTable({
                 dom: "Bfrtip",
                 buttons: [
                   {
                     extend: "copy",
                     className: "btn-sm"
                   },
                   {
                     extend: "csv",
                     className: "btn-sm"
                   },
                   {
                     extend: "excel",
                     className: "btn-sm"
                   },
                   {
                     extend: "pdfHtml5",
                     className: "btn-sm"
                   },
                   {
                     extend: "print",
                     className: "btn-sm"
                   },
                 ],
                 responsive: true
               });
             }
           };
         
           TableManageButtons = function() {
             "use strict";
             return {
               init: function() {
                 handleDataTableButtons();
               }
             };
           }();
         
           $('#datatable').dataTable();
           $('#datatable-keytable').DataTable({
             keys: true
           });
         
           $('#datatable-responsive').DataTable();
         
           $('#datatable-scroller').DataTable({
             ajax: "js/datatables/json/scroller-demo.json",
             deferRender: true,
             scrollY: 380,
             scrollCollapse: true,
             scroller: true
           });
         
           var table = $('#datatable-fixed-header').DataTable({
             fixedHeader: true
           });
         
           TableManageButtons.init();
         });
      </script>
      <!-- /Datatables -->
      
      <!-- validator -->
      <script src="/vendors/validator/validator.js"></script>

      <!-- iCheck -->
      <script src="/vendors/iCheck/icheck.min.js"></script>
      <!-- validator -->
      <script>
         // initialize the validator function
         validator.message.date = 'not a real date';
         
         // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
         $('form')
           .on('blur', 'input[required], input.optional, select.required', validator.checkField)
           .on('change', 'select.required', validator.checkField)
           .on('keypress', 'input[required][pattern]', validator.keypress);
         
         $('.multi.required').on('keyup blur', 'input', function() {
           validator.checkField.apply($(this).siblings().last()[0]);
         });
         
         $('form').submit(function(e) {
           e.preventDefault();
           var submit = true;
         
           // evaluate the form using generic validaing
           if (!validator.checkAll($(this))) {
             submit = false;
           }
         
           if (submit)
             this.submit();
         
           return false;
         });
      </script>
      <!-- /validator -->

      <script>
        var slug = function(str) {
          var $slug = '';
          var trimmed = $.trim(str);
          $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
          replace(/-+/g, '-').
          replace(/^-|-$/g, '');
          return $slug.toLowerCase();
        }

        $('#category-name').keyup(function() {
          $('#category-slug').val(slug($('#category-name').val()));
        });
        $('#subcategory-name').keyup(function() {
          $('#subcategory-slug').val(slug($('#subcategory-name').val()));
        });
        
        $('#brand-name').keyup(function() {
          $('#brand-slug').val(slug($('#brand-name').val()));
        });

        $('#validity').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });

        var discount = function(percent,original) {
          return original-(original * percent/100);
        }

        $('#value').keyup(function() {
          $('#sell_price').val(discount($('#discount').val(),$('#value').val()));
        });

        $('#discount').keyup(function() {
          $('#sell_price').val(discount($('#discount').val(),$('#value').val()));
        });

        $('#card-country').change(function() {
         if($(this).val()==1){
          $('#value').attr("placeholder", "Example: 45 CHF");
         }else{
          $('#value').attr("placeholder", "Example: 45 EUR");
         }
        });
      </script>
   </body>
</html>