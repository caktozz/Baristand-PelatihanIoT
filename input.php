<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQLi - Menginputkan data ke database</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQLi</h1>
		<h2>Menginputkan data ke database</h2>
		<h3>Pelatihan Baristand</h3>
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input_aksi.php" method="post">		
		<table>	
			<tr>
				<td>State</td>
				<td><input type="text" name="state"></td>					
			</tr>	
			<tr>
				<td>Total Voltage</td>
				<td><input type="text" name="total_voltage"></td>					
            </tr>
            <tr>
				<td>Lowest Voltage</td>
				<td><input type="text" name="lowest_voltage"></td>					
            </tr>	
            <tr>
				<td>Temperature Battery</td>
				<td><input type="text" name="temp_battery"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>