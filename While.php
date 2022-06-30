<?php

// --------------------------------
// -- Bucle While - Do While
// --------------------------------

/*

La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.

while (expresión)
{
//código
}

 */

$leerEsDivertido = true;

/* while ($leerEsDivertido) {
echo "Leer es divertido";
$leerEsDivertido = false;
} */

$i = 6;
do {
    echo "Leer es divertido $i <br>";
    $i++;
} while ($i < 5);
