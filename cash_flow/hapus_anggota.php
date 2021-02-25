<?php
include './config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM anggota WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: daftar_anggota.php?hapus=sukses');
}
else{
		header('location: daftar_anggota.php?hapus=gagal');
}

?>
