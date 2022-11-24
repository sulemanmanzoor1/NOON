<?php
  @include('../connection.php');   
  $id="";
  $id = $_GET["id"];

  $select = mysqli_query($con,"SELECT * FROM `stitch_feb` WHERE id=".$id);
  $row = mysqli_fetch_assoc($select);

?>

<?php
$date=$id=$name=$fabric=$purpose="";

if(isset($_POST['update'])){
    $id = $_GET['id'];
   if(empty($_POST['date'])) {
    echo "<script> alert(Pleade fill all field) </script>";
   }else{
    $date=$_POST['date'];
   }

    if(empty($_POST['cut_fab'])) {
    echo "<script> alert(Pleade fill all field) </script>";
  }else{
    $cut_fab=$_POST['cut_fab'];  
    }

    if(empty($_POST['sti_fab'])) {
      echo "<script> alert(Pleade fill all field) </script>";
    }else{
      $sti_fab=$_POST['sti_fab'];  
      }


    $remain_fab =$cut_fab-$sti_fab;
   $query = mysqli_query($con,"UPDATE `stitch_feb` SET `date`='$date',`cut_fab`='$cut_fab',`sti_fab`='$sti_fab',`remain_fab`='$remain_fab KG' WHERE id=".$id);
   if($query){
      
    header("location:../../record_stiching.php");
        
   }else{
    echo "wrong query";

   }
}



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
        <a href="../../../../index.php" class="nav-link">Home</a>
      </li>
      <!--
        <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->

       <!-- SidebarSearch Form -->
       <div class="form-inline" style="padding-left:700px ;">
        <input id="myInput" type="text" placeholder="Search.." style="padding:10px 15px; border:1px solid grey; border-radius:10px;">
      </div>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
      
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    <!-- Navbar Search -->

    </ul>
  </nav>
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
              <h1>Edit Stiching </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../stiching.php">Add Stitching</a></li>
                <li class="breadcrumb-item active">Edit Stitching </li>
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
                <form id="frm" action="" method="POST">
                  <div class="row">
                    <div class="card-body">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-6">
                          <input type="hidden" value="<?php echo $row['id']?>">
                            <div class="form-group ">
                              <label for="exampleInputEmail1">Select Date</label>
                             
                              <input type="Date" name="date" value="<?php echo $row['date']?>" class="form-control" id="exampleInputEmail1">                 
                            </div>
                          </div>
                          <div class="col-md-6 ">
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="">Cut Pieces</label>
                              <input type="text" name="cut_fab" value="<?php echo $row['cut_fab']?>"class="form-control " id="purpose" placeholder="Enter Purpose for use Fabric" disabled>
                            </div>
                          </div>
                          <div class="col-md-6 ">
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="">Stitched Pieces</label>
                              <input type="text" name="sti_fab" value="<?php echo $row['sti_fab']?>"class="form-control " id="purpose" placeholder="Enter Purpose for use Fabric">
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
 
  <!-- AdminLTE App -->
  <script src="../../../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  
</body>

</html>