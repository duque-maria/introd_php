<?php

// Ejercicio 4: Dado un rango de números enteros obtener la cantidad de números pares que contiene.
$rango_inicio = 1;
$rango_fin = 100;
$cantidad_pares = 0;

for ($i = $rango_inicio; $i <= $rango_fin; $i++) {
    if ($i % 2 == 0) {
        $cantidad_pares++;
    }
}

echo "La cantidad de números pares en el rango [$rango_inicio, $rango_fin] es: $cantidad_pares";

?>
