<?php

//error_reporting(0);
    include_once 'AdminSession.php';
	require 'connection.php';
    $fname = $_SESSION['fname'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where fname= '$fname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname . " ".$lname;
    
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, user-sacalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../css/boostrap-min.css">
	<script src = "../js/jquery-3.5.1.min.js"></script>
	<script src = "../js/bootstrap.min.js"></script>
	<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>
	<title>Covid19 Tracking system</title> 
	

</head>
<body >
			

	<div class="row" >
				<div class="col" style="background-color: #3a0388";>
					<div class="card mt-5" style="background-image: url(../image/header.jpg)";>
						<div class="card-header text-center">
							<h3> Admin Dashboard</h3><div class="text-right">
								<a href="user.php"> <button class="btn btn-outline-success">Users</button></a>
								<a href="casesreg.php"> <button class="btn btn-outline-danger" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Report a Case </button></a>
							 <a href="Logout.php"> <button style="background-color: #3a0388; color: white;">Logout</button> </a></div>
						</div>
						<div class="container-fluid admin" >
			
						<div class="card-body">
							<div id="table">
																								
							</div>
									
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="well col-lg-12">
				<div class="card-header" style="background-color: #3a0388; color: white;">
					
					</div>
					<div class="modal fade" id="edit_admin" tabindex="-1" role="dialog" aria-labelledby="manage_userlabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content panel-warning">
						<div class="modal-header panel-heading">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="manage_userlabel">Edit Admin</h4>
						</div>
						<div id="edit_query"></div>
					</div>
				</div>
			</div>
			<div class="alert alert-primary">Administrator Accounts</div>

					<a href="user.php"><button type="button" class="btn btn-primary btn-sm" id="new_user"><i class="fa fa-plus"></i> Add User</button></a>
            <a href="casesreg.php">	<button type="button" class="btn btn-primary btn-sm" id="new_user"> Report A Case</button></a>
				
				
					
			
<div class="modal fade" id="new_cases" tabindex="-1" role="dialog" >
				<div class="modal-dialog modal-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							
							<h4 class="modal-title" id="myModallabel">Add new Cases</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						 </div>
					</div>
				</div>
			</div></div>
			<div>
			
							<script type="text/javascript">	 // create data
var data = [
  {x: "Abuja", value: 19939},
  {x: "Lagos", value: 61693},
  {x: "Kaduna", value: 9127},
  {x: "Plateau", value: 9069},
  {x: "Rivers", value: 7445}
];

// create a pie chart and set the data
chart = anychart.pie(data);

/* set the inner radius
(to turn the pie chart into a doughnut chart)*/
chart.innerRadius("40%");

// set the container id
chart.container("conta");

// initiate drawing the chart
chart.draw();</script>



<?php 
	require 'region_cases.php';
 ?>






			<table id="viewdata" class="table table-bordered table-striped">

<thead>	
<tr>

<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Next of Kin</th>
<th>NOK No:</th>
<th>Rel. With Nok</th>
<th>NOK Address</th>
<th>Region</th>
<th>State of Health</th>
<!--<th>Total Confirmed</th>
<th>New Death</th>
<th>Total Deaths</th>
<th>New Recovered</th>
<th>Total Recovered</th>
<th>Total Patients</th>-->
<th colspan=2>Action</th>
</tr>
</thead>
<?php
$sql="SELECT * FROM Patients";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));

while($row=mysqli_fetch_assoc($res))
{

echo "<tr><td>";
echo $row['name'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['address'];
echo "</td><td>";
echo $row['nok'];
echo "</td><td>";
echo $row['non'];					
echo "</td><td>";
echo $row['nor'];					
echo "</td><td>";
echo $row['noa'];					
echo "</td><td>";
echo $row['region'];					
echo "</td><td>";

	$state=$row['state'];
	$st=$state;

	if($st ==1) {
		echo 'Death';
	 } else if ($st ==2) {
		echo 'Discharged';
	 } else if ($st ==3) {
		echo 'Hospitalized';
	 } else {
		echo 'Unknown';
	 }
	

echo "<td><a href=\"delete_cases.php?data=".$row['id']."\"> Delete</a></td>
<td><a href=\"Edit_cases.php?data=".$row['id']."\">Update</a></td></tr>";
}
?>
</table>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-6">
    
    </div>
 
                
      <hr class="d-sm-none">
    </div>
	
    <div class="col-sm-6">

     
    
    </div>
  </div>
</div>	

</body>



</html>
