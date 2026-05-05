<?php

// duración de la llamada 
$minutos = 10;

// costo
if ($minutos <= 3) {
    $costo = 300; 
} else {
    $extra = $minutos - 3;          
    $costo = 300 + ($extra * 50);  
}

echo "Duración: " . $minutos . " minutos<br>";
echo "Costo a pagar: $" . $costo;

?>