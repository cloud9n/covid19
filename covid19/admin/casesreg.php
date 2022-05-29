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


<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<div class="well col-lg-12">
				
	    <div class="well col-lg-12">
        <a href="user.php"><button type="button" class="btn btn-primary btn-sm" id="new_user"><i class="fa fa-plus"></i> Add User</button></a>
            <a href="casesreg.php">	<button type="button" class="btn btn-primary btn-sm" id="new_user"> Report A Case</button></a>
				
		<table id="viewdata" class="table table-bordered table-striped">

		<thead>	


                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Date of birth</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Next Of Kin </th>

										

		</thead>
<center><h2 style="text-align: center;">Case Registration form </h2>
<form name="Myform" id="Myform" action="CasesRegProcess.php" method="post" onsubmit="return(Validate());">
 
    
        
        <tbody>
        
               
              
      			<td><input type="text" name="name" id="name" onkeydown="HideError()" required="" /></td>
      			<td><input type="email" name="email" id="email" onkeydown="HideError()" required="" /></td>
      			<td><input type="date" name="dob" id="dob" onkeydown="HideError()" required="" /></td>
      			<td><input type="text" name="address" id="address" onkeydown="HideError()" required="" /></td>
      			<td><input type="phone" name="phone" id="phone" onkeydown="HideError()" required="" /></td>
      			<td><input type="text" name="nok" id="nok" onkeydown="HideError()"/></td>
      			
            
                
                    
        </tbody>

        <tr>
        	<th>NOK No </th>
        	<th>Relationship </th>
        	<th>NOK Address</th>
                        <th>Region </th>
                        <th>State of Health  </th>               
										
         	<tbody>		
        			
            		
            		<td><input type="text" name="non" id="non" onkeydown="HideError()"/></td>
            		<td><input type="text" name="nor" id="nor" onkeydown="HideError()"/></td>
            		<td><input type="text" name="noa" id="noa" onkeydown="HideError()"/></td>
      			      			<td>
      				<select name="region" id="region">
      					<option value="Wuse">Sabon Wuse</option>
      					<option value="Suleja">Suleja</option>
      					<option value="Garam">Garam</option>
      					<option value="Dutse">Dutse</option>
      					<option value="Kuduru">Kuduru</option>
      				</select>
      			</td>

            	     	<td><select name="state" value="state">
            	     <option value="3">Hospitalized</option>
            		<option value="1">Death</option>
            		<option value="2">Discharged</option>
            		
            	</select></td>



            	<td><input type="submit" name="submit" value="Register" /></td>		</tr>		
        								     
            
                               
         </tbody>
    </table>
</form></center>

