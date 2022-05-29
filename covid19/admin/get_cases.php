<?php
	include 'connection.php';
		extract($_POST);
		$data=array();
		$get=$conn->query("SELECT * FROM `cases` where id=$id ") or die(mysqli_error($conn));
		
		if($get->num_rows > 0 ){
			$data = $get->fetch_array();
		}		
		echo json_encode($data);
$conn->close();