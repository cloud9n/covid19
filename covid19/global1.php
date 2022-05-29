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
