<?php 
/*$food = array('P', 'B', 'D', 'G');

echo $food[2];
echo '<br>';
print_r($food);
echo '<br>';
$food = array('P'=>300, 'B'=>1000, 'D'=>150, 'G'=>20);
print_r($food);*/
/*
$food = array('Healthy'=>
													array('salad','vegetable','pasta'),
							'Unhealthy'=>
													
													array('pizza','Icecream'));
													*/
$s = array('salad','vegetable','pasta');
$food = array('Healthy'=>
													$s,
							'Unhealthy'=>
													array('pizza','Icecream'));
													
echo $food['Healthy'][0];
/*
foreach($food as $element => $inner_array) {
	each $element.'<br>';
	foreach ($inner_array as $item) {
		echo $item.'<br>';
	}
}*/
?>