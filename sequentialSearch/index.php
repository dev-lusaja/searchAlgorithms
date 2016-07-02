<?php
	# vector
	$vector = ['hello', 'world', 1, true];
	# size of the vector 
	$size = count( $vector ) - 1;
	#value sought
	$value = 'hello';


	# Sequential Function that looking into the vector the indicated value and returns a result
	function sequentialSearch($vector, $size, $value)
	{
		$response = false;
		# We walk the vector from behind for further optimization
		for ($i = $size; $i >= 0 ; $i--) { 
			if ($vector[$i] === $value) {
				$response = !$response;
				break;
			}
		}
		return $response;
	}

	# Printing the result
	var_dump( sequentialSearch($vector, $size, $value) );

?>