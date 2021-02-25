<?php
include './config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM keluar WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: daftar_out.php?hapus=sukses');
}
else{
		header('location: daftar_out.php?hapus=gagal');
}

?>
