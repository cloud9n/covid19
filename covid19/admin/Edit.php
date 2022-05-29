<?php
    include_once 'AdminSession.php';
    include_once 'connection.php';
    $id = $_REQUEST['data'];
    $qry = mysqli_query($con,"Select * from user where id='$id'") or die(mysqli_error($con));
    while($row = mysqli_fetch_array($qry)){
        $id = $row['id'];
        $fname=$row['fname'];
        $lname =$row['lname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
        
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
	<script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<title>Covid19 Tracking system</title> 
</head>
<body >
<div class="row">
				<div class="col" style="background-color: #3a0388";>
					<div class="card mt-5" style="background-image: url(../image/header.jpg)";>
						<div class="card-header text-center">
							<h3> Admin Dashboard</h3><div class="text-right"><a href="index.php"><button class="btn btn-outline-danger" type="button" id="new_emp_btn"><span class="fa fa-plus"></span> Report a Case </button></a>
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
			
		<div class="container-fluid admin" >
			
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="manage_userlabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content ">
						<div class="modal-body">
							<center><label class="text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class="btn btn-danger remove_id" ><span class="glyphicon glyphicon-trash"></span> Yes</a> <button type="button" class="btn btn-warning" data-dismiss="modal" aria-label="No"><span class="glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
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
			
				
					<div class="well col-lg-12">
				<a href="user.php"><button type="button" class="btn btn-primary btn-sm" id="new_user"><i class="fa fa-plus"></i> Add New</button></a>
				<br />
				<br />
		<table id="viewdata" class="table table-bordered table-striped">

		<thead>	
<tr>
<th>Case No:</th>
<th>First name</th>
<th>Last name</th>
<th>Phone number</th>
<th>Email Address</th>
<th>Password</th>
<th>User Type</th>
<th>Action</th>
</tr>
		</thead>
<h2 style="text-align: center;">Edit User details</h2>
<form name="Myform" id="Myform" action="EditProcess.php?id='<?php echo $id;?>'" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    
              
        <tbody>
            <tr>
            
                <td><input type="text" name="id" id="id" onkeydown="HideError()" value = "<?php echo $id?>"/></td>

                <td><input type="text" name="fname" id="fname" onkeydown="HideError()" value = "<?php echo $fname?>"/></td>
            
                
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()" value = "<?php echo $lname?>"/></td>
            
                
                <td><input type="text" name="mobile" id="mobile" onkeydown="HideError()" value = "<?php echo $phone?>"/></td>
            
                
                <td><input type="text" name="email" id="email" onkeydown="HideError()" value = "<?php echo $email?>"/></td>
            
                <td><input type="text" name="password" id="password" onkeydown="HideError()" value = "<?php echo $password?>"/></td>
            
                
                <td>
                    <select name="usertype" id="usertype" onkeydown="HideError()">
                        <option value="user" selected>Select User type</option>
                        <option value="Normal">Normal</option>
                        <option value="Admin" >Admin</option>
                    </select>
                    
                <td><input type="submit" name="submit" value="Update" /></td>
            </tr>
            
        
        </tbody>
    </table>
</form>

    </div></body></html>