<?php
    include('../connection.php');
    $id="";
    $id = $_GET["id"];
  
    $select = mysqli_query($con,"SELECT * FROM `monthly` WHERE id=".$id);
    $edit = mysqli_fetch_assoc($select);
?>
<?php
    $emp_name = $emp_desig = $emp_pay = $date ="";
    if(isset($_POST['update'])){
  
      if(empty($_POST['emp_name'])) {
        echo "<script> alert(Please fill all field) </script>";
     }else{
      if (preg_match("/^[A-Za-z- ']*$/",$emp_name)) 
      {
        $emp_name=$_POST['emp_name'];
      }
     }
  
     if(empty($_POST['emp_desig'])) {
        echo "<script> alert(Please fill all field) </script>";
     }else{
        $emp_desig=$_POST['emp_desig'];
     }
     
     if(empty($_POST['emp_pay'])) {
        echo "<script> alert(Please fill all field) </script>";
     }else{
        $emp_pay=$_POST['emp_pay'];
     }
     
     if(empty($_POST['date'])) {
        echo "<script> alert(Please fill all field) </script>";
     }else{
        $date=$_POST['date'];
     }
     
        $edit = mysqli_query($con, "UPDATE `monthly` SET `emp_name`='$emp_name',`emp_desig`='$emp_desig',`emp_pay`='$emp_pay',`date`='$date' WHERE id=".$id);

        if($edit){
            // echo "Done";
            header("location:../../record_monthly.php");
        }else{
            echo "Query Failed";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Salaries</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../../dist/css/adminlte.min.css">
  <!-- Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- Jquery validation plug in  -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script src="../../../../dist/js/jquery-validation-1.19.5/dist/additional-methods.min.js"></script>
  <script src="../../../../dist/js/jquery-validation-1.19.5/src/additional/forselect.js"></script>
  <script src="../../../../dist/js/validation.js"></script>
  <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    .error {
      color: red;
      font-size: 14px;
      font-weight: normal;
    }
  </style>
</head>
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
    <a href="../../record_fabric.php" class="brand-link">
      <img src="../../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE </span>
    </a>
<br>
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
            <!-- <a href="../../../../index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a> -->

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
                <a href="../../fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Fabric</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../stiching.php" class="nav-link">
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
                <a href="../../record_fabric.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fabric Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../record_cutting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cutting Record</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../record_stiching.php" class="nav-link">
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
                <a href="../../month.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../monthly.php" class="nav-link">
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
                <a href="../../record_month.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../record_monthly.php" class="nav-link">
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
                <a href="../../add_equipment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Equipment</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../../status_equipment.php" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Salary <small style="font-size:11px;">Edit</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Salary</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  
                </div>
                <!-- /.card-header -->
                  <!-- form start -->
                  <form id="frm" action="" method="POST">
                    <div class="row">
                      <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                          <input type="hidden" value="<?php echo $edit['id'];?>">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="emp_name" class="form-control" id="" value="<?php echo $edit['emp_name'];?>" placeholder="Enter Employee Name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Employee Desigination</label>
                                <input type="text" name="emp_desig" class="form-control" id="" value="<?php echo $edit['emp_desig'];?>" placeholder="Enter Employee Desigination">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Pay</label>
                                <input type="number" name="emp_pay" class="form-control" id="" value="<?php echo $edit['emp_pay'];?>" placeholder="Enter Pay">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input type="date" name="date" class="form-control" id="" value="<?php echo $edit['date'];?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                  </form>
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
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php
      @include('../../../../Components/footer.php');
    ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../../dist/js/demo.js"></script>
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