<?php

error_reporting(0);

$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"covid19");
}
 else {
     echo "could not connect to the database".die(mysqli_error($conn));
}


    
    
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, user-sacalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/boostrap-min.css">
	<script scr="js/boostrap-min.js" type="text/javascript"></script>
	<script scr="js/popper-min.js" type="text/javascript"></script>
	<script scr="js/main.js" type="text/javascript"></script>
	<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-base.min.js"></script>


	<title>Covid19 Tracking system</title>
    <style type="text/css">
      html,
      body,
      #container {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>
	<div class="row" >
				<div class="col">
					<div class="card">
						<div class="card-header" style="background-image: url(image/c.jpg);">
							<center><h3> COVID 19 TRACKING SYSTEM</h3> 
							<h5> by Indiya +2348062898177</h5></center>
							<div class="text-right"> <a href="login/login.php"> <button type="button" class="btn btn-primary">Admin Login</button></a></div>
						</div>
						<div class="card-body">
							<div id="table">
									






					
			</div>
		</div> 



							</div>
									
						</div>
						
					</div>
				</div>
			</div>





<!-- The first bordy-->

<?php 
	require 'admin/region_cases.php';
 ?>





			</div>
			<br />
			<br />	
			<br />
		<div>	
		<div id="container" ></div>
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
chart.container("container");

// initiate drawing the chart
chart.draw();</script> </div>

		<div class="container-fluid">
			

			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h3> Global Reported Cases</h3>
						</div>
					

<?php 
$global_cases = file_get_contents ('https://api.covid19api.com/summary');
$global_cases = json_decode($global_cases, true);

echo "<pre>";
//print_r($global_cases);
echo "</pre>";

//$global = count($global_cases['Global']);
//echo $country['Country']['NewConfirmed'];

$value ='<table class="table table-bordered">
			<tr class="bg-primary text-white">
				<th>NewConfirmed</th>
				<th>TotalConfirmed</th>
				<th>NewDeaths </th>
				<th>TotalDeaths </th>
				<th>NewRecovered </th>
				<th>TotalRecorvered </th>
			</tr>
			';
$i=0;

while($i<4)
{
	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$global_cases['Global']['NewConfirmed'].'</td>';
	$value .='<td>'.$global_cases['Global']['TotalConfirmed'].'</td>';
	$value .='<td>'.$global_cases['Global']['NewDeaths'].'</td>';
	$value .='<td>'.$global_cases['Global']['TotalDeaths'].'</td>';
	$value .='<td>'.$global_cases['Global']['NewRecovered'].'</td>';
	$value .='<td>'.$global_cases['Global']['TotalRecovered'].'</td>';
	$i++;

}
	$value.='</tr>';
	$value.='</table>';
	//$context = $value ['Global'];
	echo $value;

?>



						<div class="card-body">
							<div id="t">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h3> Nigeria Reported Cases</h3>


<?php 
$naija = file_get_contents ('https://covidnigeria.herokuapp.com/api');
$naija_cases = json_decode($naija, true);

echo "<pre>";

//print_r($naija_cases);
echo "</pre>";

//echo $naija_cases['data']['states'][0]['state']['confirmedCases']['casesOnAdmission']['discharged']['death'];
//echo $naija_cases['states'][0]['state'];

$value ='<table class="table table-bordered">
			<tr class="bg-primary text-white">
				<th>State </th>
				<th>Cases</th>
				<th>Admitted </th>
				<th>Discharged </th>
				<th>Deaths </th>
				
			';
//$i=$states = array('states' => , );;

//while($i<1)
//{

	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][0]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][0]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][0]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][0]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][0]['death'].'</td>';
	
	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][1]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][1]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][1]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][1]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][1]['death'].'</td>';

	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][2]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][2]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][2]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][2]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][2]['death'].'</td>';

	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][3]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][3]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][3]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][3]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][3]['death'].'</td>';

	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][4]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][4]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][4]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][4]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][4]['death'].'</td>';

	$value .='<tr class="bg-primary text-white">';
	$value .='<td>'.$naija_cases['data']['states'][5]['state'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][5]['confirmedCases'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][5]['casesOnAdmission'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][5]['discharged'].'</td>';
	$value .='<td>'.$naija_cases['data']['states'][5]['death'].'</td>';




	$value.='</tr>';
	$value.='</table>';
	echo ($value);

?>



						</div>
						<div class="card-body">
							<div id="country_tbl">
								
						</div>
					</div>
				</div>
			</div>
			
		</div>




</body>
</html>