<?php
    include('../connection.php');
    $id="";
    $id = $_GET["id"];
  
    $select = mysqli_query($con,"SELECT * FROM `salary` WHERE id=".$id);
    $edit = mysqli_fetch_assoc($select);
?>
<?php
    $name = $services = $price ="";
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        if(empty($_POST['name'])) {
            echo "<script> alert(Please fill all field) </script>";
        }else{
            $name=$_POST['name'];
        }

        foreach ($services = ($_POST['services']) as $ser) {
            $value_ser[] = $ser;
            $ser = implode(",", $value_ser);
        }


        foreach ($price = ($_POST['price']) as $pr) {
            $value_pr[] = $pr;
            $pr = implode(",", $value_pr);
        }
    
        // foreach($services = ($_POST['services']) as $ss){
        //     $value_s[] = $ss;
        //     $s = implode(",", $value_s);
        //  }
        //  foreach($price = ($_POST['price']) as $pr){
        //     $value_p[] = $pr;
        //     $p = implode(",", $value_p);
        //  }
       
        $edit = mysqli_query($con, "UPDATE `salary` SET `name`='$name',`services`='$ser',`price`='$pr' WHERE id=".$id);

        if($edit){
            // echo "Done";
            header("location:../../record_month.php");
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
    <?php
      @include('../../../../Components/header.php')
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php
      @include('../../../../Components/sidebar.php');
    ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Salary </h1>
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
                  <input type="hidden" value="<?php echo $edit['id'];?>">
                    <div class="row">
                      <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Enter Employee Name" value="<?php echo $edit['name'];?>">
                              </div>
                            </div>
                            <table class="table table-bordered" id="table" >
                              <tr>
                                  <th>Services</th>
                                  <th>Price</th>
                              </tr>
                              <tr>
                                  <td><input class="form-control" type="text" name="services[]" placeholder="Enter Service" value="<?php echo $edit['services'];?>"></td>
                                  <td><input class="form-control" type="text" name="price[]" placeholder="Enter Price" value="<?php echo $edit['price'];?>"></td>
                              </tr>
                            </table>
                            <!-- <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Services</label>
                                <input type="text" name="services" class="form-control" id="" placeholder="Enter Employee Services">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" name="price" class="form-control" id="" placeholder="Enter Rate">
                              </div>
                            </div> -->

                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update" class="btn btn-primary">Submit</button>
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


  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

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
