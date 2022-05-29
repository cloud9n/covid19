<?php 
$global_cases = file_get_contents (filename 'https://api.covid19api.com/summary');
$global_cases = json_decode($global_cases, assoc true);

echo "<pre>";
print_r($country);
echo "</pre>";

$total_countries = count($global_cases['Countries']);
//echo $country['Country']['NewConfirmed'];

$value ='<table class="table table-bordered">';
			<tr class="bg-primary text-white">
				<th>Country </th>
				<th>NewConfirmed</th>
				<th>TotalConfirmed</th>
				<th>NewDeaths </th>
				<th>TotalDeaths </th>
				<th>NewRecovered </th>
				<th>TotalRecorvered </th>
			</tr>
			';
$i=0;

while($i<$total_countries)
{

	$value .='<tr class="bg-primary text-white">;
	$value .='<td>'.$global_cases['Countries'][$i]['Country'].'</td>';
		$value .='<td>'.$global_cases['Countries'][$i]['NewConfirmed'].'</td>';
	$value .='<td>'.$global_cases['Countries'][$i]['TotalConfirmed'].'</td>';
	$value .='<td>'.$global_cases['Countries'][$i]['NewDeaths'].'</td>';
	$value .='<td>'.$global_cases['Countries'][$i]['TotalDeaths'].'</td>';
	$value .='<td>'.$global_cases['Countries'][$i]['NewRecovered'].'</td>';
	$value .='<td>'.$global_cases['Countries'][$i]['TotalRecorvered'].'</td>';
	$i++;
}

	$value.='</tr>';
	$value.='</table>';
	echo ($value);

}
