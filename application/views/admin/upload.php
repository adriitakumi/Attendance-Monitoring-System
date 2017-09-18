<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | Attendance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/upload.css">

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
    <a href="<?php echo site_url('admin/index') ?>" class="logo">
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
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <a href="<?php echo site_url('admin/index'); ?>">
            <i class="fa fa-dashboard"></i><span> Dashboard</span>
          </a>
        </li>

        <li class="treeview active">
          <a href="#"><i class="fa fa-calendar"></i><span> Attendance</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('admin/upload_file');?> "><i class="fa fa-circle-o"></i> Upload File</a></li>
            <li><a href="<?php echo site_url('admin/view_list');?>"><i class="fa fa-circle-o"></i> View Data</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i><span> Employees</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('admin/manage_employees');?>"><i class="fa fa-circle-o"></i> Manage Employees</a></li>
            <li><a href="<?php echo site_url('admin/leaderboard');?>"><i class="fa fa-circle-o"></i> Leaderboard</a></li>
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
        <small>Upload time ins and time outs of Employees</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li> Attendance</a></li>
        <li class="active"><a href="#"><i class="fa fa-file"></i>Upload File</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Upload <strong>.CSV</strong> Files</div>
                <div class="panel-body" style="height: 200%">
                  <!-- Standard Form -->
                  <h4>Select files from your computer</h4>
                  <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                    <div class="form-inline">
                      <div class="form-group">
                        <input type="file" name="files[]" id="js-upload-files" accept=".csv" multiple>
                      </div>
                      <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                    </div>
                  </form>
                  <!-- Drop Zone -->
                  <h4>Or drag and drop files below</h4>
                  <div class="upload-drop-zone" id="drop-zone">
                    Select files from your computer &nbsp;
                    <input type="file" name="files[]" id="js-upload-files" accept=".csv" multiple>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /container --> 
    </section>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>

<script>
$(document).ready(function(){ 

        $(".buttonView").click(function(){
          var lrn = $(this).closest('tr').find('td:eq(0)').html(); 
          $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'username' : username, 'table': 'users', 'set': 'username' }, 
            success: function(result){
              //alert(result);
              $.each(result, function(index, val) {
                $('#name').html(val.first_name +" "+ val.middle_name + " " + val.last_name);
                $('#lrn').html(val.lrn);
                $('#contact').html(val.contact);
                $('#birth_date').html(val.birth_date);
                $('#birth_place').html(val.birth_place);
                $('#age').html(val.age);
                $('#mother_tongue').html(val.mother_tongue);
                $('#religion').html(val.religion);
                $('#street').html(val.street);
                $('#barangay').html(val.barangay+", ");
                $('#city').html(val.city);
                $('#province').html(val.province);
                $('#sex').html(val.sex);
                $('#father_name').html(val.father_name);
                $('#father_contact').html(val.father_contact);
                $('#mother_name').html(val.mother_name);
                $('#mother_contact').html(val.mother_contact);
                $('#guardian').html(val.guardian);
                $('#relationship').html(val.relationship);
                $('#guardian_contact').html(val.guardian_contact);  
                $('#position').html('Grade '+val.grade+' Student');  
                $('#modal-note').html(val.note);                   
                $('.requirements-section').show();                     
                $('#input-submit').show();                
                $('#input-lrn').val(val.lrn);  
              })
            }
          });

          $.ajax({
            url: ajaxReqUrl,
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn, 'table': 'requirements', 'set': 'lrn' }, 
            success: function(result){
              //alert(result);
              var requirements = [];
              $.each(result, function(index, val) {
               //alert(val.requirement);
               requirements.push(val.requirement);

              });
              $('#modal-requirements').val(requirements);
              $('#modal-requirements').val(requirements).trigger('change')       
            }
          });
        });
</script>
<script type="text/javascript">
+ function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault()

        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

}(jQuery);
</script>

<script>
  
</script>
</body>
</html>
