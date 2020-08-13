<?php 
include 'koneksi.php';
$state          = $_POST['state'];
$total_voltage  = $_POST['total_voltage'];
$lowest_voltage = $_POST['lowest_voltage'];
$temp_battery   = $_POST['temp_battery'];

mysqli_query($conn,"INSERT INTO tb_monitor values('','$state','$total_voltage','$lowest_voltage','$temp_battery')");
header("location:index.php?pesan=input");
?>