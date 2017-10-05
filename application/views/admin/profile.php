<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ucwords($this->session->first_name." ".$this->session->last_name) ?> | Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
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

        <li>
          <a href="<?php echo site_url('admin/generate_report');?>">
            <i class="fa fa-file"></i> Generate Report
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
        Profile
        <small>Everything about you</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</li>
        <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-1">
        </div>

      	<div class="col-md-10">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <h3><?php echo ucwords($this->session->first_name." ".$this->session->last_name)?></h3>
              <h5><?php echo ucwords($this->session->position) ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">LATES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">TOTAL HOURS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">OVER TIME</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->

          <div class="box">
            <div class="box-header">
              <h3 style="margin-left: 55px;">Account</h3>
            </div>
            <div class="content" style="margin-bottom: -130px;">
              <div class="row" style="margin-left: 40px;">

                <div class="col-md-4">
                  <h4>Email:</h4>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <h4><?php echo ($this->session->email)?></h4>                  
                </div> 
                <!-- /.col -->

              </div>
              <!-- /.row -->

              <div class="row" style="margin-left: 40px;">
              
                <div class="col-md-4">
                  <h4>Password:</h4>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <h4><a href="#"><u><i>change password</i></u></a></h4>                  
                </div> 
                <!-- /.col -->

              </div>
              <!-- /.row -->
            </div>
            <!-- /.content -->

            <hr style="width: 90%; border-style: inset; border-width: 1px;">
            <h3 style="margin-left: 60px;">Personal</h3>
            <div class="content">

              <div class="row" style="margin-left: 40px;">
                <div class="col-md-4">
                  <h4>Name:</h4>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <h4><?php echo ucwords($this->session->first_name." ".$this->session->last_name)?></h4>                  
                </div> 
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row" style="margin-left: 40px;">              
                <div class="col-md-4">
                  <h4>Position:</h4>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <h4><?php echo ucwords($this->session->position)?></h4>                  
                </div> 
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row" style="margin-left: 40px;">              
                <div class="col-md-4">
                  <h4>Contact No:</h4>
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                  <h4><?php echo ucwords($this->session->contact_number)?>  </h4>                  
                </div> 
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <a href="#profile" class="btn btn-primary pull-right" data-toggle="modal" style="margin-right: 40px;">Edit Personal</a>


            </div>
            <!-- /.content -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      	<div class="col-md-1">
      	</div>
      	
      </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<div class="modal modal-primary fade" id="profile">
  <div class="modal-dialog" style="align-self: center; max-width: 500px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Profile</h4>
      </div>
      <div class="modal-body modal-profile">
        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg'); ?>" alt="User profile picture">
        <h3 id="name" class="profile-username text-center" ><?php echo ucwords($this->session->first_name." ".$this->session->last_name)?></h3>
        <p class="text-center" id="position" style="margin-top: -10px;"><?php echo ucwords($this->session->position)?></p>
        <input type ="file" name="dpfile">
        <hr>
        <p class="text-bold" style="margin-top: -15px;"> Personal</p>
        <div class="row" style="margin-left: 10px; margin-bottom: 15px;">
          <div class="col-md-4" style="margin-bottom: 10px;">
          Name:
          </div>
          <div class="col-md-6">
          <?php echo ucwords($this->session->first_name." ".$this->session->last_name)?>
          </div>
        </div>
        <div class="row" style="margin-left: 10px; margin-bottom: 15px;">
          <div class="col-md-4" style="margin-bottom: 10px;">
          Position:
          </div>
          <div class="col-md-6">
          <?php echo ucwords($this->session->position)?>
          </div>
        </div>
        <div class="row" style="margin-left: 10px; margin-bottom: 15px;">
          <div class="col-md-4" style="margin-bottom: 10px;">
            Email:
          </div>
          <div class="col-md-6">
            <?php echo ($this->session->email)?>
          </div>
        </div>
        <div class="row" style="margin-left: 10px; margin-bottom: 15px;">
          <div class="col-md-4" style="margin-bottom: 20px;">
          Contact No:
          </div>
          <div class="col-md-6" style="padding-bottom: : 10px;">
            <input type="text" class="form-control" value="<?php echo $this->session->contact_number?>">
          </div>
        </div>
        
        <hr style="margin-top: 2px;">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline">Save</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

</body>
</html>
