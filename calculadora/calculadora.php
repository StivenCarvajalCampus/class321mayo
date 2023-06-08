<?php
    $operando1 = $_GET['operador1'];
	$operando2 = $_GET['operador2'];
	$operador = $_GET['operador'];
	
		

	if ($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
        if($operando2 == 0){
			$solucion= "no se puede dividir por cero";
        } else{
            $solucion = $operando1 / $operando2;}

	}
   
	echo "La solución es: ".$solucion;
?>