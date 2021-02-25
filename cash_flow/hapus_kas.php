<?php
include './config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM kas WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: daftar_kas.php?hapus=sukses');
}
else{
		header('location: daftar_kas.php?hapus=gagal');
}

?>
