<?php

include './config/koneksi.php';

$user=$_POST['username'];
$lama=md5($_POST['pertama']);
$baru=$_POST['kedua'];
$ulang=$_POST['ketiga'];

$cek=mysqli_query($conn, "select * from admin where password='$lama' and username='$user'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysqli_query($conn, "update admin set password='$b' where username='$user'");
		header("location: logout_pass.php");
	}else{
		header("location: change.php?pesan=tdksama");
	}
}else{
	header("location: change.php?pesan=gagal");
}

 ?>
