<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | View List</title>
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
    <a href="<?php echo site_url('admin/dashboard') ?>" class="logo">
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
                  <a href="<?php echo site_url('admin/view_profile') ?>" class="btn btn-default btn-flat">Profile</a>
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
          <p><?php echo ucwords ($this->session->first_name." ".$this->session->last_name) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
          <a href="<?php echo site_url('admin/dashboard'); ?>">
            <i class="fa fa-dashboard"></i><span> Dashboard</span>
          </a>
        </li>

        <li class="treeview active">
          <a href="#"><i class="fa fa-calendar"></i><span> Attendance</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('admin/upload');?>">
                <i class="fa fa-circle-o"></i> Upload File
              </a>
            </li>

            <li class="active">
              <a href="<?php echo site_url('admin/view_list');?>">
                <i class="fa fa-circle-o"></i> View List
              </a>
            </li>

            <li>
              <a href="<?php echo site_url('admin/view_ranges');?>">
                <i class="fa fa-circle-o"></i> View Ranges
              </a>
            </li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Manage Employees</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('admin/manage_employees');?>">
                <i class="fa fa-circle-o"></i> Specific Employee
              </a>
            </li>

            <li>
              <a href="<?php echo site_url('admin/all_employee')?>">
                <i class="fa fa-circle-o"></i> All Employee
              </a>
            </li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Reports</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('admin/non_compliance_report');?>">
                <i class="fa fa-circle-o"></i> Non-Compliance Report
              </a>
            </li>

            <li>
              <a href="<?php echo site_url('admin/generate_report')?>">
                <i class="fa fa-circle-o"></i> Employee Report
              </a>
            </li>

          </ul>
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
        <small>List of Time ins and time outs of Employees</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li> Attendance</a></li>
        <li class="active"><a href="#"><i class="fa fa-list"></i>View List</a></li>
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

          
        </div>
        <!-- /.col -->

        <div class="col-md-8">
          <div class="box box-default boxes bg-gray box-solid" id="noDate" >
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

          <div class="box boxes box-primary" id="boxTable" style="display: none;">
            <div class="box-header">
              <h3 class="box-title">Time In and Time Outs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="recordsTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Encoded ID</th>
                    <th>Time IN</th>
                    <th>Time OUT</th>
                    <th>Overtime</th>
                    <th>Late</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Encoded ID</th>
                    <th>Time IN</th>
                    <th>Time OUT</th>
                    <th>Overtime</th>
                    <th>Late</th>
                  </tr>
                </tfoot>
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
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo site_url('admin/Dashboard')?>">Silverlake Axis</a>.</strong> All rights
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
  var encoded_id = "<?php echo $this->session->encoded_id ?>";
  console.log(encoded_id);
  var ajaxPopulateTable = "<?php echo base_url("admin/view_list/populateTable"); ?>"
  var ajaxMinUrl = "<?php echo base_url("employee/attendance/ajaxMinUrl"); ?>"
  var ajaxMaxUrl = "<?php echo base_url("employee/attendance/ajaxMaxUrl"); ?>"


  $.ajax({
            url: ajaxPopulateTable,
            type: 'post',
            dataType: 'json', 
            data: {'dbDate': newDate}, 
            success: function(result){
              //alert(JSON.stringify(result));
              
              var leng = result.length;
              
              if (leng!=0)
                {
                $('#noDate').hide();
                $('#noRecords').hide();
                $('#boxTable').css( 'display', 'block' );

                $('#recordsTable').DataTable().destroy();

                $('#recordsTable').DataTable( {
                              data: result,
                              columns: [
                                  { "width": "25%" },
                                  { "width": "15%" },
                                  { "width": "15%" },
                                  { "width": "15%" },
                                  { "width": "15%" },
                                  { "width": "15%" }
                              ]
                          });

              } else {

                $('#noRecords').css( 'display', 'block' );
                $('.boxes').css('display','none');
                $('#example1').DataTable().destroy();
                $('.dailyTimeIn').html(" ");
                $('.dailyTimeOut').html(" ");
             

            }

            }
          });

});
</script>

</body>
</html>
