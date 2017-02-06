<?php 
require_once 'another.php';
 
 //  $n = 12;
 //  $msg = "The number is not dividables";
  
	// if($n % 3 == 0){
		
	// 	$msg = "The number is dividable by 3";
		
	// 	if($n % 5 == 0){
			
	// 		$msg = "The number is dividable by  5 and 3";
			
	// 		if($n % 9 == 0){
				
	// 			$msg = "The number is dividable both 6, 9 and 3";
	// 		}
	// 	}
	// }
	// echo $msg;


 // echo "<br>";

 
 //  $x = 20;
 //  $result = $x + 10 * 2;
 //  echo $result;
  // require_once 'TalkInterface.php';
  // require_once 'Dog.php';
  // require_once 'Cat.php';
  

  // $dog = new Dog;
  // echo $dog->talk();
  // echo "<br>";

  // $cat = new Cat;
  // echo $cat->talk();

function odd($n)
{
	if($n % 2 == 0){
		$msg = "The number is even";
	}else{
		$msg = "The number is odd";
	}

	return $msg;
}

echo odd(70);
