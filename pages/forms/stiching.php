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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <!-- Jquery validation plug in  -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
  <script src="../../dist/js/jquery-validation-1.19.5/dist/additional-methods.min.js"></script>
  <script src="../../dist/js/jquery-validation-1.19.5/src/additional/forselect.js"></script>
  <script src="../../dist/js/validation.js"></script>
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
              <h1>Stitching Pieces Details </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item"><a href="../../index.php">Home</a></li> -->
                <li class="breadcrumb-item active">Stitching Pieces </li>
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

                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="frm" action="Backend/Send/stiching.php" method="POST">
                  <div class="row">
                    <div class="card-body">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Select Date</label>
                              <input type="Date" name="date" class="form-control" id="exampleInputEmail1">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Cutting Pieces</label>
                              <!-- <input type="number" name="cut_fab" class="form-control" id="cut_fab" placeholder="Enter Fabric in kg"> -->
                            
                              <select name="cut_fab" id="" class="form-control">
                                    <option value="">Total Pieces</option>
                                <?php
                                  include('../forms/Backend/connection.php');
                                  $id = $fabric = "";
                                  
                                    $query = mysqli_query($con, "SELECT * FROM `cutt_febric` ");
                                
                                    if(mysqli_num_rows($query) > 0){
                                        while($data = mysqli_fetch_assoc($query)){

                                          // $id        = $data['id'];
                                          $cut_fab = $data['cut_fab'];
                                        ?>
                                          <option value="<?php echo $cut_fab; ?>"><?php echo $cut_fab; ?></option>
                                            
                                        <?php
                                        }
                                    }
                                ?> 
                              </select>

                            </div>
                          </div>
                          <div class="col-md-6 ">
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="mt-3">Stitching Pieces</label>
                              <input type="number" name="sti_fab" class="form-control " id="sti_fab" placeholder="Enter Stitched Pieces in kg">
                            </div>
                          </div>
                          
                          <!-- <div class="col-md-6 ">
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="mt-3">Stitching Febric</label>
                              <input type="text" name="cate_fab" class="form-control " id="cate_fab" placeholder="Enter Stiched Cate.">
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->

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

</body>

</html>