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
            <li class="active">
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
        <div class="col-md-12">
          
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Employees</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="employeeTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Encoded ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Time IN</th>
                    <th>Time OUT</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Encoded ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Time IN</th>
                    <th>Time OUT</th>
                    <th>Action</th>
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
<!-- ./wrapper -->


<div class="modal modal-primary fade" id="employee_modal">
  <div class="modal-dialog" style="max-width: 400px;">
    <div class="modal-content">
      <form>

      <div class="modal-header">
        <h4 class="modal-title">Manage Schedule</h4>
      </div>

      <div class="inner" style="padding: 20px;">
          <div class="form-group">
            <label>Encoded ID:</label>
            <input type="text" id="edit-id" class="form-control">
          </div>

          <div class="row">
            <div class="col-xs-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" id="edit-firstname" class="form-control">
              </div>
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label>Last Name:</label>
                <input type="text" id="edit-lastname" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>Position:</label>
            <input type="text" id="edit-position" class="form-control">
          </div>

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
        </div>
        <!-- /.modal-body -->

        <div class="modal-footer">
          <a href="#" class="btn btn-sm btn-danger pull-left" data-dismiss="modal" style="width: 100px">Close</a>
          <button id="edit-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-success pull-right">Update</button>
        </div>
        <!-- /.modal-footer -->

      </form>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


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
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<script>
    var encoded_id;
    var new_encoded_id;
    var first_name;
    var last_name;
    var position;
    var timeIn;
    var timeOut;


    var ajaxPopulateTable = "<?php echo base_url("admin/manage_employees/populateTable"); ?>";
    var getRowUrl = "<?php echo base_url("admin/manage_employees/ajaxGetRow"); ?>";
    var countUrl = "<?php echo base_url("admin/manage_employees/ajaxCountRow"); ?>";
    var updateUrl = "<?php echo base_url("admin/manage_employees/ajaxUpdate"); ?>";

    $(function () {
   populateTable();
    })

    function populateTable(){
  
    $('#employeeTable').DataTable().destroy();

    $('#employeeTable').DataTable({
      "columns": [
          { "width": "15%" },
          { "width": "25%" },
          { "width": "15%" },
          { "width": "15%" },
          { "width": "15%" },
          { "width": "15%" }
          ],
          "order": [] ,
          "ajax": ajaxPopulateTable
    });

    $("#employeeTable").on("click", "tr td .edit-btn", function(){

    encoded_id = $(this).parents('tr').find('td:first').html();
    console.log(encoded_id);

    $.ajax({
            url: getRowUrl,
            type: 'post',
            dataType: 'json', 
            data: {'table' : 'users', 'set': 'encoded_id', 'value': encoded_id}, 
            success: function(result){   

              $.each(result, function(index, val) {

                encoded_id = val.encoded_id;
                //console.log(val.encoded_id);
                $( "#edit-id" ).val(val.encoded_id);
                $( "#edit-firstname" ).val(val.first_name);
                $( "#edit-lastname" ).val(val.last_name);
                $( "#edit-position" ).val(val.position);
                $( "#edit-timein" ).val(val.time_in);
                $( "#edit-timeout" ).val(val.time_out);
            })
     
              
            }
          });   
    });

  }

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
  