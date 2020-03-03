<?php 
$venta=0;
$comision=0;
$total=0;

if(isset($venta <= 150)){
$comision = 0;
} else if ($venta>150 && $venta<=400) {
$comision= 0.1*$ventas;
} else {
$comision = 50 + 0.09*$venta;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ventas Totales de un empleado</title>
</head>
<body>

</body>
</html>