<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="index.php" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <!-- <a href="   index.php" class="nav-link">Home</a> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">   
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
<br>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li> -->


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy" style="font-size:14px;"></i>
              <p>
                ADD New
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/stiching.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stitching Fabric</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="pages/forms/packing.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packing Fabric</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                Record Table
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/record_fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/record_cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/record_stiching.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stitching Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/record_packing.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packing Fabric</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon 	fas fa-money-bill-alt" style="font-size:14px;"></i>
              <p>
                Salary
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/month.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract</p>
                </a>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/monthly.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthy</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon 	fas fa-money-bill-alt" style="font-size:14px;"></i>
              <p>
                Record Salary
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/record_month.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/record_monthly.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthy</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon 	far fa-sun" style="font-size:14px;"></i>
              <p>
                Factory Equipment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/add_equipment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Equipment</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/status_equipment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <?php include('pages/forms/record_fabric.php');?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
