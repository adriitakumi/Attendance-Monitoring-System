<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis | Attendance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('employee/index') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SL</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Silverlake</b>Axis</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="user-image" alt="<?php echo base_url('images/alt_picture.jpg');?>">
              <span class="hidden-xs"><?php echo ucwords($this->session->first_name." ".$this->session->last_name) ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">

                <p>
                 <?php echo ucwords($this->session->first_name." ".$this->session->last_name." - ".$this->session->position) ?>
                  <small>Member since <?php echo $this->session->date_created ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('employee/profile') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">
        </div>
        <div class="pull-left info">
          <p><?php echo ucwords($this->session->first_name." ".$this->session->last_name) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('employee/index'); ?>">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo site_url('employee/attendance'); ?>">
            <i class="fa fa-calendar"></i>
            <span>Attendance</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('employee/view_ranges');?>">
            <i class="fa fa-list"></i>
            <span>View Ranges</span>
          </a>
        </li>
        <li class="header">LABELS</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Attendance
        <small>Monitor your time ins and time outs</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-calendar"></i>Attendance</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-md-4">
        <!-- Calendar -->
        <div class="box box-primary hidden-print">
          <div class="box-header bg-light-blue-active" style="color: white;">
            <i class="fa fa-calendar"></i>

            <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            <div class="row">

              <div class="col-md-6 text-center">
                <div class="box box-primary box-solid hidden-print">
                  <div class="box-header with-border">
                    <h3 class="box-title">Time In</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body timeIn">
                    <p class="dailyTimeIn"></p>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->

              <div class="col-md-6 text-center">
                <div class="box box-primary box-solid hidden-print">
                  <div class="box-header with-border">
                    <h3 class="box-title">Time Out</h3>
                  </div>
                  <!-- /.box-header -->

                  <div class="box-body timeOut">
                    <p class="dailyTimeOut"></p>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->

            </div>
            <!-- /.row -->


          <div>
            <button type="button" class="btn btn-lg btn-warning hidden-print" style="width:100%; margin-bottom: 10px;" onclick="window.print()">Print</button>
            <button type="button" class="btn btn-lg btn-success hidden-print" style="width:100%; margin-bottom: 10px;">Export to Excel</button>
            <button type="button" class="btn btn-lg btn-danger hidden-print" style="width:100%; margin-bottom: 10px;">Export to PDF</button>
          </div>

          

        </div>
        <!-- /.col -->

        <div class="col-md-8">
          <div class="box box-default boxes bg-gray box-solid" id="noDate">
            <div class="box-body" style="padding: 20px 40px 40px 40px; ">
              <h2><i class="fa fa-exclamation-triangle" style="margin-right: 10px;"></i>No date selected!</h2>
              <h4>Please click on a date in the calendar to show records for that day.</h4>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-default bg-gray box-solid" id="noRecords" style="display: none;">
            <div class="box-body" style="padding: 20px 40px 40px 40px; ">
              <h2><i class="fa fa-exclamation-triangle" style="margin-right: 10px;"></i>Sorry!</h2>
              <h4>There are no records for the selected date.</h4>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box boxes box-primary" id="ehh" style="display: none;">
            <div class="box-header">
              <h3 class="box-title">Time In and Time Outs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Encoded ID</th>
                  <th>Date</th>
                  <th>Person</th>
                  <th>Door</th>
                </tr>
                </thead>
                <tbody id="tbody">
                <tr class="records">
                  <td>qwert</td>
                  <td>qwert</td>
                  <td>qwer</td>
                  <td>srty</td>
                </tr> 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo site_url('employee/Dashboard')?>">Silverlake Axis</a>.</strong> All rights
    reserved.
  </footer>

 </div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<script>
  // The Calender
  $('#calendar').datepicker().on('changeDate', function(event) {
  // `e` here contains the extra attributes
  var date = event.format();
  var arr = date.split("/");
  var m = arr[0]; 
  var d = arr[1]; 
  var y = arr[2];
  var newDate = y+'-'+m+'-'+d; 
  var ajaxUrl = "<?php echo base_url("employee/ajax"); ?>"
  var ajaxMinUrl = "<?php echo base_url("employee/ajaxMinUrl"); ?>"
  var ajaxMaxUrl = "<?php echo base_url("employee/ajaxMaxUrl"); ?>"


  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : newDate, 'table': 'csv', 'set': 'Date', 'wildcard': 'after'}, 
            success: function(result){
              
              var leng = result.length;
              var des = $('#example1').DataTable();

              if (leng!=0){

                $('#noDate').hide();
                $('#noRecords').hide();
                $('#recordTable').show();
                $('.records').hide();
                $('#example1').DataTable();
                $('#ehh').css( 'display', 'block' );

                $.each(result, function(index, val){
                  $('#tbody').append('<tr class="records"><td>'+val.Date+'</td><td>'+val.Person+'</td><td> '+val.encoded_id+'</td><td> '+val.Door+'</td> </tr>');
                });

              } else {

                $('#noRecords').css( 'display', 'block' );
                $('.boxes').css('display','none');
                $('#example1').DataTable().destroy();
                $('.dailyTimeIn').html(" ");
                $('.dailyTimeOut').html(" ");
             

            }

           



              $.ajax({
                        url: ajaxMinUrl,
                        type: 'post',
                        dataType: 'json', 
                        data: {'value' : newDate, 'table': 'csv', 'set': 'Date', 'wildcard': 'after'}, 
                        success: function(result){
                          var timeIn = JSON.stringify(result);
                          var splitDate = timeIn.split(" ");
                          var newerDate = splitDate[1];
                          var eh = newerDate.split("");
                          var h1 = eh[0];
                          var h2 = eh[1];
                          var colon = eh[2];
                          var m1 = eh[3];
                          var m2 = eh[4];
                          var newestDate = h1+h2+colon+m1+m2;

                          $('.dailyTimeIn').hide();
                          $('.timeIn').append('<p class="dailyTimeIn">'+newestDate+'</p>');
                          
                        }
              });

              $.ajax({
                        url: ajaxMaxUrl,
                        type: 'post',
                        dataType: 'json', 
                        data: {'value' : newDate, 'table': 'csv', 'set': 'Date', 'wildcard': 'after'}, 
                        success: function(result){
                          var timeOut = JSON.stringify(result);
                          var splitDate = timeOut.split(" ");
                          var newerDate = splitDate[1];
                          var eh = newerDate.split("");
                          var h1 = eh[0];
                          var h2 = eh[1];
                          var colon = eh[2];
                          var m1 = eh[3];
                          var m2 = eh[4];
                          var newestDate = h1+h2+colon+m1+m2;

                          $('.dailyTimeOut').hide();
                          $('.timeOut').append('<p class="dailyTimeOut">'+newestDate+'</p>');
                          
                        }
              });

              /*var timeIn = $daily;
              alert(timeIn);

              $('.daily').hide();
              $('.dailyTimeIn').append('<p class="daily">'+val.timeIn+'</p>');*/



              //$.ajax({
                       // url: ajaxMinUrl,
                       // type: 'post',
                        //dataType: 'json', 
                        //data: {RESULT NUNG NAUNANG AJAX DAPAT DITO}, 
                        //success: function(result){
                          //tapos bale hahanapin niya yung first column, tas dun siya mag eexecute ng query na $this->db->select_min
                         // $('.daily').hide();
                         // $('.dailyTimeIn').append('<p class="daily">TITE</p>');
                       // }
              //});

            }
          });

});
</script>

</body>
</html>
