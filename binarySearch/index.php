<?php

$vector = [1,2,3,4,5];
$size = sizeof( $vector );
$value = 4;

function binarySearch($vector, $size, $value)
{
	$centro = 0;
	$inicio = 0;
	$final = $size - 1;

	while ( $inicio <= $final ) {
		$centro = intval( ( $final + $inicio ) / 2 );

		if ( $value > $vector[$centro] ){
			$inicio = $centro + 1;
		} else if ( $value < $vector[$centro] ) {
			$final = $centro - 1;
		} else {
			break;
		}
	}

	if ($vector[$centro] == $value) {
		return "El valor se encuentra en la posición " . $centro . PHP_EOL;
	} else {
		return "No se encontro el valor" . PHP_EOL;
	}
}

echo binarySearch($vector, $size, $value);

?>