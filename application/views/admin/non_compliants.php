<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | Generated Report</title>
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
  <!-- Datatable buttons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/buttons.dataTables.min.css">
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

        <li class="treeview">
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

            <li>
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

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Reports</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active">
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
        Generate Report
        <small>Select Employees and Date Range</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-file"></i>Generate Report</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      
      <div class="row">
        <div class="col-md-12">

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li><a href="#tab_1-1" data-toggle="tab">Late and Early Out</a></li>
              <li><a href="#tab_2-1" data-toggle="tab">Early Out</a></li>
              <li><a href="#tab_3-1" data-toggle="tab">Late</a></li>
              <li class="active"><a href="#tab_4-1" data-toggle="tab">All</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> Non-Compliants</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <table id="otalTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-1">
                <table id="eoTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-1">
                <table id="lateTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Name</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4-1">
                <table id="allTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Door IN</th>
                      <th>Time IN</th>
                      <th>Door OUT</th>
                      <th>Time OUT</th>
                      <th>Non-Compliance</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo site_url('admin/dashboard')?>">Silverlake Axis</a>.</strong> All rights
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTable buttons -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<script>
  var dtLate = <?php echo $dtLate ?>;
  var dtEarlyOut = <?php echo $dtEarlyOut ?>;
  var dtOtal = <?php echo $dtOtal ?>;
  var dtAll = <?php echo $dtAll ?>;

    $('#otalTable').DataTable( {
          data: dtOtal,
          dom: 'Bfrtip',
          buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });

    $('#eoTable').DataTable( {
          data: dtEarlyOut,
          dom: 'Bfrtip',
          buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });

    $('#lateTable').DataTable( {
          data: dtLate,
          dom: 'Bfrtip',
          buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });

    $('#allTable').DataTable( {
          data: dtAll,
          dom: 'Bfrtip',
          buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
          ],
          "order": [[ 0, 'asc' ], [ 1, 'asc' ], [ 6, 'desc' ]]
    });
</script>

</body>
</html>
