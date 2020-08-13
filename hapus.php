<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM tb_monitor WHERE id='$id'")or die(mysqli_error());
 
header("location:index.php?pesan=hapus");
?>