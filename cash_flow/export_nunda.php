<?php
include './config/koneksi.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





  </head>


  <!--ini awal content-->

  <h3><p class="text-center mt-4">Data Uang Kas</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Alamat</th>
        <th scope="col">Umur</th>
       </tr>

         <?php
        	  $query = mysqli_query($conn, "SELECT * FROM anggota WHERE level_kas = '0'");
        	  while($row = mysqli_fetch_array($query)){

        	  ?>
            <?php
                  //tanggal lahir
                  $tanggal = new DateTime($row['umur']);

                  // tanggal hari ini
                  $today = new DateTime('today');

                  // tahun
                  $y = $today->diff($tanggal)->y;

            ?>

            <tr>
              <th scope="row"><?php echo $row['id'] ?></th>
              <td><?php echo $row['nama'] ?></td>
              <td><?php echo $row['alamat'] ?></td>
              <td><?php echo $y." Tahun"  ?></td>
            </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_Nunda.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>
