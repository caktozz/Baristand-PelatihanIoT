<?php
		include "koneksi.php";
	
		$id				= $_GET['id'];
		$state 			= $_GET['state'];
		$total_voltage 	= $_GET['total_voltage'];
		$lowest_voltage = $_GET['lowest_voltage'];
		$temp_battery 	= $_GET['temp_battery'];

		if(isset($id)&&isset($state)&&isset($total_voltage)&&isset($lowest_voltage)&&isset($temp_battery))
		{
	    	$data = mysqli_query($conn, "UPDATE tb_monitor SET id='$id',state='$state',total_voltage='$total_voltage',
			lowest_voltage='$lowest_voltage',temp_battery='$temp_battery' where id = $id");
            echo "Update Data Successfully";
		}
	      
	?>