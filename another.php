<?php 
$array = array(5);
$sum = 0;

for($i = 0; $i < count($array); $i++){
	$sum = $sum + $array[$i];
}
echo $sum;
echo "<pre>", print_r(array_values($array)) ;

if(!empty(array_values($array))){

	echo "<pre>", print_r(array_values($array));
}
else
{
	echo "The array is empty";
}




echo "<br>";

$something = array(56, 89, 78, 56, 23, 56, 645);

$another_thing = array(89, 56, 89, 'something' => 78, 89);

$result = array_merge($something, $another_thing);

echo "<pre>", print_r($result);

echo "<br>";

 $keys = array_keys($something);
 echo "<pre>", print_r($keys);


 