<?php 
	class Calculation
	{
		/****
		*The summation of Odd number
		
		*/
		public function Odd($start, $target)
		{	
			$sum = 0;
			for($i = $start; $i <= $target; $i++){
				
				if($i % 2 == 1){
					
					continue;
				}
				
				$sum = $sum + $i;
			}
			return $sum;
		}
		
		/** 
			* Two number add function
		
			*/
		
		public function add($num1, $num2)
		{
			$result = $num1 + $num2;
			
			return $result;
		}
	}
	
	$odd = new Calculation;
	$data =  $odd->Odd(0, 10);
	echo "<br><br>";
	$calculation = new Calculation;
	
	$calculation->add(10, 50);
	var_dump($data);

?>