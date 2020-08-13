<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQLi - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQLi</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>Pelatihan Baristand</h3>
	</div>
	<br/>

	<img src="image/logobaristand.png" height="100px" width="250px;">
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>State</th>
			<th>Total Voltage</th>
			<th>Lowest Voltage</th>
			<th>Temperature Battery</th>
			<th>Action</th>			
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($conn,"SELECT * FROM tb_monitor");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['state']; ?></td>
			<td><?php echo $data['total_voltage']; ?></td>
			<td><?php echo $data['lowest_voltage']; ?></td>
			<td><?php echo $data['temp_battery']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>