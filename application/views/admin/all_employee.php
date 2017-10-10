<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | Manage Employees</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
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

        <li class="treeview active">
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

            <li class="active">
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
        Employees
        <small>Manage employee's schedule</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li> Employees</a></li>
        <li class="active"><a href="#"><i class="fa fa-users"></i>Manage Employees</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row" style="padding: 0 5px;">
        <div class="col-md-7">
          
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Employees</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="employeeTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><input type="checkbox" class="flat-blue checkAll11"></th>
                    <th>Encoded ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th></th>
                    <th>Encoded ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-5">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4>Set employees schedule</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="row">
                <div class="col-xs-6">
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time IN:</label>

                      <div class="input-group">
                        <input type="text" id="edit-timein" class="form-control timepicker" style="color: black;">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- /.bootstrap-timepicker -->
                </div>
                <!-- /.col -->

                <div class="col-xs-6">
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time OUT:</label>

                      <div class="input-group">
                        <input type="text" id="edit-timeout" class="form-control timepicker" style="color: black;">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- /.bootstrap-timepicker -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <button class="btn btn-flat btn-primary pull-right" id="daterange-btn">Go</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
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
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<script>
   var getUsersTable = "<?php echo base_url("admin/all_employee/populateTable"); ?>"
  var confirmSelection = "<?php echo base_url("admin/all_employee/confirmSelection"); ?>"

  $('#employeeTable').DataTable( {
      'ajax': getUsersTable,
      'drawCallback': function(){
         $('input[type="checkbox"].check11').iCheck({
            checkboxClass: 'icheckbox_flat-blue'
         });
      },
      "lengthMenu": [[-1], ["All"]],
      columns: [
      { "width": "10%" },
      { "width": "20%" },
      { "width": "35%" },
      { "width": "35%" }
       ]
  });


//Red color scheme for iCheck
  $('input[type="checkbox"].flat-blue').iCheck({
    checkboxClass: 'icheckbox_flat-blue'
  })


  $('.checkAll11').on('ifChecked', function (event) {
      $('.check11').iCheck('check');
      triggeredByChild = false;
  });

  $('.checkAll11').on('ifUnchecked', function (event) {
      if (!triggeredByChild) {
          $('.check11').iCheck('uncheck');
      }
      triggeredByChild = false;
  });

  $('.check11').on('ifUnchecked', function (event) {
      triggeredByChild = true;
      $('.checkAll11').iCheck('uncheck');
  });

  $('.check11').on('ifChecked', function(event){
      if ($('.check11').filter(':checked').length == $('.check11').length) {
        $('.checkAll11').iCheck('check');

      }
  });    
    $('#get-checked-data').on('click', function(event) {
         event.preventDefault(); 
        // var checkedItems = {}, counter = 0;
        // $("#check-list-box li.active").each(function(idx, li) {
        //     checkedItems[counter] = $(li).text();
        //     counter++;
        // });
        // $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
        checkboxes = document.getElementsByName('check[]');
        $($('.check11').filter(':checked')).each(function(index, val){
        alert(val.value);
      });
    });

    //EDIT MODAL

    $('#edit-update').click(function(){
      new_encoded_id = $( "#edit-id" ).val();
      first_name = $( "#edit-firstname" ).val();
      last_name = $( "#edit-lastname" ).val();
      position = $( "#edit-position" ).val();
      timeIn = $( "#edit-timein" ).val();
      timeOut = $( "#edit-timeout" ).val();
      updateRow();
    })


    function updateRow(){ 

      $.ajax({
                url: countUrl,
                type: 'post',
                dataType: 'json', 
                data: {'table' : 'users', 'set' : 'encoded_id', 'value' : new_encoded_id  }, 
                success: function(result){
                  var employeeCount = result;    
                  if (new_encoded_id == null || new_encoded_id.trim() === ''){
                    alert('Encoded ID cannot be empty');
                  }
                  else if(employeeCount > 0 && encoded_id != new_encoded_id){
                    alert('Encoded ID already exist');
                  }
                  else{
                    $.ajax({
                      url: updateUrl,
                      type: 'post',
                      dataType: 'json', 
                      data: {
                      'table' : 'users',
                      'encoded_id' : new_encoded_id, 
                      'first_name': first_name, 
                      'last_name': last_name,  
                      'position': position, 
                      'time_in': timeIn,
                      'time_out': timeOut, 
                      'set': encoded_id }, 
                      success: function(result){
                        console.log(result);
                        populateTable();
                        $('#employee_modal').modal('hide');
                      }
                    }); 
                  }


                }
      }); 

    }

    //Timepicker

    $('.timepicker').timepicker({
      showInputs: false,
      showMeridian: false
    })
  

</script>


</body>
</html>
  