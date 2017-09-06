<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | Dashboard</title>
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
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
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
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
        <li class="active">
          <a href="<?php echo site_url('employee/index'); ?>">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i><span>Attendance</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>View Data</li>
            <li>Upload File</li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i><span>Employees</span>
            <span class="pull-right-container"></span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Manage Employees</a></li>
            <li><a href="#">Leaderboard</a></li>
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
        Dashboard
        <small>Time ins and time outs for the past month</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row" style="padding: 0 5px;">
        <div class="col-md-4">
          <div class="small-box bg-green" data-toggle="modal" data-target="#stem" style="cursor: pointer;">
            <div class="inner">
              <h3>154</h3>

              <h4>Total Hours Worked <br>For This Month</h4>
            </div>
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- /.small-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="small-box bg-maroon" data-toggle="modal" data-target="#gas" style="cursor: pointer;">
            <div class="inner">
              <h3>45</h3>

              <h4>Total Minutes Late<br>For This Month</h4>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- /.small-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="small-box bg-yellow" data-toggle="modal" data-target="#humss" style="cursor: pointer;">
            <div class="inner">
              <h3>12</h3>

              <h4>Total Hours Overtimed<br>For This Month</h4>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- /.small-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row" style="padding: 0 5px;">
        <div class="col-md-7">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Time In and Time Outs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                  <th>Hours Worked</th>
                  <th>Work Duration</th>
                  <th>Late By</th>
                  <th>Over Time</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>June 24, 2017</td>
                  <td>8:38 AM</td>
                  <td>7:30 PM</td>
                  <td>8</td>
                  <td>8:30 AM - 5:30 PM</td>
                  <td>8 minutes</td>
                  <td>2 hours</td>
                  <td>Complete</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-5">

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="row" style="padding: 0 10px;">
                <div class="col-md-1">
                  <div class="pull-left">
                    <i class="fa fa-square fa-2x" style="color:rgba(210, 214, 222, 1);" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-md-5" style="padding-top: 3px; margin-left: -10px;">Late</div>
            
                <div class="col-md-1">
                  <div>
                    <i class="fa fa-square fa-2x" style="color: darkred;" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="col-md-5" style="padding-top: 3px; margin-left: -10px;">Over Time</div>
              </div>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="box box-primary">
            <div  class="box-body" style = "border-width: 1px; border-style: solid; border-color: #f1f1f1;  height: 296px; max-height: 296;">
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
              <p>Max of 250 characters only.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


      


      

    </section>
    <!-- /.content -->
  </div>
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
  $(function () {
    //-------------
    //- BAR CHART -
    //-------------
    var areaChartData = {
      labels  : ['2016', '2017', '2018', '2019'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [400, 500, 600, 700]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : 'darkgrey',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [300, 400, 500, 600]
        }
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = 'darkred'
    barChartData.datasets[1].strokeColor = 'darkred'
    barChartData.datasets[1].pointColor  = 'darkred'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    
  })
</script>
</body>
</html>