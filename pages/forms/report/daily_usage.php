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
  <title>ZG Grament</title>

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
  <?php
  include('component/sidebar.php');
 ?>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >All Daily Usage Record </h1>
           
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
                        
                        <th>Customer Name</th>
                        <th>Product Sale Name</th>            
                        <th>Total Amount</th>                          
                        <th>Receive Amount</th>                          
                        <th>Remaining Amount</th>                          
                        <th>Date (Y/M/D)</th>

                       
                    </tr>
                    </thead>
                    <tbody >
                    <?php
                      $ret=mysqli_query($con,"select * from  daily_usage where date between '$fdate' and '$tdate' ");
                      $num=mysqli_num_rows($ret);
                      
                      if(mysqli_num_rows($ret)>0){
                        while($_data = mysqli_fetch_array($ret)){
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
                              <!-- <td><?php echo $id?></td> -->
                              <td><?php echo $name;?></td>
                              <td><?php echo $sale_name;?></td>
                              <td><?php echo $totalamount;?></td>
                              <td><?php echo $receive;?></td>
                              <td><?php echo $remain;?></td>
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
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
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
