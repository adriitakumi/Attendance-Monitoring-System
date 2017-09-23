<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SilverLake Axis  | View Ranges</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
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
    <a href="<?php echo site_url('employee/dashboard') ?>" class="logo">
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
          <p><?php echo ucwords ($this->session->first_name." ".$this->session->last_name) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('employee/dashboard'); ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('employee/attendance'); ?>">
            <i class="fa fa-calendar"></i>
            <span>Attendance</span>
          </a>
        </li>
        <li class="active">
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
        View Ranges
        <small>Time ins and time outs</small>
      </h1>
      <ol class="breadcrumb">
        <li> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-list"></i>View Ranges</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="padding: 0 5px;">
        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Time in and Time out for Specific Range:</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <button class="btn btn-flat btn-primary pull-right" id="daterange-btn">Go</button>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->

        <div class="col-md-8">
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
                      <th>Time IN</th>
                      <th>Time OUT</th>
                      <th>Overtime</th>
                      <th>Late</th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <tr id="records">
                      <td id="first">August 16, 2017</td>
                      <td id="second">08:20:30</td>
                      <td id="third">18:20:30</td>
                      <td>2</td>
                      <td>3</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>


<script type="text/javascript">
var startDate;
var endDate;

$(document).ready(function() {
    $('#reservation').daterangepicker(
       {
          startDate: moment().subtract('days', 29),
          endDate: moment(),
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'DD/MM/YYYY'
       },
       function(start, end) {
        console.log("Callback has been called!");
        $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
        startDate = start;
         endDate = end;    

       }
    );

    //Set the initial state of the picker label
    $('#reservation span').html(moment().subtract(29, 'days').format('D MMMM YYYY') + ' - ' + moment().format('D MMMM YYYY'));


    $('#daterange-btn').click(function(){

        $('.records').remove();

        //console.log(startDate.format('D MMMM YYYY') + ' - ' + endDate.format('D MMMM YYYY'));
        var lolo = startDate.format('YYYY'+'-'+'MM'+'-'+'DD');
        var lola = endDate.format('YYYY'+'-'+'MM'+'-'+'DD');
        //console.log("date1: "+lolo);
        //console.log("date2: "+lola);
        var ajaxArrObj = "<?php echo base_url("employee/view_ranges/ajaxArrObj"); ?>"
        var ajaxMinUrl = "<?php echo base_url("employee/view_ranges/ajaxMinUrl"); ?>"
        var ajaxMaxUrl = "<?php echo base_url("employee/view_ranges/ajaxMaxUrl"); ?>"

        


        $.ajax({
            url: ajaxArrObj,
            type: 'post',
            dataType: 'json', 
            data: {'date1' : lolo, 'date2': lola}, 
            success: function(result){
              var newestTimeIn;
              var newestTimeOut;   //MAACCESS ETO NI AJAX 3

              //console.log("ajax 1 result: "+result);
              //console.log("newestDateIn result: "+newestDateIn);
              //console.log("newestDateOut result: "+newestDateOut);

            
              $.each(result, function(index, val){
                    var strDate = val.split("");
                    var y1 = strDate[0];
                    var y2 = strDate[1];
                    var y3 = strDate[2];
                    var y4 = strDate[3];
                    var m1 = strDate[4];
                    var m2 = strDate[5];
                    var d1 = strDate[6];
                    var d2 = strDate[7];
                    var newStrDate = y1+y2+y3+y4+'-'+m1+m2+'-'+d1+d2;
                    var tableDate = m1+m2+'-'+d1+d2+'-'+y1+y2+y3+y4;

                    $.ajax({
                        url: ajaxMinUrl,
                        type: 'post',
                        dataType: 'json', 
                        data: {'value': newStrDate, 'table': 'csv', 'set': 'Date', 'wildcard': 'after'}, 
                        success: function(result2){
                          
                          var dateTime = JSON.stringify(result2);
                            console.log(dateTime);

                            if(dateTime != '[{"Date":null}]'){
                              var splitDate = dateTime.split(" ");
                                //console.log(splitDate[1]);
                              var newerTime = splitDate[1].replace('"}]',' ');
                                //console.log(newerTime);

                              var newestTime = newerTime.split(":");
                              var timeIn = newestTime[0]+':'+newestTime[1];

                              newestTimeIn = timeIn; //ASSIGN MO SA VARIABLE newestDateIn
                                //console.log(newestDateIn);                              
                            }
                          

                      }
                    });

                    $.ajax({
                          url: ajaxMaxUrl,
                          type: 'post',
                          dataType: 'json', 
                          data: {'value' : newStrDate, 'table': 'csv', 'set': 'Date', 'wildcard': 'after'}, 
                          success: function(result3){
                            var dateTime = JSON.stringify(result3);
                            if(dateTime != '[{"Date":null}]'){
                              var splitDate = dateTime.split(" ");
                              //console.log(splitDate[1]);
                              var newerTime = splitDate[1].replace('"}]',' ');
                              var newestTime = newerTime.split(":");
                              var timeOut = newestTime[0]+':'+newestTime[1];
                              newestTimeOut = timeOut;

                              //console.log(newestDateIn);
                              //console.log(newestDateOut);



                              $('#records').hide();
                              $('#example1').DataTable();

                              $('#tbody').append('<tr class="records"><td class="first">'+tableDate+'</td><td class="second">'+newestTimeIn+'</td><td class="third">'+newestTimeOut+'</td><td></tr>');
                            }
                          }
                    });


                    

              });




            }
        });

    });
});
</script> 

</body>
</html>
