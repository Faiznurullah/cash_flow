<?php
$username   = addslashes($_POST['username']);
$pass       = md5($_POST['password']);

include 'config/koneksi.php';

$user = mysqli_query($conn, "select * from admin where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
  	session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['password'] = $row['password'];
    header("location: index.php");

}
else{
    header("location: login.php?pesan=gagal");


}
?>
