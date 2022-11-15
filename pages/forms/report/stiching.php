<?php

@include('../Backend/connection.php');
$fdate = $tdate = "";
if(isset($_POST['submit'])){
    if(empty($_POST['date'])){
        echo "please fill all fields";
    }else{
        $fdate = $_POST['date'];
    }
    if(empty($_POST['to_date'])){
        echo "please fill all fields";
    }else{
        $tdate = $_POST['to_date'];
    }    
      
}
?>


<?php
  @include('Backend/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Cutting Record</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
    @include('../../../Components/header.php')
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
  
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


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
          <li class="nav-item menu-open">
            <a href="../../index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>

          </li>


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
                <a href="../fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../stiching.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stitching Fabric</p>
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
                <a href="../record_fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../record_cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../record_stiching.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stitching Record</p>
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
                <a href="../month.php" class="nav-link">
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
                <a href="../record_month.php" class="nav-link">
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
                <a href="../add_equipment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Equipment</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../status_equipment.php" class="nav-link">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >All Stitching Record </h1>
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <button class="btn btn-primary" onclick="window.print()">Print Report</button>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <small></small></h3>
              </div>
              <!-- /.card-header -->
                <!-- form start -->
                <h6 class="pt-4 ml-3">From Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <td><?php echo $fdate; ?> </td></h6>
                <h6 class="pb-2 pt-2 ml-3">To Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <td><?php echo  $tdate; ?></td></h6>

                <table class="table">
                   
                
                    <thead>
                    <tr>
                                
                        <th>Receieved Cut Fabric</th>                        
                        <th>Stitched Fabric</th>                        
                        <th>Date (Y/M/D)</th>

                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      $ret=mysqli_query($con,"select * from  stitch_feb where date between '$fdate' and '$tdate' ");
                      $num=mysqli_num_rows($ret);
                      
                      if(mysqli_num_rows($ret)>0){
                        while($row = mysqli_fetch_array($ret)){
                         
                          $date = $row['date'];
                          $cut_fab = $row['cut_fab'];
                          $sti_fab = $row['sti_fab'];

                          ?>
                            <tr>
                                    
                              <td><?php echo $cut_fab?></td>
                              <td><?php echo $sti_fab?></td>
                              <td><?php echo $date?></td>
                              
                            </tr>

                          <?php
                        }
                      }

                    ?>
                   
                   
                    </tbody>
                </table>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
      @include('../../../Components/footer.php');
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
