<?php 
	include "koneksi.php";
    
    $query_mysql = mysqli_query($conn, "SELECT * FROM tb_monitor");
    while($data = mysqli_fetch_array($query_mysql)){
        $item[] = array(
            "id"=>$data["id"],
            "state"=>$data["state"],
            "total_voltage"=>$data["total_voltage"],
            "lowest_voltage"=>$data["lowest_voltage"],
            "temp_battery"=>$data["temp_battery"]
        );
    }
    
    $json = array(
        'result' => 'Success',
        'data' => $item
    );

    echo json_encode($json);
?>