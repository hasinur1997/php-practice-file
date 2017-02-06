<?php 
	 
	$a = 20;
	$b = 20;


	if( $a == $b ){

		$msg = "$a equal to $b";
	}

	elseif($a > $b ){

		$msg = "$a is greater than $b";
	}

	else{

		$msg = "$a is not eaqual to $b";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		
		.head{

			color:red;
		}
	</style>
</head>
<body>
	<?php 
		if(isset($msg)){
			echo "<h2 class='head'>$msg</h2>";
		}
	?>
</body>
</html>