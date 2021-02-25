<?php
session_start();

if($_SESSION['password']=='')
{
    header("location: login.php");
}
include 'config/koneksi.php';
error_reporting(0);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon.png" type="image/gif" sizes="16x16">

  <title>Menejemen Keuangan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-money-bill-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cash Flow <br> Class</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Anggota
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Manajemen Anggota</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="tambah_anggota.php">Tambah Anggota</a>
            <a class="collapse-item" href="daftar_anggota.php">Daftar Anggota</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manajemen Keuangan
      </div>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-folder"></i>
          <span>Manajemen Keuangan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="setor.php">Setor Kas</a>
            <a class="collapse-item" href="daftar_kas.php">Daftar Kas</a>
            <a class="collapse-item" href="catat_out.php">Catat Pengeluaran</a>
            <a class="collapse-item" href="daftar_out.php">Daftar Pengeluaran</a>
          </div>
        </div>
      </li>




      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <?php
          $pass = $_SESSION['password'];
          $sss = mysqli_query($conn, "select * from admin where password = '$pass'");
          $rrr = mysqli_fetch_array($sss);
          if($sss){
             ?>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $rrr['nama']; ?></span>
                <img class="img-profile rounded-circle" src="img/<?php echo $rrr['foto']; ?>" alt="profile">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Riwayat
                </a>
                <a class="dropdown-item" href="pengaturan.php?id=<?php echo $rrr['id']; ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <a class="dropdown-item" href="change.php?id=<?php echo $rrr['id']; ?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
            <?php
}
             ?>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">



                    <div class="row">
                      <div class="col-xl-1">

                      </div>

                      <!-- Area Chart -->
                      <div class="col-xl-10 col-lg-10">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Nama Dan Foto:</h6>
                          </div>

                          <?php
                          $id= ($_GET['id']);

                            $tak = !$id;
                            if($tak){

                                echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                                   echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                                  echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
                                   echo   "</div>";
                                   echo "</div>";

                            }else{
                            $det=mysqli_query($conn, "select * from admin where id='$id'");
                            $d=mysqli_fetch_array($det);

                        ?>

                          <!-- Card Body -->
                          <div class="card-body">


                            <form method="post" name="edit" enctype="multipart/form-data" required>
                            <div class="row ml-5 mb-2 mt-3">


                            <div class="col-md-4">
                            <P><b>Ganti Nama</b></p>
                            <input class="form-control" type="text"  value="<?php echo $d['nama'];?>" placeholder="Ganti Nama..." name="name" required>

                            <P><b>Ganti Foto Profile</b></p>
                            <input class="form-control" type="file"  value="<?php echo $d['foto'];?>"  name="pict" accept="image/jpeg, image/png, image/svg"  required>

                            </div>
                            </div>

                            <div class="row ml-5 mb-2 mt-3">

                            <div class="col-md-5">
                            <button type="submit" class="btn btn-info" name='edit'>Update</button>&nbsp;<input type="reset" class="btn btn-danger"  value="Reset">
                            </div>

                            </div>
                            </form>


                          </div>
                          <?php
          }
                          ?>


                           <?php
                          $id_brg= $_GET['id'];

                           if(isset($_POST['edit'])){

                             $nama = $_POST['name'];
                             $nama_file = $_FILES['pict']['name'];
                             $ukuran_file = $_FILES['pict']['size'];
                             $source = $_FILES['pict']['tmp_name'];
                             $folder = './img/';
                             $boleh_eks = array('png', 'jpg', 'svg');
                             $x = explode('.', $nama_file);
                             $ekstensi = strtolower(end($x));

                          if(in_array($ekstensi, $boleh_eks) === true){

                          if($ukuran_file < 3044070){

                               move_uploaded_file($source,$folder.$nama_file);

                               $insert = mysqli_query($conn, "UPDATE admin SET
                               foto = '$nama_file',
                               nama = '$nama'
                               WHERE id = '$id_brg'
                                 ");

                          if($insert){

                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
                              echo "<p><center>Update Profile Sukses</center></p>";
                               echo   "</div>";
                               echo "</div>";


                          }else{
                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Update Profile Gagal</center></p>";
                               echo   "</div>";
                               echo "</div>";

                          }



                          }else{

                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Ukuran File Terlalu Besar</center></p>";
                               echo   "</div>";
                               echo "</div>";


                          }


                          }else{
                            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
                               echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
                              echo "<p><center>Hanya Boleh File Type Gambar Saja</center></p>";
                               echo   "</div>";
                               echo "</div>";

                          }




                           }

                           ?>



                        </div>
                      </div>

                    </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Option "Logout" Untuk Keluar Dan Pilih Option "Cancel" Untuk Membatalkan</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
