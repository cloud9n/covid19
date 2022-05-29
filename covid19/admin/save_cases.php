<?php

	require_once 'connection.php';
		extract($_POST);
		if(empty($id)){
				$i= 1;
				while($i == 1){
				
					$chk  = $conn->query("SELECT * FROM cases where id = '$id'")->num_rows;
					if($chk <= 0){
						$i = 0;
					}
				}
				// echo "INSERT INTO `employee` VALUES('', '$e_num','$firstname', '$middlename', '$lastname', '$department', '$position')";
				// exit;
				$save=$conn->query("INSERT INTO 'cases' VALUES( '$region', '$new_confirmed', '$total_confirmed', '$new_deaths', '$total_death', '$new_recovered', '$total_recovered')") or die(mysqli_error($save));
				if($save){
						echo json_encode(array('status'=>1,'msg'=>"Data successfully Saved"));
				}		
		}else{
			$save=$conn->query("UPDATE 'cases' set region='$region',new_confirmed='$new_confirmed',total_confirmed='$total_confirmed',new_deaths='$new_deaths',total_death='$total_death', new_recovered='$new_recovered', total_recovered='$total_recovered' where id = $id ") or die(mysqli_error($save));
				if($save){
						echo json_encode(array('status'=>1,'msg'=>"Data successfully Updated"));
				}
		}	

$conn->close();
?>