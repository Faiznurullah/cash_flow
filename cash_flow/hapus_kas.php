<?php
include './config/koneksi.php';

$dapat_id = $_GET['id'];

$ambil_id = mysqli_query($conn, "select * from kas where id = '$dapat_id'");
$ambil_nama = mysqli_fetch_array($ambil_id);
$nama = $ambil_nama['nama'];


$ambil_id_warga = mysqli_query($conn, "select * from anggota where nama  = '$nama'");
$ambil_id_wargaa = mysqli_fetch_array($ambil_id_warga);
$id_warga = $ambil_id_wargaa['id'];
$level_ubah = 0;


$set_level = mysqli_query($conn, "UPDATE anggota SET
level_kas = $level_ubah
WHERE id ='".$id_warga."'
   ");


$delete = mysqli_query($conn, "DELETE FROM kas WHERE id = '".$_GET['id']."'");

 if($delete && $set_level){
	header('location: daftar_kas.php?hapus=sukses');
}
else{
		header('location: daftar_kas.php?hapus=gagal');
}

?>
