<?php 
 
include 'koneksi.php';
$id             = $_POST['id'];
$state          = $_POST['state'];
$total_voltage  = $_POST['total_voltage'];
$lowest_voltage = $_POST['lowest_voltage'];
$temp_battery   = $_POST['temp_battery'];

 
mysqli_query($conn, "UPDATE tb_monitor SET state='$state', total_voltage='$total_voltage', lowest_voltage='$lowest_voltage', temp_battery='$temp_battery' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>