<?php
    include_once 'AdminSession.php';
    include_once 'connection.php';
    $id = $_REQUEST['data'];
    $qry = mysqli_query($con,"Select * from patients where id='$id'") or die(mysqli_error($con));
    while($row = mysqli_fetch_array($qry)){
        $id = $row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $nok=$row['nok'];
        $non=$row['non'];
        $noa=$row['noa'];
        $nor=$row['nor'];
        $region=$row['region'];
        $state=$row['state'];
      

    }
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
	
	<title>Covid19 Tracking system</title> 
</head>
<body >
<div class="row" >
				<div class="col" style="background-color: #3a0388";>
					<div class="card mt-5" style="background-image: url(../image/header.jpg)";>
						<div class="card-header text-center">
							<h3> Admin Dashboard</h3><div class="text-right">
								<a href="user.php"> <button class="btn btn-outline-success">Users</button></a>
								<button class="btn btn-outline-danger" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Report a Case </button>
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
					<h5>Regional Cases</h5>
					</div>
		<table id="viewdata" class="table table-bordered table-striped" >

		<thead>	
        <tr>

<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Next of Kin</th>
<th>NoK Phone</th>
<th>Relationship</th>
<th>Nok Address</th>
<th>Region</th>
<th>State of Health</th>

</tr>
		</thead>
<h2 style="text-align: center;">Edit Cases </h2>
<form name="Myform" id="Myform" action="EditProcessCases.php?id='<?php echo $id;?>'" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    
              
        <tbody>
            <tr>
            
               
                <td><input type="text" name="name" id="name" onkeydown="HideError()" value = "<?php echo $name?>"/></td>

                <td><input type="text" name="email" id="email" onkeydown="HideError()" value = "<?php echo $email?>"/></td>

                <td><input type="text" name="address" id="address" onkeydown="HideError()" value = "<?php echo $address?>"/></td>

                <td><input type="text" name="nok" id="nok" onkeydown="HideError()" value = "<?php echo $nok?>"/></td>
                 <td><input type="text" name="non" id="non" onkeydown="HideError()" value = "<?php echo $non?>"/></td>
                  <td><input type="text" name="nor" id="nor" onkeydown="HideError()" value = "<?php echo $nor?>"/></td>
                   <td><input type="text" name="noa" id="noa" onkeydown="HideError()" value = "<?php echo $noa?>"/></td>

                <td><input type="text" name="region" id="region" onkeydown="HideError()" value = "<?php echo $region?>"/></td>
                <td> 
                        <select name="state" id="state">
                            <option value="1">Death</option>
                            <option value="2"> Discharged</option>
                            <option value="3">Hospitalized</option>
                        </select>
                </td>
                
          </tr>
      </tbody>


    
                                  
                <td><input type="submit" name="submit" value="Update" /></td>
            </tr>
            
        
        </tbody>
    </table>
</form>

    </div></body></html>