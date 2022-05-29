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


