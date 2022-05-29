<h3> Regional Reported Cases</h3>
			<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr class="bg-primary text-white">
										
										<th>GARAM</th>
										<th>BWARI </th>
										<th>DUTSE</th>
										<th>SULEJA </th>
										<th>SABON-WUSE </th>
										<th>KUDURU </th>
										
									</tr>
					</thead>

					<tbody>
		
						<tr>
							
							<td><?php

						$region="Garam";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed</h5>
                  		   
  						<?php }?>

<!--Start of code condition Garam-->	

				<!-- Number of deaths -->
  						<?php
							$region="Garam";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Garam";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Garam";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					
						</td>



						<td><?php

						$region="Bwari";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed</h5>
                       
  						<?php }?>

<!--Start of code condition Garam-->	

				<!-- Number of deaths -->
  						<?php
							$region="Bwari";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Bwari";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Bwari";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					
  						</td>
							<td><?php

						$region="Dutse";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed </h5>
                       
  						<?php }?>

  						<!--Start of code condition Dutse-->	

				<!-- Number of deaths -->
  						<?php
							$region="Dutse";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Dutse";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Dutse";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					

  						</td>
							<td><?php

						$region="Suleja";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed</h5>
                       
  						<?php }?>
<!--Start of code condition Sulea-->	

				<!-- Number of deaths -->
  						<?php
							$region="Suleja";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Suleja";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Suleja";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					

  						</td>
							<td><?php

						$region="Wuse";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed</h5>
                       
  						<?php }?>
  						<!--Start of code condition Wuse-->	

				<!-- Number of deaths -->
  						<?php
							$region="Wuse";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Wuse";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Wuse";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					
  						</td>
							<td><?php

						$region="Kuduru";                   
						$rt = mysqli_query($con, "SELECT * FROM patients where  region='$region'");
						$num1 = mysqli_num_rows($rt);
						{?>
                  		<h5 style="color: blue;"><?php echo htmlentities($num1);?> Confirmed</h5>
                       
  						<?php }?>
  						<!--Start of code condition Kuduru-->	

				<!-- Number of deaths -->
  						<?php
							$region="Kuduru";
							$state=1;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DEAD</font>							
						
							<?php
							};
							?>
							<?php echo "<br>"?>
					<!-- Number of discharged -->
  						<?php
							$region="Kuduru";
							$state=2;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>
						
							<?php echo htmlentities($nm);?> <font>DISCHARGED</font>
							
							<?php
							};
							?>

						<?php echo "<br>"?>
						
						<!-- Number of discharged -->
  						<?php
							$region="Kuduru";
							$state=3;
							$cases_qry=$con->query("SELECT * FROM patients where region='$region' AND state='$state' ");
							$nm = mysqli_num_rows($cases_qry);
							{?>							
													
							<?php echo htmlentities($nm);?> <font>HOSPITALIZED</font>
							
							<?php
							};
							?>
<!--End of code condition -->					

  						</td>
							
							
						</tr>
						
					</tbody>
				</table>