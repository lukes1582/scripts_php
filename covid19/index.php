<!DOCTYPE html>
<html lang="it">
<?php     /*
    creato da l0m1s - lukes1582@gmail.com
    ***/

    echo "<!-- creato da l0m1s - lukes1582@gmail.com
     -->";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Covid-19 RaCIS</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="mod_visual/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="mod_visual/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">

      </li>
      <li class="nav-item">

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="mod_visual/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Zeus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <a href="#" class="d-block"> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php include  'menu_sx.php'; ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">COVID-19 Index</h1>
          </div><!-- /.col -->


          <div class="col-sm-6">
            <!--
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="col-md-12">
             <!-- AREA CHART ####################################################################  -->
             <div class="card card-primary">
               <div class="card-header">
                 <h3 class="card-title">Area Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="areaChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->

             <!-- DONUT CHART ####################################################################  -->
             <div class="card card-danger">
               <div class="card-header">
                 <h3 class="card-title">Donut Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <canvas id="donutChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->

             <!-- PIE CHART ####################################################################  -->
             <div class="card card-danger">
               <div class="card-header">
                 <h3 class="card-title">Pie Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <canvas id="pieChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->

           </div>
           <!-- /.col (LEFT) -->
           <div class="col-md-12">
             <!-- LINE CHART ####################################################################  -->
             <div class="card card-info">
               <div class="card-header">
                 <h3 class="card-title">Line Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="lineChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->

             <!-- BAR CHART ####################################################################   -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">Bar Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="barChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->

             <!-- STACKED BAR CHART ####################################################################  -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">Stacked Bar Chart</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="stackedBarChart" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                 </div>
               </div>
               <!-- /.card-body -->
             </div>


             <!-- /.card -->
             <div class="card card-success">
               <div class="card-header">
                 <h3 class="card-title">prova</h3>

                 <div class="card-tools">
                   <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                 </div>
               </div>
               <div class="card-body">
                 <div class="chart">
                   <canvas id="mycanvas" style="min-height: 250px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                 </div>
               </div>
           </div>
           <!-- /.col (RIGHT) -->
         </div>
         <!-- /.row -->
       </div><!-- /.container-fluid -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. Project open source.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="mod_visual/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="mod_visual/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="mod_visual/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="mod_visual/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="mod_visual/dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript" src="app.js"></script>



<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>


</body>
</html>
