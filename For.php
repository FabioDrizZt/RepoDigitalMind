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

La primera expresión se ejecuta una vez al principio del bucle.
La mayor parte de las veces se trata de un valor puesto a cero.
La segunda expresión es una declaración condicional, que se evalúa al principio del bucle en cada iteración.
Si la expresión es verdadera, se ejecuta el código dentro de los paréntesis.
La tercera expresión se ejecuta al final de cada una de las iteraciones del bucle.

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
