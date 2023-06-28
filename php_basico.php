<?php
/*
? Funciones de salida en php:

*En PHP, las funciones de salida se utilizan para mostrar información al usuario en la salida estándar del servidor web. Las tres funciones más comunes para imprimir en PHP son echo(), print(), y sprintf().

*/

//*La primera es echo() y se utiliza para mostrar una o varias cadenas de texto en la salida del servidor web. Puede imprimir múltiples valores separados por comas como se muestra en el siguiente ejemplo:

$nombre = "Juan";
$edad = 25;
echo "Hola, soy " . $nombre . " y tengo " . $edad . " años.";

//*La segunda es print() y es similar a echo() pero solo puede imprimir una cadena de texto a la vez. No se pueden separar los valores con comas y aqui esta el ejemplo:

$mensaje = "¡Hola mundo!";
print($mensaje);

//*Por último esta printf() que a diferencia de echo() y print(), sprintf() no imprime directamente en la salida estándar, sino que devuelve la cadena formateada como resultado. Puedes usar marcadores de formato para incrustar valores en la cadena y aqui se muestra el ejemplo:

$precio = 10.5;
$cantidad = 2;
$total = $precio * $cantidad;

$mensaje = sprintf("El total es: $%.2f", $total);
echo $mensaje;

?>