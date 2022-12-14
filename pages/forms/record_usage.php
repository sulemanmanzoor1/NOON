<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZG Grament</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- search -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
    @include('../../Components/header.php')
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
    @include('../../Components/sidebar.php')
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Daily Usage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="../../index.php">Home</a></li> -->
              <li class="breadcrumb-item active">All Usage</li>
              <li class="breadcrumb-item active"><a href="add_usage.php">Add Daily Usage</a></li>
              <li class="breadcrumb-item active"><a href="dail_usage_report.php">Daily Usage Report</a></li>
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
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID #</th>
                        <th>Customer Name</th>
                        <th>Product sale Name</th>            
                        <th>Total Amount</th>                       
                        <th>Receive Amount</th>                       
                        <th>Remaining Amount</th>                       
                        <th>Date (Y/M/D)</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    <?php

                      @include('Backend/connection.php');

                      $query = mysqli_query($con,"SELECT * FROM `daily_usage` "); 
                      
                      if(mysqli_num_rows($query) > 0){

                        while($_data = mysqli_fetch_array($query)){
                          $id            = $_data['id'];
                          $name          = $_data['name'];
                          $sale_name     = $_data['sale_name'];
                          $totalamount   = $_data['totalamount'];
                          $receive       = $_data['receive'];
                          $date          = $_data['date'];

                          ?>
                            <tr>
                              <?php
                                $remain = $totalamount - $receive;
                              ?>
                              <td><?php echo $id?></td>
                              <td><?php echo $name?></td>
                              <td><?php echo $sale_name?></td>
                              <td><?php echo $totalamount?></td>
                              <td><?php echo $receive?></td>
                              <td><?php echo $remain?></td>
                              <td><?php echo $date?></td>
                              <td>
                                <a href="Backend/edit/daily_usage.php?id=<?php echo $id?>" style="color:orange"><i class="fa fa-edit mr-2"></i></a>
                                <a href="Backend/delete/daily_usage.php?id=<?php echo $id?>" style="color:red"><i class="fa fa-trash"></i></a>
                                
                              </td>
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
      @include('../../Components/footer.php');
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
