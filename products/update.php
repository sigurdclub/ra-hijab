<?php
include_once "../function.php";
$id = $_GET["id"];

$data=mysqli_query($conn,"SELECT * FROM daftarhijab WHERE id='$id' ");
  // var_dump($data);die;
  foreach($data as $row){
      $hijab=$row["merek_hijab"];
      $warna=$row["warna"];
      $stok=$row["stok"];
      $tipe=$row["tipe"];
      $harga=$row["harga"];
      $gambar=$row["gambar"]; 
  }

if(isset($_POST["update"])){
  if(update($_POST)){
    var_dump(update($data));die;
    echo "
      <script>
          alert('data berhasil ditambah!');
          document.location.href = 'products.php';
      </script>";
  }else{
    echo "
      <script>
          alert('data gagal ditambah!');
          document.location.href = 'products.php';
      </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- css bootsrap -->
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/f10df6ea72.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #4C0070;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="text-decoration: unset; background-color: #9A0680;">
      <!-- <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <h4 class="brand-text font-weight-light" style="text-align: center;">Ra Hijab</h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"  style="background-color: #9A0680;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="text-decoration: unset;">Umrah</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          
          <li class="nav-header">Daftar</li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
            <i class=" nav-icon fa-solid fa-house"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pesanan/pesanan.php" class="nav-link">
            <i class="nav-icon fa-solid fa-cart-shopping"></i>
              <p>Pesanan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../products/products.php" class="nav-link">
            <i class="nav-icon fa-solid fa-shirt"></i>
              <p>Products</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #4C0070;">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col">
            <h1 class="" style="text-align: center; margin-bottom: 2%;">Form Tambah </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Last Content -->

    <!-- Isi konten -->
    <section class="content">
        <!-- Container forms tambah -->
        <div class="row" style="justify-content: center;width: 100%;" >
          <div class="card" style="width: 50%; background-color: #9A0680;">
            <div class="card-body">
            <form class="row g-3 form-products" action="" method="POST" enctype="multipart/form-data">

              <div class="col-12">
                <input type="hidden" class="form-control" id="inputAddress" placeholder="Apple..." name="id" value="<?php echo $id ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label" style="color: white;">Merek Hijab</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Apple..." name="merek_hijab"style="background-color: white; color: black;" value="<?php echo $hijab ?>" >
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: white;">Warna</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="1...." name="warna" style="background-color: white; color: black;" value="<?php echo $warna ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: white;">Stok</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="..." name="stok" style="background-color: white; color: black;" value="<?php echo $stok ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: white;">Tipe</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="..." name="tipe" style="background-color: white; color: black;" value="<?php echo $tipe ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: white;">Harga</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="..." name="harga" style="background-color: white; color: black;" value="<?php echo $harga ?>">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" style="color: white;">Gambar</label>
                <input type="file" class="form-control" id="inputAddress2" placeholder="" name="gambar" style="background-color: white; color: black;">
              </div>
              <div class="col-12" style="display: flex; justify-content: right;">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
            </div>
          </div>
      </div>
              
              

      <!-- container content -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: #4C0070;">
        <div class="float-right d-none d-sm-inline-block">
       
        <b style="color: white;">SigurdClub</b><span style="color: white;"> 20.10.21</span>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/plugins/raphael/raphael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets/dist/js/pages/dashboard2.js"></script>

<!-- javascript bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>