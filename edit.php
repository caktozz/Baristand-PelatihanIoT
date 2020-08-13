<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQLi - Mengedit data database</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQLi</h1>
		<h2>Mengedit data database</h2>
		<h3>Pelatihan Baristand</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM tb_monitor WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>State</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="state" value="<?php echo $data['state'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Total Voltage</td>
				<td><input type="text" name="total_voltage" value="<?php echo $data['total_voltage'] ?>"></td>					
			</tr>	
			<tr>
				<td>Lowest Voltage</td>
				<td><input type="text" name="lowest_voltage" value="<?php echo $data['lowest_voltage'] ?>"></td>					
            </tr>
            <tr>
				<td>Temperature Battery</td>
				<td><input type="text" name="temp_battery" value="<?php echo $data['temp_battery'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>