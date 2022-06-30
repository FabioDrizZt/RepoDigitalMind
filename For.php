<?php

// --------------------------------
// -- Bucle For
// --------------------------------

/*

Sintaxis del bucle for

for (expr1; expr2; expr3)
{
//código
}
 */

/* $i = 0;
while ($i < 5) {
echo "Leer es divertido $i <br>";
$i++;
} */
$N = readline("Cuantas veces desea ejecutar el codigo: ");
for ($i = 1; $i <= $N; $i++) {
    echo "Leer es divertido $i " . PHP_EOL;
}
unset($i);
echo $i;
